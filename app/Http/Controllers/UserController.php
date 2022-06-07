<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(UserRequest $request){
            User::create([
                'name' => $request->name,
            ])
        
    }
}
