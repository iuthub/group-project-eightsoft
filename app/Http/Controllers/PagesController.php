<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades;

class PagesController extends Controller
{
    public function index()
    {

        // $posts = Post::all();

        // $posts = DB::select('SELECT * FROM posts');

        $posts =  Post::orderBy('title', 'desc')->get();

        return view('pages.index')->with('posts', $posts);

    }


    public function contacts() {
        return view('pages.contacts');
    }

    /*
    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Web', 'ML', 'DS'],
        );
        return view('pages.services')->with($data);
    }
    */
}


