<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    //For Dashboard Show
    public function index(){
        return view('backend.dashboard');
    }
}
