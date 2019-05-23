<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function role ()
    {return $this->belongsTo('App\Role');}

    public function agent ()
    {return $this->hasOne('App\Agent');}

    public function gestionnaire ()
    {return $this->hasOne('App\Gestionnaire');}

    public function client ()
    {return $this->hasOne('App\Client','users');}

    public function comptable ()
    {return $this->hasOne('App\Comptable','users');}

}



class User1 extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
