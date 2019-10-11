<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index(){
        return view('index')->with('tag', $tag = "Serving the developer community");
    }

    public function about(){
        return view('about');
    }
}
