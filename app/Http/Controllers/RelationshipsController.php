<?php

namespace App\Http\Controllers;

use App\Relationship;
use App\User;
use Illuminate\Http\Request;

class RelationshipsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $a = User::find(auth()->user()->id);
        $b = User::find($id);
        $a->followers()->attach($b);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = User::find(auth()->user()->id);
        $b = User::find($id);
        $a->followers()->detach($b);
        return redirect()->back();
    }
}
