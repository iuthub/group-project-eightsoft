<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Comments;
use App\Models\Post;
use Illuminate\Support\Facades;

class CommentsController extends Controller
{




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->input('postid');
        $comment = new Comments;
        $comment->name = $request->input('name');
        $comment->body = $request->input('body');
        $comment->post_id = $request->input('postid');
        $comment->save();

        return redirect('/blog/'.$id)->with('success', 'Comment created successfully!');
    }
}
