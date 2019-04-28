<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model 
{

    protected $table = 'restaurants';
    public $timestamps = true;
    protected $fillable = array('nom', 'immeuble', 'rue', 'quartier', 'image', 'description');

    public function tablesrestaurants()
    {
        return $this->hasMany('Tablerest');
    }

}