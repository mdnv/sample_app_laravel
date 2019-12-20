<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 20 Dec 2019 03:53:46 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Province
 * 
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $news
 *
 * @package App\Models
 */
class Province extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $fillable = [
		'name'
	];

	public function news()
	{
		return $this->hasMany(\App\Models\News::class);
	}
}
