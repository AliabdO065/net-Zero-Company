<?php

namespace App\Http\Controllers;
use App\Models\Projects;
use App\Models\Home;
use App\Models\News;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Rules\DisallowedWords;

use function PHPUnit\Framework\isEmpty;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //public function
    public function getContent($row){
        $slide = Home::find($row);
        $slides = json_decode($slide, true);
        return $slides['content'];
    }


    public function getinfo($row,$tabel){
        $slide = $tabel::find($row);
        $slides = json_decode($slide, true);
        $contentasstring =  $slides['content'];
        $content = explode('#xt#', $contentasstring);
        return $content;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {
        $comments = $this->getinfo(2, News::class);
        $news = $this->getinfo(1, News::class);
        $projects = $this->getinfo(1, Projects::class);
        $services = $this->getinfo(2, Service::class);
        
        return view('dashboard.index',compact('comments','news','services','projects'));
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////// slider secthion
    
    public function slides()
    {
        $contentAsString = $this->getContent(1);
        $content = explode("#xt#",$contentAsString);
        return view('dashboard.home.slider.all',compact('content'));
    }
////
    public function addslide()
    {
        return view('dashboard.home.slider.add');
    }
////
    public function storeslide(Request $request)
    {       
        $request->validate([
            'title' => ['required', new DisallowedWords],
            'details' => ['required', new DisallowedWords],
            'img' => ['required'],
        ]);

        $contentAsString = $this->getContent(1);
        $content = explode("#xt#",$contentAsString);
        if (!empty($content[0]))
            $str = '#xt#'.'title=#='.$request->title.'#x#'.'details=#='.$request->details;
        else 
        $str ='title=#='.$request->title.'#x#'.'details=#='.$request->details;
        
        if ($request->file('img')) {
            $file = $request->file('img');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('images/home/slide'), $filename);
            $path = 'images\home\slide\\' . $filename;
            $str.='#x#'.'img=#='.$path;
        }
        $newcontent = $contentAsString . $str;
        $slidesarr['content'] = $newcontent;
        Home::find(1)->update(['content' => $newcontent] );
        return redirect()->route('dashboard.slides');
    }
////
    public function editslide($id)
    {
        
        $allcontent = $this->getContent(1);
        $content = explode("#xt#",$allcontent);
        $slide = $content[$id];
        $pairs = explode('#x#', $slide);
        $slide = [];
        foreach ($pairs as $pair) {
            list($key, $value) = explode('=#=', $pair);
            $slide[$key] = $value;
        }
        if($id>0)
            $old= '#xt#'.'title=#='.$slide['title'].'#x#'.'details=#='.$slide['details'].'#x#'.'img=#='.$slide['img'];
        else
            $old= 'title=#='.$slide['title'].'#x#'.'details=#='.$slide['details'].'#x#'.'img=#='.$slide['img'];

        return view('dashboard.home.slider.edit' , compact('slide','old'));
    }
////
    public function updateslide(Request $request)
    {
        $old =$request->old;
        $request->validate([
            'title' => ['required', new DisallowedWords],
            'details' => ['required', new DisallowedWords],
        ]);
        $allcontent = $this->getContent(1);
        if($old[0]=='#'&& $old[2]=='t')
        $str = '#xt#'.'title=#='.$request->title.'#x#'.'details=#='.$request->details;
        else
        $str ='title=#='.$request->title.'#x#'.'details=#='.$request->details;

        if ($request->file('img')) {
            $file = $request->file('img');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('images/home/slide'), $filename);
            $path = 'images\home\slide\\' . $filename;
            $str.='#x#'.'img=#='.$path;

            $pairs = explode('#x#', $old);
            $slide = [];
            foreach ($pairs as $pair) {
                list($key, $value) = explode('=#=', $pair);
                $slide[$key] = $value;
            }
            $filePath = public_path($slide['img']); 
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
        }else{
            $str.='#x#'.'img=#='.$request->img;
        }
        $newcontent = str_replace($old, $str, $allcontent);
        Home::find(1)->update(['content' => $newcontent] );
        return redirect()->route('dashboard.slides');
    }
////
    public function deleteslide($id)
    {
        $allcontent = $this->getContent(1);
        $content = explode("#xt#",$allcontent);
        $slide = $content[$id];
        $pairs = explode('#x#', $slide);
        
        $slide = [];
        foreach ($pairs as $pair) {
            list($key, $value) = explode('=#=', $pair);
            $slide[$key] = $value;
        }

        $filePath = public_path($slide['img']); 
        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        if($id>0)
        $old= '#xt#'.'title=#='.$slide['title'].'#x#'.'details=#='.$slide['details'].'#x#'.'img=#='.$slide['img'];
        else if(isset($content[1]))
        $old= 'title=#='.$slide['title'].'#x#'.'details=#='.$slide['details'].'#x#'.'img=#='.$slide['img'].'#xt#';
        else
        $old= 'title=#='.$slide['title'].'#x#'.'details=#='.$slide['details'].'#x#'.'img=#='.$slide['img'];

        $newcontent = str_replace($old,'' ,$allcontent);
        Home::find(1)->update(['content' => $newcontent]);

        return redirect()->route('dashboard.slides');
    }


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////// Services secthion

    public function services()
    {
        $content = $this->getContent(2);
        return view('dashboard.home.services.index',compact('content'));
    }

    public function updateservices(Request $request)
    {
            $request->validate([
                'header' => ['required', new DisallowedWords],
                'wordheader' => ['required', new DisallowedWords],
                'titleclients' => ['required', new DisallowedWords],
                'numberclients' => ['required', new DisallowedWords],
                'titleprojects' => ['required', new DisallowedWords],
                'numberprojects' => ['required', new DisallowedWords],
                'titlefeet' => ['required', new DisallowedWords],
                'title1' => ['required', new DisallowedWords],
                'title2' => ['required', new DisallowedWords],
                'title3' => ['required', new DisallowedWords],
                'title4' => ['required', new DisallowedWords],
            ]);
            $newcontent = 'header=#='.$request->header.'#x#'.'wordheader=#='.$request->wordheader.'#x#'
                        .'titleclients=#='.$request->titleclients.'#x#'.'numberclients=#='.$request->numberclients.'#x#'
                        .'titleprojects=#='.$request->titleprojects.'#x#'.'numberprojects=#='.$request->numberprojects.'#x#'
                        .'titlefeet=#='.$request->titlefeet.'#x#'.'numberfeet=#='.$request->numberfeet.'#x#'.
                        'title1=#='.$request->title1.'#x#'.'title2=#='.$request->title2.'#x#'.'title3=#='.$request->title3.'#x#'.'title4=#='.$request->title4;
            Home::find(2)->update(['content' => $newcontent] );
            return redirect()->route('dashboard.services.home');
    }




/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////// About secthion

    public function about()
    {
        $content = $this->getContent(3);
        return view('dashboard.home.about.index',compact('content'));
    }

    public function updateabout(Request $request)
    {
            $request->validate([
                'header' => ['required', new DisallowedWords],'wordheader' => ['required', new DisallowedWords],
                'thistory' => ['required', new DisallowedWords],'tmission' => ['required', new DisallowedWords], 'tvision' => ['required', new DisallowedWords],
                'history' => ['required', new DisallowedWords],'mission' => ['required', new DisallowedWords], 'vision' => ['required', new DisallowedWords],
                'row1' => ['required', new DisallowedWords],'row2' => ['required', new DisallowedWords],'row3' => ['required', new DisallowedWords],
                'p1' => ['required', new DisallowedWords], 'p2' => ['required', new DisallowedWords],'p3' => ['required', new DisallowedWords],
            ]);
            $newcontent = 'header=#='.$request->header.'#x#'.'wordheader=#='.$request->wordheader.'#x#'
            .'thistory=#='.$request->thistory.'#x#'.'tmission=#='.$request->tmission.'#x#'.'tvision=#='.$request->tvision.'#x#'
                        .'history=#='.$request->history.'#x#'.'mission=#='.$request->mission.'#x#'.'vision=#='.$request->vision.'#x#'
                        .'row1=#='.$request->row1.'#x#'.'p1=#='.$request->p1.'#x#'
                        .'row2=#='.$request->row2.'#x#'.'p2=#='.$request->p2.'#x#'
                        .'row3=#='.$request->row3.'#x#'.'p3=#='.$request->p3;
                
                if ($request->file('img1')) {
                    $file = $request->file('img1');
                    $filename = Str::uuid() . $file->getClientOriginalName();
                    $file->move(public_path('images/home/about'), $filename);
                    $path = 'images\home\about\\' . $filename;
                    $newcontent.='#x#'.'img1=#='.$path;

                    $filePath = public_path($request->image1);
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }else{
                    $newcontent.='#x#'.'img1=#='.$request->image1;
                }
                if ($request->file('img2')) {
                    $file = $request->file('img2');
                    $filename = Str::uuid() . $file->getClientOriginalName();
                    $file->move(public_path('images/home/about'), $filename);
                    $path = 'images\home\about\\' . $filename;
                    $newcontent.='#x#'.'img2=#='.$path;

                    $filePath = public_path($request->image2); 
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }else{
                    $newcontent.='#x#'.'img2=#='.$request->image2;
                }
                if ($request->file('img3')) {
                    $file = $request->file('img3');
                    $filename = Str::uuid() . $file->getClientOriginalName();
                    $file->move(public_path('images/home/about'), $filename);
                    $path = 'images\home\about\\' . $filename;
                    $newcontent.='#x#'.'img3=#='.$path;
        
                    $filePath = public_path($request->image3); 
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }else{
                    $newcontent.='#x#'.'img3=#='.$request->image3;
                }
                
            Home::find(3)->update(['content' => $newcontent] );
            return redirect()->route('dashboard.about');
    }





/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////Category secthion

    public function category()
    {
        $contentAsString = $this->getContent(4);
        $content = explode("#xt#",$contentAsString);
        return view('dashboard.home.category.all',compact('content'));
    }
////
    public function addcategory()
    {
        return view('dashboard.home.category.add');
    }
////
    public function storecategory(Request $request)
    {
        $request->validate([
            'title' => ['required', new DisallowedWords],
            'details' => ['required', new DisallowedWords],
            'icon' => ['required', new DisallowedWords],
            'status' => ['required', new DisallowedWords],
        ]);
        $contentAsString = $this->getContent(4);
        $content = explode("#xt#",$contentAsString);
        if (!empty($content[0]))
            $str = '#xt#'.'title=#='.$request->title.'#x#'.'details=#='.$request->details.'#x#'.'icon=#='.$request->icon.'#x#'.'status=#='.$request->status;
        else 
            $str ='title=#='.$request->title.'#x#'.'details=#='.$request->details.'#x#'.'icon=#='.$request->icon.'#x#'.'status=#='.$request->status;
        
        $newcontent = $contentAsString . $str;
        $slidesarr['content'] = $newcontent;
        Home::find(4)->update(['content' => $newcontent] );
        return redirect()->route('dashboard.category');
    }
////
    public function editcategory($id)
    {
        $query = Home::find(4);
        $slides = json_decode($query, true);
        $allcontent = $slides['content'];
        $content = explode("#xt#",$allcontent);
        $slide = $content[$id];
        $pairs = explode('#x#', $slide);
        $slide = [];
        foreach ($pairs as $pair) {
            list($key, $value) = explode('=#=', $pair);
            $slide[$key] = $value;
        }
        if($id>0)
            $old= '#xt#'.'title=#='.$slide['title'].'#x#'.'details=#='.$slide['details'].'#x#'.'icon=#='.$slide['icon'].'#x#'.'status=#='.$slide['status'];
        else
            $old= 'title=#='.$slide['title'].'#x#'.'details=#='.$slide['details'].'#x#'.'icon=#='.$slide['icon'].'#x#'.'status=#='.$slide['status'];

        return view('dashboard.home.category.edit' , compact('slide','old'));
    }
////
    public function updatecategory(Request $request)
    {
        $old =$request->old;
        $request->validate([
            'title' => ['required', new DisallowedWords],
            'details' => ['required', new DisallowedWords],
            'status' => ['required', new DisallowedWords],
        ]);
        $allcontent = $this->getContent(4);
        if($old[0]=='#'&& $old[2]=='t')
        $str = '#xt#'.'title=#='.$request->title.'#x#'.'details=#='.$request->details;
        else
        $str ='title=#='.$request->title.'#x#'.'details=#='.$request->details;
        
        if ($request->icon) {
            $str.='#x#'.'icon=#='.$request->icon;
        }else{
            $slide = [];
            $pairs = explode('#x#', $old);
            foreach ($pairs as $pair) {
                list($key, $value) = explode('=#=', $pair);
                $slide[$key] = $value;
            }
            $str.='#x#'.'icon=#='.$slide['icon'];
        }
        $str.='#x#'.'status=#='.$request->status;
        $newcontent = str_replace($old, $str, $allcontent);
        Home::find(4)->update(['content' => $newcontent] );
        return redirect()->route('dashboard.category');
    }
////
    public function deletecategory($id)
    {
        $allcontent = $this->getContent(4);
        $content = explode("#xt#",$allcontent);
        $slide = $content[$id];
        $pairs = explode('#x#', $slide);
        
        $slide = [];
        foreach ($pairs as $pair) {
            list($key, $value) = explode('=#=', $pair);
            $slide[$key] = $value;
        }

        if($id>0)
        $old= '#xt#'.'title=#='.$slide['title'].'#x#'.'details=#='.$slide['details'].'#x#'.'icon=#='.$slide['icon'].'#x#'.'status=#='.$slide['status'];
        else if(isset($content[1]))
        $old= 'title=#='.$slide['title'].'#x#'.'details=#='.$slide['details'].'#x#'.'icon=#='.$slide['icon'].'#x#'.'status=#='.$slide['status'].'#xt#';
        else
        $old= 'title=#='.$slide['title'].'#x#'.'details=#='.$slide['details'].'#x#'.'icon=#='.$slide['icon'].'#x#'.'status=#='.$slide['status'];
        $newcontent = str_replace($old,'' ,$allcontent);
        Home::find(4)->update(['content' => $newcontent]);
        
        return redirect()->route('dashboard.category');

    }




/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////// Images secthion

    public function images()
    {
        $contentAsString = $this->getContent(5);
        $content = explode("#xt#",$contentAsString);
        return view('dashboard.home.images.images',compact('content'));
    }
    public function addimages()
    {
        return view('dashboard.home.images.add');
    }
    ////
    public function storeimages(Request $request)
    {       
        $request->validate([
            'img' => ['required'],
        ]);
    
        $contentAsString = $this->getContent(5);
        $content = explode("#xt#",$contentAsString);
        if (!empty($content[0]))
            $str = '#xt#';
        else 
            $str = '';
        
        if ($request->file('img')) {
            $file = $request->file('img');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('images/home/about'), $filename);
            $path = 'images\home\about\\' . $filename;
            $str.='img=#='.$path;
        }
        $newcontent = $contentAsString . $str;
        $slidesarr['content'] = $newcontent;
        Home::find(5)->update(['content' => $newcontent] );
        return redirect()->route('dashboard.images.home');
    }
    
    public function editimages($id)
    {
        $allcontent = $this->getContent(5);
        $content = explode("#xt#",$allcontent);
        $slide = $content[$id];
        $pairs = explode('#x#', $slide);
        $slide = [];
        foreach ($pairs as $pair) {
            list($key, $value) = explode('=#=', $pair);
            $slide[$key] = $value;
        }
        if($id>0)
            $old= '#xt#'.'img=#='.$slide['img'];
        else
            $old= 'img=#='.$slide['img'];
        return view('dashboard.home.images.edit' , compact('slide','old'));
    }
    ////
    public function updateimages(Request $request)
    {
        $old =$request->old;
        $allcontent = $this->getContent(5);

        if($old[0]=='#'&& $old[2]=='t')
        $str = '#xt#';
        else
        $str ='';
        if ($request->file('img')) {
            $file = $request->file('img');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('images/home/about'), $filename);
            $path = 'images\home\about\\' . $filename;
            $str.='img=#='.$path;
    
            $filePath = public_path($request->image); 
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
        }else{
            $str.='#x#'.'img=#='.$request->image;
        }
        $newcontent = str_replace($old, $str, $allcontent);
        Home::find(5)->update(['content' => $newcontent] );
        return redirect()->route('dashboard.images.home');
    }
    
public function deleteimages($id)
{
    $allcontent = $this->getContent(5);
    $content = explode("#xt#",$allcontent);
    $slide = $content[$id]; 
    $pairs = explode('#x#', $slide);   
    $slide = [];
    foreach ($pairs as $pair) {
        list($key, $value) = explode('=#=', $pair);
        $slide[$key] = $value;
    }
    if($id>0)
        $old= '#xt#'.'img=#='.$slide['img'];
    else if(isset($content[1]))
        $old= 'img=#='.$slide['img'].'#xt#';
    else
        $old='img=#='.$slide['img']; 

    $filePath = public_path($slide['img']); 
    if (File::exists($filePath)) {
        File::delete($filePath);
    }
    $newcontent = str_replace($old,'' ,$allcontent);
    Home::find(5)->update(['content' => $newcontent]);

    return redirect()->route('dashboard.images.home');
}


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////// Control project news secthion

    public function control()
    {
        $content = $this->getContent(6);
        return view('dashboard.home.control.index',compact('content'));
    }

    public function updatecontrol(Request $request)
    {
            $request->validate([
                'headerprojects' => ['required', new DisallowedWords],
                'wordheaderprojects' => ['required', new DisallowedWords],
                'headernews' => ['required', new DisallowedWords],
                'wordheadernews' => ['required', new DisallowedWords],
            ]);
            $newcontent = 'headerprojects=#='.$request->headerprojects.'#x#'.'wordheaderprojects=#='.$request->wordheaderprojects.'#x#'
                        .'headernews=#='.$request->headernews.'#x#'.'wordheadernews=#='.$request->wordheadernews;
            Home::find(6)->update(['content' => $newcontent] );
            return redirect()->route('dashboard.control');
    }



/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////// Master secthion
    public function masters()
    {
        $contentAsString = $this->getContent(7);
        $content = explode("#xt#",$contentAsString);
        $header = $content[0];
        return view('dashboard.home.master.all',compact('content','header'));
    }
////
    public function updateHeader(Request $request)
    {
                $contentAsString = $this->getContent(7);
                $request->validate([
                    'header' => ['required', new DisallowedWords],
                    'wordheader' => ['required', new DisallowedWords],
                ]);
                $content = 'header=#='.$request->header.'#x#'.'wordheader=#='.$request->wordheader;
                $newcontent = str_replace($request->old, $content, $contentAsString);

                Home::find(7)->update(['content' => $newcontent] );
                return redirect()->route('dashboard.master');
    }
////
    public function addmaster()
    {
        return view('dashboard.home.master.add');
    }
////
    public function storemaster(Request $request)
    {       
        $request->validate([
            'name' => ['required', new DisallowedWords],
            'position' => ['required', new DisallowedWords],
            'facebook' => ['required', new DisallowedWords],
            'twitter' => ['required', new DisallowedWords],
            'insta' => ['required', new DisallowedWords],
            'gmail' => ['required', new DisallowedWords],
            'img' => ['required'],
            'status' => ['required', new DisallowedWords],
        ]);

        $contentAsString = $this->getContent(7);
        $content = explode("#xt#",$contentAsString);

            $str = '#xt#'.'name=#='.$request->name.'#x#'.'position=#='.$request->position
                    . '#x#'.'facebook=#='.$request->facebook.'#x#'.'twitter=#='.$request->twitter
                    . '#x#'.'insta=#='.$request->insta.'#x#'.'gmail=#='.$request->gmail .'#x#'.'status=#='.$request->status;
        
        if ($request->file('img')) {
            $file = $request->file('img');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('images/home/master'), $filename);
            $path = 'images\home\master\\' . $filename;
            $str.='#x#'.'img=#='.$path;
        }
        $newcontent = $contentAsString . $str;
        $slidesarr['content'] = $newcontent;
        Home::find(7)->update(['content' => $newcontent] );
        return redirect()->route('dashboard.master');
    }
////
    public function editmaster($id)
    {
        $allcontent = $this->getContent(7);
        $content = explode("#xt#",$allcontent);
        $slide = $content[$id];
        $pairs = explode('#x#', $slide);
        $slide = [];
        foreach ($pairs as $pair) {
            list($key, $value) = explode('=#=', $pair);
            $slide[$key] = $value;
        }

        $old= '#xt#'.'name=#='.$slide['name'].'#x#'.'position=#='.$slide['position'].'#x#'.'facebook=#='.$slide['facebook']
        .'#x#'.'twitter=#='.$slide['twitter'].'#x#'.'insta=#='.$slide['insta'].'#x#'.'gmail=#='.$slide['gmail'].'#x#'.'status=#='.$slide['status'].'#x#'.'img=#='.$slide['img'];
        return view('dashboard.home.master.edit' , compact('slide','old'));
    }
////
    public function updatemaster(Request $request)
    {
        $old =$request->old;
        $request->validate([
            'name' => ['required', new DisallowedWords],
            'position' => ['required', new DisallowedWords],
            'facebook' => ['required', new DisallowedWords],
            'twitter' => ['required', new DisallowedWords],
            'insta' => ['required', new DisallowedWords],
            'gmail' => ['required', new DisallowedWords],
        ]);
        $allcontent = $this->getContent(7);
        $str = '#xt#'.'name=#='.$request->name.'#x#'.'position=#='.$request->position
                . '#x#'.'facebook=#='.$request->facebook.'#x#'.'twitter=#='.$request->twitter
                . '#x#'.'insta=#='.$request->insta.'#x#'.'gmail=#='.$request->gmail.'#x#'.'status=#='.$request->status;

        if ($request->file('img')) {
            $file = $request->file('img');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('images/home/master'), $filename);
            $path = 'images\home\master\\' . $filename;
            $str.='#x#'.'img=#='.$path;

            $filePath = public_path($request->image); 
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
        }else{
            $str.='#x#'.'img=#='.$request->image;
        }
        $newcontent = str_replace($old, $str, $allcontent);
        Home::find(7)->update(['content' => $newcontent] );
        return redirect()->route('dashboard.master');
    }
////
    public function deletemaster($id)
    {
        $allcontent = $this->getContent(7);
        $content = explode("#xt#",$allcontent);
        $slide = $content[$id];
        $pairs = explode('#x#', $slide);
        
        $slide = [];
        foreach ($pairs as $pair) {
            list($key, $value) = explode('=#=', $pair);
            $slide[$key] = $value;
        }
        $filePath = public_path($slide['img']); 
        if (File::exists($filePath)) {
            File::delete($filePath);
        }
        $old= '#xt#'.'name=#='.$slide['name'].'#x#'.'position=#='.$slide['position'].'#x#'.'facebook=#='.$slide['facebook']
        .'#x#'.'twitter=#='.$slide['twitter'].'#x#'.'insta=#='.$slide['insta'].'#x#'.'gmail=#='.$slide['gmail'].'#x#'.'status=#='.$slide['status'].'#x#'.'img=#='.$slide['img'];
        $newcontent = str_replace($old,'' ,$allcontent);
        Home::find(7)->update(['content' => $newcontent]);

        return redirect()->route('dashboard.master');
    }








/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////// Contact secthion

    public function contact()
    {
        $content = $this->getContent(8);
        return view('dashboard.home.contact.index',compact('content'));
    }

    public function updatecontact(Request $request)
    {
            $request->validate([
                'header' => ['required', new DisallowedWords],
                'wordheader' => ['required', new DisallowedWords],
                'title' => ['required', new DisallowedWords],
                'wordtitle' => ['required', new DisallowedWords],
                'words' => ['required', new DisallowedWords],
                'directmail' => ['required', new DisallowedWords],
                'directphone' => ['required', new DisallowedWords],
            ]);
            $newcontent = 'header=#='.$request->header.'#x#'.'wordheader=#='.$request->wordheader.'#x#'.'title=#='.$request->title.'#x#'.'wordtitle=#='.$request->wordtitle.'#x#'.'words=#='.$request->words.'#x#'.'directMail=#='.$request->directmail.'#x#'.'directPhone=#='.$request->directphone;
            Home::find(8)->update(['content' => $newcontent] );
            return redirect()->route('dashboard.contact');
    }






/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////// footer secthion

    public function footer()
    {
        $contentAsString = $this->getContent(9);
        $content = explode("#xt#",$contentAsString);
        return view('dashboard.home.footer.all',compact('content'));
    }
////
    public function addfooter()
    {
        return view('dashboard.home.footer.add');
    }
////
    public function storefooter(Request $request)
    {
        $request->validate([
            'name' => ['required', new DisallowedWords],
            'phone' => ['required', new DisallowedWords],
            'address' => ['required', new DisallowedWords],
            'email' => ['required', new DisallowedWords],
            'status' => ['required', new DisallowedWords],
        ]);

        $contentAsString = $this->getContent(9);
        $content = explode("#xt#",$contentAsString);
        if (!empty($content[0]))
            $str = '#xt#'.'name=#='.$request->name.'#x#'.'phone=#='.$request->phone.'#x#'.'email=#='.$request->email.'#x#'.'address=#='.$request->address.'#x#'.'status=#='.$request->status;
        else 
            $str ='name=#='.$request->name.'#x#'.'phone=#='.$request->phone.'#x#'.'email=#='.$request->email.'#x#'.'address=#='.$request->address.'#x#'.'status=#='.$request->status;
        $newcontent = $contentAsString . $str;
        $slidesarr['content'] = $newcontent;
        Home::find(9)->update(['content' => $newcontent] );
        return redirect()->route('dashboard.footer');
    }
////
    public function editfooter($id)
    {
        $query = Home::find(9);
        $slides = json_decode($query, true);
        $allcontent = $slides['content'];
        $content = explode("#xt#",$allcontent);
        $slide = $content[$id];
        $pairs = explode('#x#', $slide);
        $slide = [];
        foreach ($pairs as $pair) {
            list($key, $value) = explode('=#=', $pair);
            $slide[$key] = $value;
        }
        if($id>0)
            $old= '#xt#'.'name=#='.$slide['name'].'#x#'.'phone=#='.$slide['phone'].'#x#'.'email=#='.$slide['email'].'#x#'.'address=#='.$slide['address'].'#x#'.'status=#='.$slide['status'];
        else
            $old= 'name=#='.$slide['name'].'#x#'.'phone=#='.$slide['phone'].'#x#'.'email=#='.$slide['email'].'#x#'.'address=#='.$slide['address'].'#x#'.'status=#='.$slide['status'];

        return view('dashboard.home.footer.edit' , compact('slide','old'));
    }
////
    public function updatefooter(Request $request)
    {
        $old =$request->old;
        $request->validate([
            'name' => ['required', new DisallowedWords],
            'phone' => ['required', new DisallowedWords],
            'address' => ['required', new DisallowedWords],
            'email' => ['required', new DisallowedWords],
            'status' => ['required', new DisallowedWords],
        ]);
        $allcontent = $this->getContent(9);
        if($old[0]=='#'&& $old[2]=='t')
        $str = '#xt#'.'name=#='.$request->name.'#x#'.'phone=#='.$request->phone.'#x#'.'email=#='.$request->email.'#x#'.'address=#='.$request->address.'#x#'.'status=#='.$request->status;
        else
        $str ='name=#='.$request->name.'#x#'.'phone=#='.$request->phone.'#x#'.'email=#='.$request->email.'#x#'.'address=#='.$request->address.'#x#'.'status=#='.$request->status;

        $newcontent = str_replace($old, $str, $allcontent);
        Home::find(9)->update(['content' => $newcontent] );
        return redirect()->route('dashboard.footer');
    }
////
    public function deletefooter($id)
    {
        $allcontent = $this->getContent(9);
        $content = explode("#xt#",$allcontent);
        $slide = $content[$id];
        $pairs = explode('#x#', $slide);
        
        $slide = [];
        foreach ($pairs as $pair) {
            list($key, $value) = explode('=#=', $pair);
            $slide[$key] = $value;
        }

        if($id>0)
        $old= '#xt#'.'name=#='.$slide['name'].'#x#'.'phone=#='.$slide['phone'].'#x#'.'email=#='.$slide['email'].'#x#'.'address=#='.$slide['address'].'#x#'.'status=#='.$slide['status'];
        else if(isset($content[1]))
        $old= 'name=#='.$slide['name'].'#x#'.'phone=#='.$slide['phone'].'#x#'.'email=#='.$slide['email'].'#x#'.'address=#='.$slide['address'].'#x#'.'status=#='.$slide['status'].'#xt#';
        else
        $old= 'name=#='.$slide['name'].'#x#'.'phone=#='.$slide['phone'].'#x#'.'email=#='.$slide['email'].'#x#'.'address=#='.$slide['address'].'#x#'.'status=#='.$slide['status'];
        $newcontent = str_replace($old,'' ,$allcontent);
        Home::find(9)->update(['content' => $newcontent]);
        
        return redirect()->route('dashboard.footer');

    }
    


















}