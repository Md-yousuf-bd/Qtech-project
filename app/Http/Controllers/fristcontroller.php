<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fristcontroller extends Controller
{
    //index2
    public function index2(){
        return view('frontend.index2');
    }
    //index2
    public function index3(){
        return view('frontend.index3');
    }
    //contact
    public function contact(){
        return view('frontend.contact');
    }
    //about
    public function about(){
        return view('frontend.about');
    }
    public function team(){
        return view('frontend.team');
    }
    public function price(){
        return view('frontend.price');
    }
    public function services(){
        return view('frontend.services');
    }
    public function cctvSecurity(){
        return view('frontend.cctvSecurity');
    }
    public function executiveProtection(){
        return view('frontend.executiveProtection');
    }
    public function cyberSecurity(){
        return view('frontend.cyberSecurity');
    }
    public function privateSecurity(){
        return view('frontend.privateSecurity');
    }
    public function camera(){
        return view('frontend.camera');
    }
    public function cloudSecurity(){
        return view('frontend.cloudSecurity');
    }
    public function networkSecurity(){
        return view('frontend.networkSecurity');
    }
    public function projects1(){
        return view('frontend.projects1');
    }
    public function projects2(){
        return view('frontend.projects2');
    }
    public function projects3(){
        return view('frontend.projects2');
    }
    public function blog(){
        return view('frontend.blog');
    }
    public function blogClassic(){
        return view('frontend.blog');
    }
    public function blogDetail(){
        return view('frontend.blogDetail');
    }
    public function notFound(){
        return view('frontend.notFound');
    }
   
}

