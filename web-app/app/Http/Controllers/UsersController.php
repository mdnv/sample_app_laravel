<?php

namespace App\Http\Controllers;

use App\User;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = DB::table('users')->simplePaginate(1);
        $users = User::paginate(30);
        // $users = User::all()->sortBy("id");
        // $users = User::with('comments')->all()->sortBy("id");
        return view('users.index', compact('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {
        $user = User::find($id);
        $comments = $user->comments->sortByDesc('created_at');
        // $comments = User::find($id)->fresh('comments')->get()->reverse();
        // $comments = Comment::where('id', $user->$id)->get()->sortByDesc('created_at');
        // $comments = $user->comments->paginate(1);
        // return view('users.show',compact('user'),compact('comments'));
        return view('users.show', compact('user','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required'
        ]);
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->save();

        return redirect()->route('users_path');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        // User::find($id)->delete();

        // return redirect()->route('users_path');
    }

    public function following($id)
    {
        $title = "Following";
        $user = User::find($id);
        $users = $user->followings;

        return view('users.show_follow', compact('title','user','users'));
        // return view('users.show_follow')->with(['title'=>$title,'user'=>$user,'users'=>$users]);
        // return view('users.show_follow', ['title' => $title], ['user' => $user], ['users' => $users]);
        // return view('users.show_follow', ['title' => $title, 'user' => $user , 'users' => $users]);
    }

    public function followers($id)
    {
        $title = "Followers";
        $user = User::find($id);
        $users = $user->followers;

        return view('users.show_follow', compact('title','user','users'));
    }
}
#php artisan make:controller UserController --resource --model=User
