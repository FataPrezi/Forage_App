<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reglement extends Model
{
    public function facture ()
    {return $this->belongsTo('App\Facture');}

    public function type ()
    {return $this->belongsTo('App\Type');}

    public function comptable ()
    {return $this->belongsTo('App\Comptable');}


}
