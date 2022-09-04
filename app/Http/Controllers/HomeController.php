<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

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
        $meetups = Auth::user()->meetups()->get();
        $user = Auth::user();
        return view('home', compact('meetups','user'));
    }
     
    public function getUser(User $user)
    {
        
        //$user = User::where("id",);
        return view('schedule', compact('user'));
    }
}