<?php

namespace App\Models;

use App\Models\Base\Contact as BaseContact;

class Contact extends BaseContact
{
	protected $fillable = [
		'telefone',
		'email',
		'whatsapp',
		'whatsapp_link',
		'instagram_link',
		'facebook_link',
		'address',
		'active'
	];

	protected $casts = [];
}
