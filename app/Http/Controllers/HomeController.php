<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

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
        return view('home');
    }

    public function profile()
    {
        // Get the currently authenticated user...



      $users = User::all();
       // $users = User::where('id', 1)

        $user = Auth::user();
        // you need to call posts to generate and retrieve records with ()
        $posts = $user->posts;

        //dd($posts);


        // dd($user);

        return view('profile', ['posts' => $posts]);
    }
}
