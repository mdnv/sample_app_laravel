<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 20 Dec 2019 03:53:46 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class AdminUser
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
 * @property string $password
 * @property string $remember_token
 * @property string $avatar
 * @property string $phone
 * @property string $role
 * @property string $address
 * @property string $position
 * @property bool $receiving_sms_notification
 * @property bool $receiving_email_notification
 * @property int $created_by
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \App\Models\AdminUser $admin_user
 * @property \Illuminate\Database\Eloquent\Collection $admin_users
 * @property \Illuminate\Database\Eloquent\Collection $configurations
 * @property \Illuminate\Database\Eloquent\Collection $news
 *
 * @package App\Models
 */
class AdminUser extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'receiving_sms_notification' => 'bool',
		'receiving_email_notification' => 'bool',
		'created_by' => 'int'
	];

	protected $dates = [
		'birthday',
		'email_verified_at',
		'phone_verified_at'
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
		'password',
		'remember_token',
		'avatar',
		'phone',
		'role',
		'address',
		'position',
		'receiving_sms_notification',
		'receiving_email_notification',
		'created_by'
	];

	public function admin_user()
	{
		return $this->belongsTo(\App\Models\AdminUser::class, 'created_by');
	}

	public function admin_users()
	{
		return $this->hasMany(\App\Models\AdminUser::class, 'created_by');
	}

	public function configurations()
	{
		return $this->hasMany(\App\Models\Configuration::class, 'updated_by');
	}

	public function news()
	{
		return $this->hasMany(\App\Models\News::class, 'updated_by_admin_id');
	}
}
