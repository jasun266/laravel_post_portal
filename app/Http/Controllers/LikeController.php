<?php

namespace App\Http\Controllers;

use App\Models\like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like($id, Request $request)
    {
        $likedBy= like::where('user_id',$request->user()->id)->where('posts_id', $id)->first();
        
        if(!$likedBy)
        {
            $like = new like();
            $like->user_id = $request->user()->id;
            $like->posts_id = $id;
            $like->save();

            return back();
        }
        return back();
        
    }
}
