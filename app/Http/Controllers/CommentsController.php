<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Requests;


class CommentsController extends Controller
{
    public function index()
    {

    }

    public function commentSaveData(Request $request)
    {
        $this->validate($request, [
            'user_name' => 'required',
            'email' => 'required|email',
            'book_id' => 'required',
            'message' => 'required'
        ]);

        Comment::create($request->all());

        return back()->with('success', 'Comment successfuly send!');

    }
}
