<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tablerest extends Model 
{

    protected $table = 'tablerests';
    public $timestamps = true;
    protected $fillable = array('nom', 'nb_place', 'date_reservation');

    public function userstables()
    {
        return $this->hasOne('User');
    }

    public function restaurantstables()
    {
        return $this->hasOne('Restaurant');
    }

}