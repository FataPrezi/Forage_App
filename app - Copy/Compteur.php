<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compteur extends Model
{
    public function abonnement ()
    {return $this->hasOne('App\Abonnement','compteurs');}

    public function consommation ()
    {return $this->hasMany('App\Consommation','compteurs');}


}
