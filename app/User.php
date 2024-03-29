<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 28 May 2019 09:07:45 +0000.
 */

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 *
 * @property int $id
 * @property string $uuid
 * @property string $firstname
 * @property string $name
 * @property string $telephone
 * @property string $email
 * @property \Carbon\Carbon $email_verified_at
 * @property string $password
 * @property int $roles_id
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Role $role
 * @property \Illuminate\Database\Eloquent\Collection $administrateurs
 * @property \Illuminate\Database\Eloquent\Collection $agents
 * @property \Illuminate\Database\Eloquent\Collection $clients
 * @property \Illuminate\Database\Eloquent\Collection $comptables
 * @property \Illuminate\Database\Eloquent\Collection $gestionnaires
 *
 * @package App
 */
class User extends Eloquent
{
    use \Illuminate\Database\Eloquent\SoftDeletes;
    use \App\Helpers\UuidForKey;

	protected $casts = [
		'roles_id' => 'int'
	];

	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'uuid',
		'firstname',
		'name',
		'telephone',
		'email',
		'email_verified_at',
		'password',
		'roles_id'
	];

	public function role()
	{
		return $this->belongsTo(\App\Role::class, 'roles_id');
	}

	public function administrateur()
	{
		return $this->hasOne(\App\Administrateur::class, 'users_id');
	}

	public function agent()
	{
		return $this->hasOne(\App\Agent::class, 'users_id');
	}

	public function client()
	{
		return $this->hasOne(\App\Client::class, 'users_id');
	}

	public function comptable()
	{
		return $this->hasOne(\App\Comptable::class, 'users_id');
	}

	public function gestionnaire()
	{
		return $this->hasOne(\App\Gestionnaire::class, 'users_id');
    }

    public function hasRole($rolename) //Middleware
	{
		return $this->role->name==$rolename;
    }

    public function hasAnyRoles($roles) //Middleware avec utilisation de tableau
	{
		return in_array($this->role->name, $roles);
	}
}
