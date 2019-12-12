<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Comment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      if(Auth::user())
      {
            // $micropost = Auth::user()->comments->new();
            // $feed_items = Auth::user()->feed->with(user).paginate(1);
            $feed_items = Comment::paginate(1);

      }
        return view('home');
    }
}
