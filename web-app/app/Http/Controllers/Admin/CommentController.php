<?php

namespace App\Http\Controllers\Admin;

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
        // $user = User::find($id);
        // $comment = $user->comments new Comment([
        //     'commenter' => $request->get('commenter'),
        //     'body'=> $request->get('body'),
        //     'user_id'=> $id
        // ]);
        $comment = new Comment([
            'commenter' => $request->get('commenter'),
            'body'=> $request->get('body'),
            'user_id'=> $id
        ]);

        // validate the uploaded file
        $file = $request->file('image');
        // $validation = $request->validate([
        //     'image' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048'
        //     // for multiple file uploads
        //     // 'photo.*' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048'
        // ]);

        // $file      = $validation['image']; // get the validated file
        // $extension = $file->getClientOriginalExtension();
        // $filename  = 'comment-image-' . time() . '.' . $extension;
        Storage::put('comments/1212', $file);

        // $file = $request->file('image');
        // // $extension = $file->getClientOriginalExtension();
        // // $filename  = 'comment-image-' . $comment->id . time() . '.' . $extension;
        // $filename  = 'comment-image-' . $comment->id . time();
        // Storage::put($filename, $file);

        $comment->save();






        return redirect()->back();
        // return redirect()->route('users_path,$user->id');
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

        return redirect()->back();
        // return redirect()->route('users_path');
    }
}
#php artisan make:controller CommentController --resource --model=Comment
