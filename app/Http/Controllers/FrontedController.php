<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Home;
use App\Models\News;
use App\Models\Projects;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontedController extends Controller
{

    //public function
    public function getContent($row,$tabel){
        $slide = $tabel::find($row);
        $slides = json_decode($slide, true);
        $contentasstring =  $slides['content'];
        $content = explode('#xt#', $contentasstring);
        return $content;
    }
    public function getit($row,$tabel){
        $slide = $tabel::find($row);
        $slides = json_decode($slide, true);
        $contentasstring =  $slides['content'];
        $content = explode('#x#', $contentasstring);
        $item = [];
        foreach ($content as $pair) {
            list($key, $value) = explode('=#=', $pair);
            $item[$key] = $value;
        }
        return $item;
    }
    public function getArray($row,$tabel,$i){
        $slide = $tabel::find($row);
        $slides = json_decode($slide, true);
        $contentasstring =  $slides['content'];
        $content = explode('#xt#', $contentasstring);

        $string = $content[$i];
        $pairs = explode('#x#', $string);
        $item = [];
        foreach ($pairs as $pair) {
            list($key, $value) = explode('=#=', $pair);
            $item[$key] = $value;
        }
        return $item;
    }


    public function home(){
        $content = $this->getContent(1, Home::class);
        $services = $this->getit(2, Home::class);
        $allservices = $this->getit(1, Service::class);
        $about = $this->getit(3, Home::class);
        $category = $this->getContent(4, Home::class);
        $images = $this->getContent(5, Home::class);
        $control = $this->getit(6, Home::class);
        $news = $this->getContent(1, News::class);
        $projects = $this->getContent(1, Projects::class);
        $masters = $this->getContent(7, Home::class);
        $contact = $this->getit(8 ,Home::class);
        $footer = $this->getContent(9, Home::class);

        return view('fronted.index',compact('content','services','allservices','about','category','images','control','news','projects','masters','contact','footer'));
    }
    
    public function about(){
        $main = $this->getit(1 ,About::class);
        $history = $this->getContent(2 ,About::class);
        $services = $this->getContent(3 ,About::class);
        $images = $this->getContent(4, About::class);
        $allimages = $this->getContent(5, Home::class);
        $masters = $this->getContent(7, Home::class);
        $contact = $this->getit(8 ,Home::class);
        $footer = $this->getContent(9, Home::class);
        return view('fronted.about',compact('main','history','services','allimages','images','masters','contact','footer'));
    }
    public function services(){
        $main = $this->getit(1 ,Service::class);
        $services = $this->getContent(2, Service::class);
        $masters = $this->getContent(7, Home::class);
        $contact = $this->getit(8 ,Home::class);
        $footer = $this->getContent(9, Home::class);
        return view('fronted.services',compact('main','services','masters','contact','footer'));
    }
    public function projects(){
        $content = $this->getContent(1, Projects::class);
        $contact = $this->getit(8 ,Home::class);
        return view('fronted.projects',compact('content','contact'));
    }
    public function projectDetails($i){
        $projects = $this->getContent(1, Projects::class);
        if($i < count($projects)){
        $item = $this->getArray(1, Projects::class,$i);

    }else         $item = '';
        if($item == '')
        return view('fronted.projects');

        $control = $this->getit(6, Home::class);
        $contact = $this->getit(8 ,Home::class);
        $footer = $this->getContent(9, Home::class);

        return view('fronted.projectDetails',compact('item','projects','control','contact','footer'));
    }
    public function news(){
        $word = 'all';
        $content = $this->getContent(1, News::class);
        $contact = $this->getit(8 ,Home::class);
        return view('fronted.news',compact('word','content','contact'));
    }
    public function onlynews()
    {
        $word = 'NEWS';
        $content = $this->getContent(1, News::class);
        $contact = $this->getit(8 ,Home::class);
        return view('fronted.news',compact('word','content','contact'));
    }
    public function onlyinsight()
    {
        $word = 'INSIGHTS';
        $content = $this->getContent(1, News::class);
        $contact = $this->getit(8 ,Home::class);
        return view('fronted.news',compact('word','content','contact'));
    }
    public function newsDetails($i){                            //there is a problem
        $content = $this->getContent(1, News::class);
        $pre = 0 ; $next = 0 ;
        $item = $this->getArray(1, News::class,$i);
        if($i >= count($content) || $item['status'] == 'disappear') {
            return redirect()->route('fronted.news'); 
        }       
        $j=$i;
        $m=$i;
       if($i != 0){
            for($k = $j-1 ; ;$k--,$j-- ){
            if($j == 0 ){
                $pitem = ''; break;
            }
            $temp = $this->getArray(1, News::class,$k);
            if($temp['status'] == "disappear") continue;
            else if ($temp['status'] == "appear"){
                $pitem = $temp ;$pre = $k ; break; 
            }
           }
      }else{
        $pitem = '';
    }

       if($i+1 != count($content)){
        for($k = $m+1 ; ;$k++,$m++ ){
            if($m == count($content)-1){
                $nitem = '';break;
            }
            $temp = $this->getArray(1, News::class,$k);
            if($temp['status'] == "disappear") continue;
            else if ($temp['status'] == "appear"){
                $nitem = $temp;  $next = $k ; break;
            }
        }
       }else{
        $nitem = '';
       }
        $contact = $this->getit(8 ,Home::class);
        return view('fronted.newsDetails',compact('item','pitem','nitem','i','pre','next','content','contact'));
    }
    
    public function contact(){
        $main = $this->getit(1 ,Contact::class);
        $footer = $this->getContent(9, Home::class);
        $contact = $this->getit(8 ,Home::class);
        return view('fronted.contact',compact('main','footer','contact'));
    }

}
