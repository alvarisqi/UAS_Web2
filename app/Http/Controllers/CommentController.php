<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forum;
use App\Comment;
use Auth;
class CommentController extends Controller
{
    public function addComment(Request $request, Forum $forum)
    {

        $request0>validate([
            'content' => 'required'
        ]);
        $comment = New Comment;
        $comment->user_id = Auth::user()->id;
        $comment->content = $request->content;

        $forum->comments()->save($comment);

        return back()->withInfo('Komentar Terkirim..');
    }
}
