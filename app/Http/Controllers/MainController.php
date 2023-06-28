<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        $recents = Blog::orderBy('id', 'desc')->get()->take(3);
        return view('home', compact('recents'));
    }

    public function resources(){
        $blogs=Blog::paginate(6);
        $recents=Blog::orderBy('id','desc')->get()->take(3);
        return view('resources',compact('blogs','recents'));
    }
}
