<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request,$service)
    {
        $this->validate($request,[
            'comment' => 'required'
        ]);

        $comment = new Comment();
        $comment->service_id = $service;
        $comment->provider_id = $request->provider_id;
        $comment->user_id = Auth::id();
        $comment->comment = $request->comment;

        //dd($comment);
        $comment->save();
        session()->flash('success', 'Your comment successfully done');
        return redirect()->back();
    }

}
