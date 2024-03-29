<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 28 May 2019 09:07:45 +0000.
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Reglement
 *
 * @property int $id
 * @property string $uuid
 * @property \Carbon\Carbon $date
 * @property float $montant
 * @property int $types_id
 * @property int $factures_id
 * @property int $comptables_id
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Comptable $comptable
 * @property \App\Facture $facture
 * @property \App\Type $type
 *
 * @package App
 */
class Reglement extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;use \App\Helpers\UuidForKey;

	protected $casts = [
		'montant' => 'float',
		'types_id' => 'int',
		'factures_id' => 'int',
		'comptables_id' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'uuid',
		'date',
		'montant',
		'types_id',
		'factures_id',
		'comptables_id'
	];

	public function comptable()
	{
		return $this->belongsTo(\App\Comptable::class, 'comptables_id');
	}

	public function facture()
	{
		return $this->belongsTo(\App\Facture::class, 'factures_id');
	}

	public function type()
	{
		return $this->belongsTo(\App\Type::class, 'types_id');
	}
}
