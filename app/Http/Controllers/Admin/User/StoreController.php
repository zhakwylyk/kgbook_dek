<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StoreController extends Controller
{
    public function index(StoreRequest $request){

     $data = $request->validated(); 
     $data['password'] = Hash::make($data['password']);   
     User::firstOrCreate(['email'=> $data ['email']], $data);
     return redirect()->route('admin.user.index');  


    }
}
