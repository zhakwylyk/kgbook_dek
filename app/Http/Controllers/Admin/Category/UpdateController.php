<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\Category;

class UpdateController extends Controller
{
    public function index(UpdateRequest $request, Category $category)
    {
        $data = $request->validated(); 
        $category->update($data);
        return view('admin.categories.show', compact('category'));
    }

}
