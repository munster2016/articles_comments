<?php

namespace App\Http\Controllers;

use App\Article;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        //$roles = User::find(1)->roles;
        //$articles =User::find(Auth::user()->id)->articles;
        $users = User::whereHas('roles', function($q) {
            $q->whereIn('name',['sign_user']);
        })->get();

        //dd($articles);
       // dd($roles);
        //dd($users);

        $user = Auth::user();
        return view('home', compact('user'));
    }
}
