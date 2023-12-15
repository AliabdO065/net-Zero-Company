<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Rules\DisallowedWords;

class ContactController extends Controller
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
        $slide = Contact::find($row);
        $slides = json_decode($slide, true);
        return $slides['content'];
    }


    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////// Contact secthion
  
    public function contact()
    {
        $content = $this->getContent(1);
        return view('dashboard.contact.index',compact('content'));
    }

    public function updatecontact(Request $request)
    {
            $request->validate([
                'header' => ['required', new DisallowedWords],
                'wordheader' => ['required', new DisallowedWords],
                'phone' => ['required', new DisallowedWords],
                'facebook' => ['required', new DisallowedWords],
                'twitter' => ['required', new DisallowedWords],
                'youtube' => ['required', new DisallowedWords],
            ]);
            $newcontent = 'header=#='.$request->header.'#x#'.'wordheader=#='.$request->wordheader.'#x#'.'phone=#='.$request->phone.'#x#'.
            'facebook=#='.$request->facebook.'#x#'.'twitter=#='.$request->twitter.'#x#'.'youtube=#='.$request->youtube;
            Contact::find(1)->update(['content' => $newcontent] );
            return redirect()->route('dashboard.contact.contact.index');
    }


    // message
    public function message(Request $request)
    {
        $content = $this->getContent(2);
        if (!empty($content[0]))
            $str = '#xt#'.'name=#='.$request->name.'#x#'.'email=#='.$request->email.'#x#'.'message=#='.$request->message;
        else 
            $str ='name=#='.$request->name.'#x#'.'email=#='.$request->email.'#x#'.'message=#='.$request->message;
        $newcontent = $content .$str;
        Contact::find(2)->update(['content' => $newcontent] );
        return view('fronted.contact');
    }
    
    public function allmessage()
    {
        $contentAsString = $this->getContent(2);
        $content = explode("#xt#",$contentAsString);
        return view('dashboard.contact.message',compact('content'));
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

        if($id>0)
        $old= '#xt#'.'name=#='.$slide['name'].'#x#'.'email=#='.$slide['email'].'#x#'.'message=#='.$slide['message'];
        else if(isset($content[1]))
        $old= 'name=#='.$slide['name'].'#x#'.'email=#='.$slide['email'].'#x#'.'message=#='.$slide['message'].'#xt#';
        else
        $old= 'name=#='.$slide['name'].'#x#'.'email=#='.$slide['email'].'#x#'.'message=#='.$slide['message'];
        $newcontent = str_replace($old,'' ,$allcontent);
        Contact::find(2)->update(['content' => $newcontent]);
        
        return redirect()->route('dashboard.contact.contact.allmessage');
    }

}
