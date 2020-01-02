<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        $request->validate([
            'commenter'=>'required',
            'body'=>'required'
        ]);
        // $comment = User::find($id);
        // $comment = $comment->comments new Comment([
        //     'commenter' => $request->get('commenter'),
        //     'body'=> $request->get('body'),
        //     'user_id'=> $id
        // ]);
        $comment = new Comment([
            'commenter' => $request->get('commenter'),
            'body'=> $request->get('body'),
            'user_id'=> $id
        ]);
        if ($request->has('avatar'))
        {
            $request->validate([
                'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $avatarName = $comment->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();
            $request->avatar->storeAs('avatars',$avatarName);
            $comment->avatar = $avatarName;
        }
        $comment->save();
        return redirect()->back()->with('success','Micropost created!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // @user = User.find(params[:user_id])
        // @comment = @user.comments.find(params[:id])
        // @comment.destroy
        // redirect_to user_path(@user)
        $comment = Comment::find($id);
        $comment->delete();
        Storage::delete('avatars/'.$comment->avatar);
        return redirect()->back()->with('danger','Micropost deleted');
        // return redirect()->route('users_path');
    }
}
#php artisan make:controller CommentController --resource --model=Comment
