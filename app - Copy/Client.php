<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function user ()
    {return $this->belongsTo('App\User');}

    public function gestionnaire ()
    {return $this->belongsTo('App\Gestionnaire');}

    public function abonnement ()
    {return $this->hasMany('App\Abonnement');}

    public function village ()
    {return $this->belongsTo('App\Village');}




}
