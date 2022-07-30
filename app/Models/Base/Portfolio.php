<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Portfolio
 * 
 * @property int $portfolios_id
 * @property character varying $name
 * @property character varying|null $photo
 * @property character varying|null $link
 * @property string|null $description
 * @property bool $active
 * @property bool $is_sample
 * @property int|null $users_id
 * @property timestamp without time zone|null $created_at
 * @property timestamp without time zone|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property User|null $user
 * @property Collection|Item[] $items
 *
 * @package App\Models\Base
 */
class Portfolio extends Model
{
	use SoftDeletes;
	protected $table = 'portfolios';
	protected $primaryKey = 'portfolios_id';

	protected $casts = [
		'name' => 'character varying',
		'photo' => 'character varying',
		'link' => 'character varying',
		'active' => 'bool',
		'is_sample' => 'bool',
		'users_id' => 'int',
		'created_at' => 'timestamp without time zone',
		'updated_at' => 'timestamp without time zone'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'users_id');
	}

	public function items()
	{
		return $this->hasMany(Item::class, 'portfolios_id');
	}
}
