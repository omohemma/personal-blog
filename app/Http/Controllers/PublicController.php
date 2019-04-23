<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PublicController extends Controller
{
    //

    public function index()
    {
        $posts = Post::all();
        return view('welcome', compact('posts'));
    }

    public function post($id)
    {

        $post = Post::find($id);
        return view('post',compact('post'));
    }

    public function archives()
    {
        return view('archives');
    }

    public function contact()
    {
        return view('contact');
    }

}
