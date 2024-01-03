<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $plans = Plan::all();
        return view('index', compact('user', 'plans'));
    }

    public function contactShow()
    {
        $user = auth()->user();
        return view('contact_form', compact('user'));
    }
}
