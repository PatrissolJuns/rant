<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rest1 extends Model
{
    
    protected $table = 'rest1';
    public $timestamps = false;
    
    /*
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*protected $fillable = [
        'nom', 'immeuble', 'rue', 'quartier', 'cuisine', 'image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    /*protected $hidden = [
        'remember_token',
    ];
    */
}
