<?php

namespace App\Http\Controllers\provider;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\CommentReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function commentShow($id)
    {

        $comments = Comment::where('provider_id', $id)->get();
        return view('provider.comment.index', compact('comments'));

    }

    public function replay($id)
    {
        $comment = Comment::where('id', $id)->first();
        return view('provider.comment.replay', compact('comment'));
    }
    public function create(Request $request, $id)
    {
        //return $request->replay;
        $this->validate($request,[
            'replay' => 'required'
        ]);

        $comment = new CommentReply();
        $comment->comment_id = $id;
        $comment->provider_id = $request->provider_id;
        $comment->replay = $request->replay;

        //return $comment;
        $comment->save();
        session()->flash('success', 'Successfully Replayed');
        return redirect()->route('provider.commentShow', Auth::id());
    }
}
