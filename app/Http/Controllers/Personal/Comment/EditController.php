<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tags;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index(Comment $comment)
    {

        return view('personal.comment.edit' , compact('comment'));
    }

}
