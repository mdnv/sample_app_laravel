<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class UserSocialNetwork
 * 
 * @property int $id
 * @property int $user_id
 * @property string $network_type
 * @property string $network_user_id
 * @property string $access_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class UserSocialNetwork extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $hidden = [
		'access_token'
	];

	protected $fillable = [
		'user_id',
		'network_type',
		'network_user_id',
		'access_token'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
