<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gestionnaire extends Model
{
    public function user ()
    {return $this->belongsTo('App\User');}

    public function client ()
    {return $this->hasMany('App\Client','gestionnaires');}


}
