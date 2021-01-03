<?php

namespace App\Http\Controllers;


use App\Models\Comment;
use App\Models\CommentReply;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::where('is_approve', "1")->get();
        //dd($services);
        return view('frontend.index', compact('services'));
    }

    public function details($id){
        $data['services'] = Service::where('status', 'active')->get();
        $data['comments'] = [];
        if(auth::user()){

            $data['comments'] = Comment::Where("user_id", auth()->user()->id)->get();
            //$data['replay'] = CommentReply::where('id', )->get();

            $data['commentsreply'] = Comment::join('comment_replies', function($join) {
                $join->on('comments.id', '=', 'comment_replies.comment_id');
            })->get();
            //return $data['comments'][0]['id'];
            /*return $data['commentsreply'][0]['comment_id'];*/


        }
        $data['service']= Service::findOrFail($id);
        return view('frontend.details', $data);
    }
}
