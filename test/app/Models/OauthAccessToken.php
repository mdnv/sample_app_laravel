<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 20 Dec 2019 03:53:46 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class OauthAccessToken
 * 
 * @property string $id
 * @property int $user_id
 * @property int $client_id
 * @property string $name
 * @property string $scopes
 * @property bool $revoked
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $expires_at
 *
 * @package App\Models
 */
class OauthAccessToken extends Eloquent
{
	public $incrementing = false;

	protected $casts = [
		'user_id' => 'int',
		'client_id' => 'int',
		'revoked' => 'bool'
	];

	protected $dates = [
		'expires_at'
	];

	protected $fillable = [
		'user_id',
		'client_id',
		'name',
		'scopes',
		'revoked',
		'expires_at'
	];
}
