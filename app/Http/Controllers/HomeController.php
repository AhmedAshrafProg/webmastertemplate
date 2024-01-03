<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth()->user()->is_admin == 1) {
            $plans = Plan::all();
            $contacts = Contact::all();
            $users = User::all();
            return view('admin_board', compact(['plans', 'contacts', 'users']));
        } else {
            $user = auth()->user();
            $plans = Plan::all();
            return view('index', compact('user', 'plans'));
        }
    }
}
