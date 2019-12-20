<?php

namespace App\Models;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use \Illuminate\Database\Eloquent\SoftDeletes as SoftDeletes;

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
 * @property string $password
 * @property string $remember_token
 * @property string $avatar
 * @property string $phone
 * @property string $user_type
 * @property string $address
 * @property string $position
 * @property int $receiving_sms_notification
 * @property int $receiving_email_notification
 * @property int $receiving_app_notification
 * @property int $created_by
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 *
 * @property \Illuminate\Database\Eloquent\Collection $news
 * @property \Illuminate\Database\Eloquent\Collection $oauth_access_tokens
 * @property \Illuminate\Database\Eloquent\Collection $user_fcm
 *
 * @package App\Models
 */
class User extends Authenticatable
{
    use HasApiTokens, Notifiable, SoftDeletes;

    protected $casts = [
        'receiving_sms_notification' => 'int',
        'receiving_email_notification' => 'int',
        'receiving_app_notification' => 'int',
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

    public function oauth_access_tokens()
    {
        return $this->hasMany(\App\Models\OauthAccessToken::class);
    }

    public function user_fcm()
    {
        return $this->hasMany(\App\Models\UserFcm::class);
    }
}