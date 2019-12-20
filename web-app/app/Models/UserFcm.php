<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class UserFcm
 * 
 * @property int $id
 * @property int $user_id
 * @property string $device_token
 * @property string $platform
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * 
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class UserFcm extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $hidden = [
		'device_token'
	];

	protected $fillable = [
		'user_id',
		'device_token',
		'platform'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
