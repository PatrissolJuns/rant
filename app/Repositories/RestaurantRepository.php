<?php

namespace App\Repositories;

use App\Restaurant;

class RestaurantRepository
{
    protected $restaurant;

    public function __construct(Restaurant $restaurant)
    {
        $this->restaurant = $restaurant;
    }

    // private function save(Restaurant $restaurant, Array $inputs)
    // {
    //     $restaurant->nom = $inputs['nom'];
    //     $restaurant->immeuble = $inputs['immeuble'];
    //     $restaurant->rue = $inputs['rue'];
    //     $restaurant->quartier = $inputs['quartier'];
    //     $restaurant->cuisine = $inputs['cuisine'];
    //     $restaurant->image = $inputs['image'];
    //     $restaurant->save();
    // }

    public function getPaginate($n)
    {
        return $this->restaurant->paginate($n);
    }

    // public function store(Array $inputs)
    // {
    //     $restaurant = new $this->restaurant;
    //     $this->save($restaurant, $inputs);
    //     return $restaurant;
    // }

    public function getById($id)
    {
        return $this->restaurant->findOrFail($id);
    }

    // public function update($id, Array $inputs)
    // {
    //     $this->save($this->getById($id), $inputs);
    // }

    // public function destroy($id)
    // {
    //     $this->getById($id)->delete();
    // }
}

