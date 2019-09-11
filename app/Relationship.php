<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relationship extends Model
{
    protected $fillable = [
        'follower_id', 'followed_id'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
