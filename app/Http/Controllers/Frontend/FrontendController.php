<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //For Home Page
    public  function index(){
        return view('frontend.index');
    }
    //For Story Page
    public  function story(){
        return view('frontend.story');
    }
    //For Menu Page
    public  function menu(){
        return view('frontend.menu');
    }
    //For News Page
    public  function news(){
        return view('frontend.news');
    }
    //For Contact Page
    public  function contact(){
        return view('frontend.contact');
    }
    //For News Details Page
    public  function newsdetails(){
        return view('frontend.newsdetail');
    }



}

