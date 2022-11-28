<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UpdateController extends Controller
{
    public function index(UpdateRequest $request, User $user)
    {
        $data = $request->validated(); 
        $user->update($data);
        return view('admin.user.show', compact('user'));
    }

}
