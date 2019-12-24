<?php

namespace App\Http\Controllers;

use App\Relationship;
use Auth;
use DB;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


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
        $a = User::find(Auth::user()->id);
        $b = User::find($id);
        // $a->followers()->attach($b);
        // $relationship = new Relationship([
        //     'follower_id' => $a->id,
        //     'followed_id'=> $b->id,
        // ]);
        // DB::table('relationships')->insert(
        //     ['follower_id' => $a->id, 'followed_id' => $b->id]
        // );
        // DB::insert('INSERT INTO relationships (follower_id, followed_id) VALUES (?, ?)', [$a->id, $b->id]);
        // INSERT INTO relationships (follower_id, followed_id) VALUES (2, 1);
        // $relationship->save();
        $relationship = Relationship::create([
            'follower_id' => $a->id,
            'followed_id'=> $b->id,
        ]);
        // if(empty($relationship)) { dd($relationship); }
        // $relationship->save();


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
        $a = User::find(Auth::user()->id);
        $b = User::find($id);
        // $a->followers()->detach($b);
        $relationship = DB::table('relationships')->where('follower_id', '=' , $a->id)->where('followed_id', '=' , $b->id)->delete();
        // https://stackoverflow.com/questions/23994179/error-call-to-undefined-method-stdclassdelete-while-trying-delete-a-row-in
        // $relationship->delete();
        return redirect()->back();
    }
}
