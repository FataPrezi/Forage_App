<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abonnement extends Model
{
    public function client ()
    {return $this->hasOne('App\Client','clients');}

    public function compteur ()
    {return $this->belongsTo('App\Compteur');}


}
