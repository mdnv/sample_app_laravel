<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 20 Dec 2019 03:53:46 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class OauthPersonalAccessClient
 * 
 * @property int $id
 * @property int $client_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class OauthPersonalAccessClient extends Eloquent
{
	protected $casts = [
		'client_id' => 'int'
	];

	protected $fillable = [
		'client_id'
	];
}
