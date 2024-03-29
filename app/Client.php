<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 28 May 2019 09:07:45 +0000.
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Client
 *
 * @property int $id
 * @property string $uuid
 * @property string $matricule
 * @property int $village_id
 * @property int $gestionnaires_id
 * @property int $users_id
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Gestionnaire $gestionnaire
 * @property \App\User $user
 * @property \App\Village $village
 * @property \Illuminate\Database\Eloquent\Collection $abonnements
 *
 * @package App
 */
class Client extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;use \App\Helpers\UuidForKey;

	protected $casts = [
		'village_id' => 'int',
		'gestionnaires_id' => 'int',
		'users_id' => 'int'
	];

	protected $fillable = [
		'uuid',
		'matricule',
		'village_id',
		'gestionnaires_id',
		'users_id'
	];

	public function gestionnaire()
	{
		return $this->belongsTo(\App\Gestionnaire::class, 'gestionnaires_id');
	}

	public function user()
	{
		return $this->belongsTo(\App\User::class, 'users_id');
	}

	public function village()
	{
		return $this->belongsTo(\App\Village::class);
	}

	public function abonnements()
	{
		return $this->hasMany(\App\Abonnement::class, 'clients_id');
	}
}
