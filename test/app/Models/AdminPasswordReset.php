<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 20 Dec 2019 03:53:46 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class AdminPasswordReset
 * 
 * @property int $id
 * @property string $email
 * @property string $token
 * @property \Carbon\Carbon $created_at
 *
 * @package App\Models
 */
class AdminPasswordReset extends Eloquent
{
	public $timestamps = false;

	protected $hidden = [
		'token'
	];

	protected $fillable = [
		'email',
		'token'
	];
}
