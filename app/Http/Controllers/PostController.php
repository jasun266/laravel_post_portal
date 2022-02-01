<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts= posts::paginate();
        return view('posts.posts',[
            'posts'=>$posts,
        ]);
    }

    public function post(Request $request)
    {
        $this->validate($request,[
            'body'=>"required"
        ]);

        $request->user()->posts()->create($request->only('body'));

        return back();
    }
}
