<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('plans')->get();
        return view('users_show', compact('users'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('HPage');
    }
}
