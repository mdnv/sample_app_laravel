<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

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

    public function active_relationships()
    {
        return $this->hasMany('App\Relationship', 'follower_id');
    }

    public function passive_relationships()
    {
        return $this->hasMany('App\Relationship', 'followed_id');
    }

    protected static function boot()
    {
       parent::boot();

       static::deleting(function($user) {
        $relationships = Relationship::where('follower_id', $user->id);
        foreach ($relationships as $relationship) {
            $relationship->delete();
        }
        $relationships = Relationship::where('followed_id', $user->id);
        foreach ($relationships as $relationship) {
            $relationship->delete();
        }
       });
    }

    public function following() {
        return $this->hasManyThrough('following', 'active_relationships');
    }

    public function followers() {
        return $this->hasManyThrough('followers', 'passive_relationships');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    #Follows a user.
    public function follow($other_user)
    {
        return $this->following()->attach($other_user);
    }

    # Unfollows a user.
    public function unfollow($other_user)
    {
        return $this->following()->detach($b);
    }

    # Returns true if the current user is following the other user.
    public function isFollowing($other_user)
    {
      return $this->following()->in_array($other_user);
    }
}
