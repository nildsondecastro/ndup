<?php

namespace App\Models;

use App\Models\Base\Portfolio as BasePortfolio;

class Portfolio extends BasePortfolio
{
	protected $fillable = [
		'name',
		'photo',
		'link',
		'description',
		'active',
		'is_sample',
		'users_id'
	];

	protected $casts = [];
}
