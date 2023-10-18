<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class democontroller extends Controller
{
    //

    public function samp(){
        // return view('samp');
        return redirect('next');
    }
    public function next(){
        return view('frontend/blog');
        // return redirect('/hello');
    }
    public function posted(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required'
        ]);
        echo "<pre>";
        print_r($request->all());
        // return view('frontend/blog');
        // return redirect('/hello');
    }
 
    
   
}
