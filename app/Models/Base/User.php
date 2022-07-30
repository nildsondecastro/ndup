<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * 
 * @property int $id
 * @property character varying $name
 * @property character varying $email
 * @property timestamp without time zone|null $email_verified_at
 * @property character varying $password
 * @property character varying|null $cpf
 * @property character varying|null $photo
 * @property bool $active
 * @property bool $admin
 * @property bool $super_admin
 * @property character varying|null $remember_token
 * @property timestamp without time zone|null $created_at
 * @property timestamp without time zone|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Portfolio[] $portfolios
 *
 * @package App\Models\Base
 */
class User extends Model
{
	use SoftDeletes;
	protected $table = 'users';

	protected $casts = [
		'name' => 'character varying',
		'email' => 'character varying',
		'email_verified_at' => 'timestamp without time zone',
		'password' => 'character varying',
		'cpf' => 'character varying',
		'photo' => 'character varying',
		'active' => 'bool',
		'admin' => 'bool',
		'super_admin' => 'bool',
		'remember_token' => 'character varying',
		'created_at' => 'timestamp without time zone',
		'updated_at' => 'timestamp without time zone'
	];

	public function portfolios()
	{
		return $this->hasMany(Portfolio::class, 'users_id');
	}
}
