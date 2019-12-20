<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Configuration
 * 
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $value
 * @property int $updated_by
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * 
 * @property \App\Models\AdminUser $admin_user
 *
 * @package App\Models
 */
class Configuration extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'value' => 'json',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'code',
		'name',
		'value',
		'updated_by'
	];

	public function admin_user()
	{
		return $this->belongsTo(\App\Models\AdminUser::class, 'updated_by');
	}
}
