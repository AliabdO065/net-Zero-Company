<?php

namespace App\Http\Controllers;


use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Rules\DisallowedWords;

class AboutController extends Controller
{
    //public function
    public function getContent($row){
        $slide = About::find($row);
        $slides = json_decode($slide, true);
        return $slides['content'];
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////// About secthion

    public function main()
    {
        $content = $this->getContent(1);
        return view('dashboard.about.main',compact('content'));
    }

    public function updatemain(Request $request)
    {


            $request->validate([
        'header' => ['required', new DisallowedWords],
        'wordheader' => ['required', new DisallowedWords],
        'details' => ['required', new DisallowedWords]
            ]);
            $newcontent = 'header=#='.$request->header.'#x#'.'wordheader=#='.$request->wordheader.'#x#'.'details=#='.$request->details;
                
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
                }
                else{
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
                
            About::find(1)->update(['content' => $newcontent] );
            return redirect()->route('dashboard.about.main');
    }


    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////// About secthion

    public function history()
    {
        $contentAsString = $this->getContent(2);
        $content = explode("#xt#",$contentAsString);
        return view('dashboard.about.history.all',compact('content'));
    }
////
    public function addhistory()
    {
        return view('dashboard.about.history.add');
    }
////
    public function storehistory(Request $request)
    {     
        $request->validate([
            'header' => ['required', new DisallowedWords],'wordheader' => ['required', new DisallowedWords],
            'date' => ['required', new DisallowedWords],'status' => ['required', new DisallowedWords],
            'img' => ['required'],
        ]);
        $contentAsString = $this->getContent(2);
        $content = explode("#xt#",$contentAsString);
        if (!empty($content[0]))
            $str = '#xt#'.'header=#='.$request->header.'#x#'.'wordheader=#='.$request->wordheader.'#x#'.'date=#='.$request->date.'#x#'.'status=#='.$request->status;
        else 
        $str ='header=#='.$request->header.'#x#'.'wordheader=#='.$request->wordheader.'#x#'.'date=#='.$request->date.'#x#'.'status=#='.$request->status;
        
        if ($request->file('img')) {
            $file = $request->file('img');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('images/about'), $filename);
            $path = 'images\about\\' . $filename;
            $str.='#x#'.'img=#='.$path;
        }
        $newcontent = $contentAsString . $str;
        $slidesarr['content'] = $newcontent;
        About::find(2)->update(['content' => $newcontent] );
        return redirect()->route('dashboard.about.history');
    }
////
    public function edithistory($id)
    {
        
        $allcontent = $this->getContent(2);
        $content = explode("#xt#",$allcontent);
        $slide = $content[$id];
        $pairs = explode('#x#', $slide);
        $slide = [];
        foreach ($pairs as $pair) {
            list($key, $value) = explode('=#=', $pair);
            $slide[$key] = $value;
        }
        if($id>0)
            $old= '#xt#'.'header=#='.$slide['header'].'#x#'.'wordheader=#='.$slide['wordheader'].'#x#'.'date=#='.$slide['date'].'#x#'
            .'status=#='.$slide['status'].'#x#'.'img=#='.$slide['img'];
        else
            $old= 'header=#='.$slide['header'].'#x#'.'wordheader=#='.$slide['wordheader'].'#x#'.'date=#='.$slide['date'].'#x#'
            .'status=#='.$slide['status'].'#x#'.'img=#='.$slide['img'];

        return view('dashboard.about.history.edit' , compact('slide','old'));
    }
////
    public function updatehistory(Request $request)
    {
        $old =$request->old;
        $request->validate([
            'header' => ['required', new DisallowedWords],'wordheader' => ['required', new DisallowedWords],'date' => ['required', new DisallowedWords],'status' => ['required', new DisallowedWords],
        ]);
        $allcontent = $this->getContent(2);
        if($old[0]=='#'&& $old[2]=='t')
        $str = '#xt#'.'header=#='.$request->header.'#x#'.'wordheader=#='.$request->wordheader.'#x#'.'date=#='.$request->date.'#x#'.'status=#='.$request->status;
        else
        $str ='header=#='.$request->header.'#x#'.'wordheader=#='.$request->wordheader.'#x#'.'date=#='.$request->date.'#x#'.'status=#='.$request->status;

        if ($request->file('img')) {
            $file = $request->file('img');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('images/about'), $filename);
            $path = 'images\about\\' . $filename;
            $str.='#x#'.'img=#='.$path;

            $filePath = public_path($request->image); 
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
        }else{
            $str.='#x#'.'img=#='.$request->image;
        }
        $newcontent = str_replace($old, $str, $allcontent);
        About::find(2)->update(['content' => $newcontent] );
        return redirect()->route('dashboard.about.history');
    }
////
    public function deletehistory($id)
    {
        $allcontent = $this->getContent(2);
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
        $old= '#xt#'.'header=#='.$slide['header'].'#x#'.'wordheader=#='.$slide['wordheader'].'#x#'.'date=#='.$slide['date'].'#x#'
        .'status=#='.$slide['status'].'#x#'.'img=#='.$slide['img'];
        else if(isset($content[1]))
        $old= 'header=#='.$slide['header'].'#x#'.'wordheader=#='.$slide['wordheader'].'#x#'.'date=#='.$slide['date'].'#x#'
        .'status=#='.$slide['status'].'#x#'.'img=#='.$slide['img'].'#xt#';
        else
        $old= 'header=#='.$slide['header'].'#x#'.'wordheader=#='.$slide['wordheader'].'#x#'.'date=#='.$slide['date'].'#x#'
        .'status=#='.$slide['status'].'#x#'.'img=#='.$slide['img'];

        $newcontent = str_replace($old,'' ,$allcontent);
        About::find(2)->update(['content' => $newcontent]);

        return redirect()->route('dashboard.about.history');
    }


    
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////// services secthion

    
    public function services()
    {
        $contentAsString = $this->getContent(3);
        $content = explode("#xt#",$contentAsString);
        $header = $content[0];
        return view('dashboard.about.services.all',compact('content','header'));
    }
////
    public function updateheader(Request $request)
    {
                $contentAsString = $this->getContent(3);
                $request->validate([
                    'header' => ['required', new DisallowedWords],
                ]);
                $content = 'header=#='.$request->header;
                $newcontent = str_replace($request->old, $content, $contentAsString);

                About::find(3)->update(['content' => $newcontent] );
                return redirect()->route('dashboard.about.services');
    }
////
    public function add()
    {
        return view('dashboard.about.services.add');
    }
////
    public function store(Request $request)
    {       
        $request->validate([
            'status' => ['required', new DisallowedWords],
            'title1' => ['required', new DisallowedWords],
            'title2' => ['required', new DisallowedWords],
            'img' => ['required'],
        ]);

        $contentAsString = $this->getContent(3);
        $content = explode("#xt#",$contentAsString);

            $str = '#xt#'.'status=#='.$request->status.'#x#'.'title1=#='.$request->title1.'#x#'.'title2=#='.$request->title2;
        
        if ($request->file('img')) {
            $file = $request->file('img');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('images/about/'), $filename);
            $path = 'images\about\\' . $filename;
            $str.='#x#'.'img=#='.$path;
        }
        $newcontent = $contentAsString . $str;
        $slidesarr['content'] = $newcontent;
        About::find(3)->update(['content' => $newcontent]);
        return redirect()->route('dashboard.about.services');
    }
////
    public function edit($id)
    {
        $allcontent = $this->getContent(3);
        $content = explode("#xt#",$allcontent);
        $slide = $content[$id];
        $pairs = explode('#x#', $slide);
        $slide = [];
        foreach ($pairs as $pair) {
            list($key, $value) = explode('=#=', $pair);
            $slide[$key] = $value;
        }

        $old= '#xt#'.'status=#='.$slide['status'].'#x#'.'title1=#='.$slide['title1'].'#x#'.'title2=#='.$slide['title2'].'#x#'.
        'img=#='.$slide['img'];
        return view('dashboard.about.services.edit' , compact('slide','old'));
    }
////
    public function update(Request $request)
    {
        $old =$request->old;
        $request->validate([
            'status' => ['required', new DisallowedWords],
            'title1' => ['required', new DisallowedWords],
            'title2' => ['required', new DisallowedWords],
        ]);
        $allcontent = $this->getContent(3);
        $str = '#xt#'.'status=#='.$request->status.'#x#'.'title1=#='.$request->title1.'#x#'.'title2=#='.$request->title2;

        if ($request->file('img')) {
            $file = $request->file('img');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('images/about/'), $filename);
            $path = 'images\about\\' . $filename;
            $str.='#x#'.'img=#='.$path;

            $filePath = public_path($request->image); 
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
        }else{
            $str.='#x#'.'img=#='.$request->image;
        }
        $newcontent = str_replace($old, $str, $allcontent);
        About::find(3)->update(['content' => $newcontent] );
        return redirect()->route('dashboard.about.services');
    }
////
    public function delete($id)
    {
        $allcontent = $this->getContent(3);
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
        $old= '#xt#'.'status=#='.$slide['status'].'#x#'.'title1=#='.$slide['title1'].'#x#'.'title2=#='.$slide['title2'].'#x#'.
            'img=#='.$slide['img'];
        $newcontent = str_replace($old,'' ,$allcontent);
        About::find(3)->update(['content' => $newcontent]);

        return redirect()->route('dashboard.about.services');
    }



   /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////// Images secthion

    public function images()
    {
        $content = $this->getContent(4);
        return view('dashboard.about.images',compact('content'));
    }

    public function updateimages(Request $request)
    {
            $request->validate([
                'header' => ['required', new DisallowedWords],'wordheader' => ['required', new DisallowedWords],
            ]);
            $newcontent = 'header=#='.$request->header.'#x#'.'wordheader=#='.$request->wordheader;
                

                if ($request->file('img1')) {
                    $file = $request->file('img1');
                    $filename = Str::uuid() . $file->getClientOriginalName();
                    $file->move(public_path('images/about'), $filename);
                    $path = 'images\about\\' . $filename;
                    $newcontent.='#x#'.'img1=#='.$path;

                    $filePath = public_path($request->image1);
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }
                else{
                    $newcontent.='#x#'.'img1=#='.$request->image1;
                }
                if ($request->file('img2')) {
                    $file = $request->file('img2');
                    $filename = Str::uuid() . $file->getClientOriginalName();
                    $file->move(public_path('images/about'), $filename);
                    $path = 'images\about\\' . $filename;
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
                    $file->move(public_path('images/about'), $filename);
                    $path = 'images\about\\' . $filename;
                    $newcontent.='#x#'.'img3=#='.$path;
        
                    $filePath = public_path($request->image3); 
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }else{
                    $newcontent.='#x#'.'img3=#='.$request->image3;
                }
                if ($request->file('img4')) {
                    $file = $request->file('img4');
                    $filename = Str::uuid() . $file->getClientOriginalName();
                    $file->move(public_path('images/about'), $filename);
                    $path = 'images\about\\' . $filename;
                    $newcontent.='#x#'.'img4=#='.$path;

                    $filePath = public_path($request->image4);
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }
            else{
                $newcontent.='#x#'.'img4=#='.$request->image4;
            }
            if ($request->file('img5')) {
                $file = $request->file('img5');
                $filename = Str::uuid() . $file->getClientOriginalName();
                $file->move(public_path('images/about'), $filename);
                $path = 'images\about\\' . $filename;
                $newcontent.='#x#'.'img5=#='.$path;

                $filePath = public_path($request->image5);
                if (File::exists($filePath)) {
                    File::delete($filePath);
                }
            }
        else{
            $newcontent.='#x#'.'img5=#='.$request->image5;
        }
        if ($request->file('img6')) {
            $file = $request->file('img6');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('images/about'), $filename);
            $path = 'images\about\\' . $filename;
            $newcontent.='#x#'.'img6=#='.$path;

            $filePath = public_path($request->image6);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
        }
    else{
        $newcontent.='#x#'.'img6=#='.$request->image6;
    }
                
            About::find(4)->update(['content' => $newcontent] );
            return redirect()->route('dashboard.about.images');
    }

}

