<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    function index(){
        
        $data = ['title' => "Home Page", 'content' => "Arif Hasan"];
        $data['fruits'] = ["Mango","Grape","Apple"];
        return view('home',$data);
    }
    function about(){
        return view('about');
    }
    function contact(){
        return view('contact');
    }
}
