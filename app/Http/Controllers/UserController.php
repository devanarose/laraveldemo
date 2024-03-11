<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function register(Request $request){
        $incomingfields = $request->validate([
            'name' => ['required', 'min:4', 'max:20'],
            'email' => ['required', Rule::unique('users','email')],
            'password'=>['required','confirmed']
        ]);
        User::create($incomingfields);
    }
}
