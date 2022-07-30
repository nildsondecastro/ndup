<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Item
 * 
 * @property int $items_id
 * @property character varying $name
 * @property character varying|null $photo
 * @property character varying|null $link
 * @property float $price
 * @property string|null $description
 * @property bool $active
 * @property int $portfolios_id
 * @property timestamp without time zone|null $created_at
 * @property timestamp without time zone|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Portfolio $portfolio
 *
 * @package App\Models\Base
 */
class Item extends Model
{
	use SoftDeletes;
	protected $table = 'items';
	protected $primaryKey = 'items_id';

	protected $casts = [
		'name' => 'character varying',
		'photo' => 'character varying',
		'link' => 'character varying',
		'price' => 'float',
		'active' => 'bool',
		'portfolios_id' => 'int',
		'created_at' => 'timestamp without time zone',
		'updated_at' => 'timestamp without time zone'
	];

	public function portfolio()
	{
		return $this->belongsTo(Portfolio::class, 'portfolios_id');
	}
}
