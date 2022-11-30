<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tags;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $comments = auth()->user()->comments;
        return view('personal.comment.index' , compact('comments'));
    }

}
