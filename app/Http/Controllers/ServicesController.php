<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Rules\DisallowedWords;

class ServicesController extends Controller
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
        $slide = Service::find($row);
        $slides = json_decode($slide, true);
        return $slides['content'];
    }
    
    public function main()
    {
        $content = $this->getContent(1);
        
        return view('dashboard.services.main',compact('content'));
    }
    public function updatemain(Request $request)
    {
            $request->validate([
                'header' => ['required', new DisallowedWords],
                'services' => ['required', new DisallowedWords],
            ]);
            $newcontent = 'header=#='.$request->header.'#x#'.
                        'services=#='.$request->services;

                if ($request->file('img1')) {
                    $file = $request->file('img1');
                    $filename = Str::uuid() . $file->getClientOriginalName();
                    $file->move(public_path('images/services'), $filename);
                    $path = 'images\services\\' . $filename;
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
                    $file->move(public_path('images/services'), $filename);
                    $path = 'images\services\\' . $filename;
                    $newcontent.='#x#'.'img2=#='.$path;

                    $filePath = public_path($request->image2);
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }else{
                    $newcontent.='#x#'.'img2=#='.$request->image2;
                }
            Service::find(1)->update(['content' => $newcontent] );
            return redirect()->route('dashboard.services.main');
    }


    
        public function services()
        {
            $contentasStrind = $this->getContent(2);
            $content = explode('#xt#', $contentasStrind);
            return view('dashboard.services.all',compact('content'));
        }
    public function add()
    {
        return view('dashboard.services.add');
    }
    
    public function store(Request $request)
    {       
        $request->validate([
            'status' => ['required', new DisallowedWords],
            'header' => ['required', new DisallowedWords],
            'title1' => ['required', new DisallowedWords],
            'contenttitle1' => ['required', new DisallowedWords],
            'title2' => ['required', new DisallowedWords],
            'contenttitle2' => ['required', new DisallowedWords],
            'title3' => ['required', new DisallowedWords],
            'contenttitle3' => ['required', new DisallowedWords],
            'img' => ['required', new DisallowedWords],
        ]);

        $contentAsString = $this->getContent(2);
        $content = explode("#xt#",$contentAsString);
        if (!empty($content[0]))
            $str = '#xt#'.'status=#='.$request->status.'#x#'.'header=#='.$request->header .
                    '#x#'.'title1=#='.$request->title1.'#x#'.'contenttitle1=#='.$request->contenttitle1 .
                    '#x#'.'title2=#='.$request->title2.'#x#'.'contenttitle2=#='.$request->contenttitle2 .
                    '#x#'.'title3=#='.$request->title3.'#x#'.'contenttitle3=#='.$request->contenttitle3 ;
        else 
        $str =     
                'status=#='.$request->status.'#x#'.'header=#='.$request->header .
                '#x#'.'title1=#='.$request->title1.'#x#'.'contenttitle1=#='.$request->contenttitle1 .
                '#x#'.'title2=#='.$request->title2.'#x#'.'contenttitle2=#='.$request->contenttitle2 .
                '#x#'.'title3=#='.$request->title3.'#x#'.'contenttitle3=#='.$request->contenttitle3  ;
        
        if ($request->file('img')) {
            $file = $request->file('img');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('images/services'), $filename);
            $path = 'images\services\\' . $filename;
            $str.='#x#'.'img=#='.$path;
        }
        $newcontent = $contentAsString . $str;
        Service::find(2)->update(['content' => $newcontent] );
        return redirect()->route('dashboard.services');
    }

    public function edit($id)
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
            $old=   '#xt#'.'status=#='.$slide['status'].'#x#'.'header=#='.$slide['header'].
            '#x#'.'title1=#='.$slide['title1'].'#x#'.'contenttitle1=#='.$slide['contenttitle1'].
            '#x#'.'title2=#='.$slide['title2'].'#x#'.'contenttitle2=#='.$slide['contenttitle2'].
            '#x#'.'title3=#='.$slide['title3'].'#x#'.'contenttitle3=#='.$slide['contenttitle3'].
            '#x#'.'img=#='.$slide['img'];
        else
            $old= 'status=#='.$slide['status'].'#x#'.'header=#='.$slide['header'].
            '#x#'.'title1=#='.$slide['title1'].'#x#'.'contenttitle1=#='.$slide['contenttitle1'].
            '#x#'.'title2=#='.$slide['title2'].'#x#'.'contenttitle2=#='.$slide['contenttitle2'].
            '#x#'.'title3=#='.$slide['title3'].'#x#'.'contenttitle3=#='.$slide['contenttitle3'].
            '#x#'.'img=#='.$slide['img'];

            return view('dashboard.services.edit' , compact('slide','old'));
        }
    public function update(Request $request)
    {
        $old =$request->old;
        $allcontent = $this->getContent(2);
        $request->validate([
            'status' => ['required', new DisallowedWords],
            'header' => ['required', new DisallowedWords],
            'title1' => ['required', new DisallowedWords],
            'contenttitle1' => ['required', new DisallowedWords],
            'title2' => ['required', new DisallowedWords],
            'contenttitle2' => ['required', new DisallowedWords],
            'title3' => ['required', new DisallowedWords],
            'contenttitle3' => ['required', new DisallowedWords],
        ]);
        
        if($old[0]=='#'&& $old[2]=='t'){
            
            $newcontent =
                '#xt#'.'status=#='.$request->status.'#x#'.'header=#='.$request->header .
                '#x#'.'title1=#='.$request->title1.'#x#'.'contenttitle1=#='.$request->contenttitle1 .
                '#x#'.'title2=#='.$request->title2.'#x#'.'contenttitle2=#='.$request->contenttitle2 .
                '#x#'.'title3=#='.$request->title3.'#x#'.'contenttitle3=#='.$request->contenttitle3 ;
        }
    else{
            $newcontent =
            'status=#='.$request->status.'#x#'.'header=#='.$request->header .
            '#x#'.'title1=#='.$request->title1.'#x#'.'contenttitle1=#='.$request->contenttitle1 .
            '#x#'.'title2=#='.$request->title2.'#x#'.'contenttitle2=#='.$request->contenttitle2 .
            '#x#'.'title3=#='.$request->title3.'#x#'.'contenttitle3=#='.$request->contenttitle3 ;
        }
 
            
                if ($request->file('img')){
                    $file = $request->file('img');
                    $filename = Str::uuid() . $file->getClientOriginalName();
                    $file->move(public_path('images/services'), $filename);
                    $path = 'images\services\\' . $filename;
                    $newcontent .='#x#'.'img=#='.$path;

                    $filePath = public_path($request->image);
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }
                else{
                    $newcontent.='#x#'.'img=#='.$request->image;
                }
                $new = str_replace($old,$newcontent, $allcontent); 
                Service::find(2)->update(['content' => $new] );
                return redirect()->route('dashboard.services');
            }
                public function delete($id)
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
                $old= '#xt#'.'status=#='.$slide['status'].'#x#'.'header=#='.$slide['header'].
                '#x#'.'title1=#='.$slide['title1'].'#x#'.'contenttitle1=#='.$slide['contenttitle1'].
                '#x#'.'title2=#='.$slide['title2'].'#x#'.'contenttitle2=#='.$slide['contenttitle2'].
                '#x#'.'title3=#='.$slide['title3'].'#x#'.'contenttitle3=#='.$slide['contenttitle3'].
                '#x#'.'img=#='.$slide['img'];
                
                else if(isset($content[1]))
                $old= 'status=#='.$slide['status'].'#x#'.'header=#='.$slide['header'].
                '#x#'.'title1=#='.$slide['title1'].'#x#'.'contenttitle1=#='.$slide['contenttitle1'].
                '#x#'.'title2=#='.$slide['title2'].'#x#'.'contenttitle2=#='.$slide['contenttitle2'].
                '#x#'.'title3=#='.$slide['title3'].'#x#'.'contenttitle3=#='.$slide['contenttitle3'].
                '#x#'.'img=#='.$slide['img'].'#xt#';
               
                else
                $old= 'status=#='.$slide['status'].'#x#'.'header=#='.$slide['header'].
                '#x#'.'title1=#='.$slide['title1'].'#x#'.'contenttitle1=#='.$slide['contenttitle1'].
                '#x#'.'title2=#='.$slide['title2'].'#x#'.'contenttitle2=#='.$slide['contenttitle2'].
                '#x#'.'title3=#='.$slide['title3'].'#x#'.'contenttitle3=#='.$slide['contenttitle3'].
                '#x#'.'img=#='.$slide['img'];

                $newcontent = str_replace($old,'' ,$allcontent);
                Service::find(2)->update(['content' => $newcontent]);
                    
                return redirect()->route('dashboard.services');
    
    }
}






