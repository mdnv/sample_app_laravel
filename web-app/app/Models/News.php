<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class News
 * 
 * @property int $id
 * @property string $title
 * @property string $content
 * @property array $extra_content
 * @property array $images
 * @property float $latitude
 * @property float $longitude
 * @property int $category_id
 * @property int $disaster_type
 * @property int $province_id
 * @property string $address
 * @property array $rescue_vehicles
 * @property int $created_by_user_id
 * @property int $created_by_admin_id
 * @property int $updated_by_admin_id
 * @property int $is_public
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * 
 * @property \App\Models\AdminUser $admin_user
 * @property \App\Models\User $user
 * @property \App\Models\Province $province
 *
 * @package App\Models
 */
class News extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'extra_content' => 'json',
		'images' => 'json',
		'latitude' => 'float',
		'longitude' => 'float',
		'category_id' => 'int',
		'disaster_type' => 'int',
		'province_id' => 'int',
		'rescue_vehicles' => 'json',
		'created_by_user_id' => 'int',
		'created_by_admin_id' => 'int',
		'updated_by_admin_id' => 'int',
		'is_public' => 'int'
	];

	protected $fillable = [
		'title',
		'content',
		'extra_content',
		'images',
		'latitude',
		'longitude',
		'category_id',
		'disaster_type',
		'province_id',
		'address',
		'rescue_vehicles',
		'created_by_user_id',
		'created_by_admin_id',
		'updated_by_admin_id',
		'is_public'
	];

	public function admin_user()
	{
		return $this->belongsTo(\App\Models\AdminUser::class, 'updated_by_admin_id');
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'created_by_user_id');
	}

	public function province()
	{
		return $this->belongsTo(\App\Models\Province::class);
	}
}
