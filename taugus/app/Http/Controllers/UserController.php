<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function indexHandle()
    {
        request()->validate([
            'username'=>"required",
            'password'=>"required", 
        ]);
        if(Auth::attempt(['username' => request('username'), 'password' => request('password')])){
            return redirect('/');
        }
        return back();
    }

    public function register()
    {
        return view('register');
    }

    public function registerHandle()
    {
        request()->validate([
        'username'=>"required",
        'password'=>"required",
        ]);

        $data = [
            'username'=>request('username'),
            'password'=>bcrypt(request('password')),
        ];

        User::create($data);
        return redirect('/login');
    }
}
