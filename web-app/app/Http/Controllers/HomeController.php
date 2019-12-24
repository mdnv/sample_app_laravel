<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
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
      if(Auth::check())
      {
            # https://laravel.com/docs/6.x/queries#where-exists-clauses
            # https://laravel.com/docs/6.x/database#running-queries
            $feed_items = Comment::whereExists(function ($query) {
                           $query->select(DB::raw(1))
                                 ->from('relationships')
                                 ->whereRaw("user_id IN (SELECT followed_id FROM relationships WHERE  follower_id = ?) OR user_id = ?", [Auth::user()->id, Auth::user()->id]);
                       })
                       ->get()->sortByDesc('created_at');
    //         $following_ids = "SELECT followed_id FROM relationships WHERE  follower_id = :user_id"
    // Micropost.where("user_id IN ($following_ids) OR user_id = :user_id", user_id: id)
    // $results = DB::select('select * from users where id = :id', ['id' => 1]);
    //         dd($feed_items);
            // foreach ($feed_items2 as $i=>$b) {
            //     $feed_items[] = collect([$b]);
            // }
            // $feed_items = new \Illuminate\Database\Eloquent\Collection($feed_items);
            if (empty($feed_items->count())) { $feed_items = Auth::user()->comments->sortByDesc('created_at'); }
            // $feed_items = Comment::paginate(30);
            return view('home', ['feed_items' => $feed_items]);
      }
      else
        {
    return view('home');}
    }
}
