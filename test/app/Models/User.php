<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 20 Dec 2019 03:53:46 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $first_name
 * @property string $last_name
 * @property string $gender
 * @property \Carbon\Carbon $birthday
 * @property string $email
 * @property \Carbon\Carbon $email_verified_at
 * @property \Carbon\Carbon $phone_verified_at
 * @property \Carbon\Carbon $officials_verified_at
 * @property string $password
 * @property string $remember_token
 * @property string $avatar
 * @property string $phone
 * @property string $user_type
 * @property string $address
 * @property string $position
 * @property bool $receiving_sms_notification
 * @property bool $receiving_email_notification
 * @property bool $receiving_app_notification
 * @property int $created_by
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $news
 * @property \Illuminate\Database\Eloquent\Collection $user_device_tokens
 * @property \Illuminate\Database\Eloquent\Collection $user_social_networks
 *
 * @package App\Models
 */
class User extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'receiving_sms_notification' => 'bool',
		'receiving_email_notification' => 'bool',
		'receiving_app_notification' => 'bool',
		'created_by' => 'int'
	];

	protected $dates = [
		'birthday',
		'email_verified_at',
		'phone_verified_at',
		'officials_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'first_name',
		'last_name',
		'gender',
		'birthday',
		'email',
		'email_verified_at',
		'phone_verified_at',
		'officials_verified_at',
		'password',
		'remember_token',
		'avatar',
		'phone',
		'user_type',
		'address',
		'position',
		'receiving_sms_notification',
		'receiving_email_notification',
		'receiving_app_notification',
		'created_by'
	];

	public function news()
	{
		return $this->hasMany(\App\Models\News::class, 'created_by_user_id');
	}

	public function user_device_tokens()
	{
		return $this->hasMany(\App\Models\UserFcm::class);
	}

	public function user_social_networks()
	{
		return $this->hasMany(\App\Models\UserSocialNetwork::class);
	}
}
