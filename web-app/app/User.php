<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Comment;
use DB;
use Auth;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function followings()
    {
        return $this->belongsToMany(User::class, 'App\Relationship', 'follower_id', 'followed_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function followers()
    {
        return $this->belongsToMany(User::class, 'App\Relationship', 'followed_id', 'follower_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function following($user)
    {
        return DB::table('relationships')->where('follower_id', '=' , Auth::user()->id)->where('followed_id', '=' , $user->id)->count();
    }
    // https://stackoverflow.com/questions/44913409/laravel-follower-following-relationships/44913501

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function feed()
    {
        // following_ids = 'SELECT followed_id FROM relationships WHERE follower_id = :user_id'
        // return $this -> Comment::where("user_id IN ({following_ids}) OR user_id = :user_id", user_id: id)
    }
}
