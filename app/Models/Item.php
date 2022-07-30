<?php

namespace App\Models;

use App\Models\Base\Item as BaseItem;

class Item extends BaseItem
{
	protected $fillable = [
		'name',
		'photo',
		'link',
		'price',
		'description',
		'active',
		'portfolios_id'
	];

	protected $casts = [];
}
