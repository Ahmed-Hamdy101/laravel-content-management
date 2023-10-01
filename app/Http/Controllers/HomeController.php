<?php

namespace App\Http\Controllers;


use App\Models\Post;


use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){ 
        $posts = Post::all();
        return view('pages/home/index',compact('posts'));

    }

}