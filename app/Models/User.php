<?php

namespace App\Models;

use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	use SoftDeletes;
	protected $table = 'users';

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'email_verified_at',
		'password',
		'cpf',
		'photo',
		'active',
		'admin',
		'super_admin',
		'remember_token'
	];

	protected $casts = [];

	public function portfolios()
	{
		return $this->hasMany(Portfolio::class, 'users_id');
	}
}
