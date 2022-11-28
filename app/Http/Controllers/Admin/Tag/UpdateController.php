<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\Tags;

class UpdateController extends Controller
{
    public function index(UpdateRequest $request, Tags $tag)
    {
        $data = $request->validated(); 
        $tag->update($data);
        return view('admin.tag.show', compact('tag'));
    }

}
