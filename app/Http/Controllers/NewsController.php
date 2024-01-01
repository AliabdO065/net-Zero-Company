<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Rules\DisallowedWords;

class NewsController extends Controller
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
        $slide = News::find($row);
        $slides = json_decode($slide, true);
        return $slides['content'];
    }


    public function news()
    {
        $contentasStrind = $this->getContent(1);
        $content = explode('#xt#', $contentasStrind);
        return view('dashboard.news.all',compact('content'));
    }
    public function add()
    {
        return view('dashboard.news.add');
    }

    public function store(Request $request)
    {       
        $request->validate([
            'status' => ['required', new DisallowedWords],
            'date' => ['required', new DisallowedWords],
            'category' => ['required', new DisallowedWords],
            'title' => ['required', new DisallowedWords],
            'wordtitle' => ['required', new DisallowedWords],
            'subtitle1' => ['required', new DisallowedWords],
            'contentsubtitle1' => ['required', new DisallowedWords],
            'subtitle2' => ['required', new DisallowedWords],
            'contentsubtitle2' => ['required', new DisallowedWords],
            'subtitle3' => ['required', new DisallowedWords],
            'contentsubtitle3' => ['required', new DisallowedWords],
            'contentend' => ['required', new DisallowedWords],
            'img' => ['required', new DisallowedWords],
            'bimg1' => ['required', new DisallowedWords],
            'bimg2' => ['required', new DisallowedWords],
        ]);

        $contentAsString = $this->getContent(1);
        $content = explode("#xt#",$contentAsString);
        if (!empty($content[0]))
            $str = '#xt#'.'status=#='.$request->status.'#x#'.'date=#='.$request->date .
                    '#x#'.'title=#='.$request->title.'#x#'.'wordtitle=#='.$request->wordtitle .
                    '#x#'.'category=#='.$request->category.
                    '#x#'.'subtitle1=#='.$request->subtitle1.'#x#'.'contentsubtitle1=#='.$request->contentsubtitle1 .
                    '#x#'.'subtitle2=#='.$request->subtitle2.'#x#'.'contentsubtitle2=#='.$request->contentsubtitle2 .
                    '#x#'.'subtitle3=#='.$request->subtitle3.'#x#'.'contentsubtitle3=#='.$request->contentsubtitle3 .
                    '#x#'.'contentend=#='.$request->contentend ;
        else 
        $str =     'status=#='.$request->status.'#x#'.'date=#='.$request->date .
                    '#x#'.'title=#='.$request->title.'#x#'.'wordtitle=#='.$request->wordtitle .
                    '#x#'.'category=#='.$request->category.
                    '#x#'.'subtitle1=#='.$request->subtitle1.'#x#'.'contentsubtitle1=#='.$request->contentsubtitle1 .
                    '#x#'.'subtitle2=#='.$request->subtitle2.'#x#'.'contentsubtitle2=#='.$request->contentsubtitle2 .
                    '#x#'.'subtitle3=#='.$request->subtitle3.'#x#'.'contentsubtitle3=#='.$request->contentsubtitle3 .
                    '#x#'.'contentend=#='.$request->contentend ;
        
        if ($request->file('img')) {
            $file = $request->file('img');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('images/news'), $filename);
            $path = 'images\news\\' . $filename;
            $str.='#x#'.'img=#='.$path;
        }
        if ($request->file('bimg1')) {
            $file = $request->file('bimg1');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('images/news'), $filename);
            $path = 'images\news\\' . $filename;
            $str.='#x#'.'bimg1=#='.$path;
        }
        if ($request->file('bimg2')) {
            $file = $request->file('bimg2');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('images/news'), $filename);
            $path = 'images\news\\' . $filename;
            $str.='#x#'.'bimg2=#='.$path;
        }
        $newcontent = $contentAsString . $str;
        News::find(1)->update(['content' => $newcontent] );
        return redirect()->route('dashboard.news');
    }

    public function edit($id)
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
            $old=   '#xt#'.'status=#='.$slide['status'].'#x#'.'date=#='.$slide['date'].'#x#'.'title=#='.$slide['title']. 
                    '#x#'.'wordtitle=#='.$slide['wordtitle'].'#x#'.'category=#='.$slide['category']
                    .'#x#'.'subtitle1=#='.$slide['subtitle1'].'#x#'.'contentsubtitle1=#='.$slide['contentsubtitle1'].
                    '#x#'.'subtitle2=#='.$slide['subtitle2'].'#x#'.'contentsubtitle2=#='.$slide['contentsubtitle2'].'#x#'.'subtitle3=#='.$slide['subtitle3'].
                    '#x#'.'contentsubtitle3=#='.$slide['contentsubtitle3'].'#x#'.'contentend=#='.$slide['contentend'].
                    '#x#'.'img=#='.$slide['img'].'#x#'.'bimg1=#='.$slide['bimg1'].
                    '#x#'.'bimg2=#='.$slide['bimg2'];
        else
            $old= 'status=#='.$slide['status'].'#x#'.'date=#='.$slide['date'].'#x#'.'title=#='.$slide['title']. 
            '#x#'.'wordtitle=#='.$slide['wordtitle'].'#x#'.'category=#='.$slide['category']
            .'#x#'.'subtitle1=#='.$slide['subtitle1'].'#x#'.'contentsubtitle1=#='.$slide['contentsubtitle1'].
            '#x#'.'subtitle2=#='.$slide['subtitle2'].'#x#'.'contentsubtitle2=#='.$slide['contentsubtitle2'].'#x#'.'subtitle3=#='.$slide['subtitle3'].
            '#x#'.'contentsubtitle3=#='.$slide['contentsubtitle3'].'#x#'.'contentend=#='.$slide['contentend'].
            '#x#'.'img=#='.$slide['img'].'#x#'.'bimg1=#='.$slide['bimg1'].
            '#x#'.'bimg2=#='.$slide['bimg2'];

            return view('dashboard.news.edit' , compact('slide','old'));
        }
    public function update(Request $request)
    {
        $old =$request->old;
        $allcontent = $this->getContent(1);
        $request->validate([
            'status' => ['required', new DisallowedWords],
            'date' => ['required', new DisallowedWords],
            'category' => ['required', new DisallowedWords],
            'title' => ['required', new DisallowedWords],
            'wordtitle' => ['required', new DisallowedWords],
            'subtitle1' => ['required', new DisallowedWords],
            'contentsubtitle1' => ['required', new DisallowedWords],
            'subtitle2' => ['required', new DisallowedWords],
            'contentsubtitle2' => ['required', new DisallowedWords],
            'subtitle3' => ['required', new DisallowedWords],
            'contentsubtitle3' => ['required', new DisallowedWords],
            'contentend' => ['required', new DisallowedWords],
        ]);
        
        if($old[0]=='#'&& $old[2]=='t'){
            
            $newcontent =
                '#xt#'.'status=#='.$request->status.'#x#'.'date=#='.$request->date .
                '#x#'.'title=#='.$request->title.'#x#'.'wordtitle=#='.$request->wordtitle .
                '#x#'.'category=#='.$request->category.
                '#x#'.'subtitle1=#='.$request->subtitle1.'#x#'.'contentsubtitle1=#='.$request->contentsubtitle1 .
                '#x#'.'subtitle2=#='.$request->subtitle2.'#x#'.'contentsubtitle2=#='.$request->contentsubtitle2 .
                '#x#'.'subtitle3=#='.$request->subtitle3.'#x#'.'contentsubtitle3=#='.$request->contentsubtitle3 .
                '#x#'.'contentend=#='.$request->contentend;
        }
    else{
            $newcontent =
            'status=#='.$request->status.'#x#'.'date=#='.$request->date .
            '#x#'.'title=#='.$request->title.'#x#'.'wordtitle=#='.$request->wordtitle .
            '#x#'.'category=#='.$request->category.
            '#x#'.'subtitle1=#='.$request->subtitle1.'#x#'.'contentsubtitle1=#='.$request->contentsubtitle1 .
            '#x#'.'subtitle2=#='.$request->subtitle2.'#x#'.'contentsubtitle2=#='.$request->contentsubtitle2 .
            '#x#'.'subtitle3=#='.$request->subtitle3.'#x#'.'contentsubtitle3=#='.$request->contentsubtitle3 .
            '#x#'.'contentend=#='.$request->contentend;
        }
 
            
                if ($request->file('img')){
                    $file = $request->file('img');
                    $filename = Str::uuid() . $file->getClientOriginalName();
                    $file->move(public_path('images/news'), $filename);
                    $path = 'images\news\\' . $filename;
                    $newcontent .='#x#'.'img=#='.$path;

                    $filePath = public_path($request->image);
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }
                else{
                    $newcontent.='#x#'.'img=#='.$request->image;
                }
    
                if ($request->file('bimg1')){
                    $file = $request->file('bimg1');
                    $filename = Str::uuid() . $file->getClientOriginalName();
                    $file->move(public_path('images/news'), $filename);
                    $path = 'images\news\\' . $filename;
                    $newcontent .='#x#'.'bimg1=#='.$path;

                    $filePath = public_path($request->bimage1);
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }
                else{
                    $newcontent.='#x#'.'bimg1=#='.$request->bimage1;
                }
                if ($request->file('bimg2')){
                    $file = $request->file('bimg2');
                    $filename = Str::uuid() . $file->getClientOriginalName();
                    $file->move(public_path('images/news'), $filename);
                    $path = 'images\news\\' . $filename;
                    $newcontent .='#x#'.'bimg2=#='.$path;

                    $filePath = public_path($request->bimage2);
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }
                else{
                    $newcontent.='#x#'.'bimg2=#='.$request->bimage2;
                }

                $new = str_replace($old,$newcontent, $allcontent); 
                News::find(1)->update(['content' => $new] );
                return redirect()->route('dashboard.news');
            }
                public function delete($id)
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
                $filePath = public_path($slide['bimg1']); 
                if (File::exists($filePath)) {
                    File::delete($filePath);
                }
                $filePath = public_path($slide['bimg2']); 
                if (File::exists($filePath)) {
                    File::delete($filePath);
                }
        
                if($id>0)
                $old= '#xt#'.'status=#='.$slide['status'].'#x#'.'date=#='.$slide['date'].'#x#'.'title=#='.$slide['title']. 
                    '#x#'.'wordtitle=#='.$slide['wordtitle'].'#x#'.'category=#='.$slide['category']
                    .'#x#'.'subtitle1=#='.$slide['subtitle1'].'#x#'.'contentsubtitle1=#='.$slide['contentsubtitle1'].
                    '#x#'.'subtitle2=#='.$slide['subtitle2'].'#x#'.'contentsubtitle2=#='.$slide['contentsubtitle2'].'#x#'.'subtitle3=#='.$slide['subtitle3'].
                    '#x#'.'contentsubtitle3=#='.$slide['contentsubtitle3'].'#x#'.'contentend=#='.$slide['contentend'].
                    '#x#'.'img=#='.$slide['img'].'#x#'.'bimg1=#='.$slide['bimg1'].
                    '#x#'.'bimg2=#='.$slide['bimg2'];
                
                else if(isset($content[1]))
                $old= 'status=#='.$slide['status'].'#x#'.'date=#='.$slide['date'].'#x#'.'title=#='.$slide['title']. 
                '#x#'.'wordtitle=#='.$slide['wordtitle'].'#x#'.'category=#='.$slide['category']
                .'#x#'.'subtitle1=#='.$slide['subtitle1'].'#x#'.'contentsubtitle1=#='.$slide['contentsubtitle1'].
                '#x#'.'subtitle2=#='.$slide['subtitle2'].'#x#'.'contentsubtitle2=#='.$slide['contentsubtitle2'].'#x#'.'subtitle3=#='.$slide['subtitle3'].
                '#x#'.'contentsubtitle3=#='.$slide['contentsubtitle3'].'#x#'.'contentend=#='.$slide['contentend'].
                '#x#'.'img=#='.$slide['img'].'#x#'.'bimg1=#='.$slide['bimg1'].
                '#x#'.'bimg2=#='.$slide['bimg2'].'#xt#';
               
                else
                $old= 'status=#='.$slide['status'].'#x#'.'date=#='.$slide['date'].'#x#'.
                'title=#='.$slide['title'].'#x#'.'wordtitle=#='.$slide['wordtitle'].'#x#'.'category=#='.$slide['category'].
                '#x#'.'subtitle1=#='.$slide['subtitle1'].'#x#'.'contentsubtitle1=#='.$slide['contentsubtitle1'].
                '#x#'.'subtitle2=#='.$slide['subtitle2'].'#x#'.'contentsubtitle2=#='.$slide['contentsubtitle2'].
                '#x#'.'subtitle3=#='.$slide['subtitle3'].'#x#'.'contentsubtitle3=#='.$slide['contentsubtitle3'].
                '#x#'.'contentend=#='.$slide['contentend'] .'#x#'.'img=#='.$slide['img'].'#x#'.
                'bimg1=#='.$slide['bimg1'].'#x#'.'bimg2=#='.$slide['bimg2'];

                $newcontent = str_replace($old,'' ,$allcontent);
                News::find(1)->update(['content' => $newcontent]);
                    
                return redirect()->route('dashboard.news');
    
    }


   // comment
   public function comment(Request $request)
   {
       $content = $this->getContent(2);
       if (!empty($content[0]))
           $str = '#xt#'.'author=#='.$request->author.'#x#'.'email=#='.$request->email
           .'#x#'.'url=#='.$request->url.'#x#'.'comment=#='.$request->comment;
       else 
           $str ='author=#='.$request->author.'#x#'.'email=#='.$request->email
           .'#x#'.'url=#='.$request->url.'#x#'.'comment=#='.$request->comment;
       $newcontent = $content .$str;
       News::find(2)->update(['content' => $newcontent] );
       return redirect()->route('fronted.news');
   }
   
   public function allcomments()
   {
       $contentAsString = $this->getContent(2);
       $content = explode("#xt#",$contentAsString);
       return view('dashboard.news.comment',compact('content'));
   }


   public function deletecomment($id)
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
       $old= '#xt#'.'author=#='.$slide['author'].'#x#'.'email=#='.$slide['email']
    .'#x#'.'url=#='.$slide['url'].'#x#'.'comment=#='.$slide['comment'];
       else if(isset($content[1]))
       $old= 'author=#='.$slide['author'].'#x#'.'email=#='.$slide['email']
       .'#x#'.'url=#='.$slide['url'].'#x#'.'comment=#='.$slide['comment'].'#xt#';
       else
       $old= 'author=#='.$slide['author'].'#x#'.'email=#='.$slide['email']
       .'#x#'.'url=#='.$slide['url'].'#x#'.'comment=#='.$slide['comment'];
       $newcontent = str_replace($old,'' ,$allcontent);
       News::find(2)->update(['content' => $newcontent]);
       
       return redirect()->route('dashboard.news.allcomments');
   }




}






