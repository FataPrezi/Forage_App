<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comptable extends Model
{
    public function user ()
    {return $this->belongsTo('App\User');}

    public function reglement ()
    {return $this->hasMany('App\Reglement','comptable');}


}
