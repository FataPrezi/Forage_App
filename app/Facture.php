<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    public function consommation ()
    {return $this->hasMany('App\Consommation','factures');}

    public function reglement ()
    {return $this->hasMany('App\Reglement','factures');}


}
