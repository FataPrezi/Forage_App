<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consommation extends Model
{
    public function compteur ()
    {return $this->belongsTo('App\Compteur');}

    public function agent ()
    {return $this->belongsTo('App\Agent');}

    public function facture ()
    {return $this->belongsTo('App\Facture');}



}
