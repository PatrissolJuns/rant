<?php

namespace App\Repositories;

use App\Tablerest;

class TablerestRepository
{
    protected $tablerest;

    public function __construct(Tablerest $tablerest)
    {
        $this->tablerest = $tablerest;
    }

    // private function save(Tablerest $tablerest, Array $inputs)
    // {
    //     $tablerest->nom = $inputs['nom'];
    //     $tablerest->immeuble = $inputs['immeuble'];
    //     $tablerest->rue = $inputs['rue'];
    //     $tablerest->quartier = $inputs['quartier'];
    //     $tablerest->cuisine = $inputs['cuisine'];
    //     $tablerest->image = $inputs['image'];
    //     $tablerest->save();
    // }

    public function getPaginate($n)
    {
        return $this->tablerest->paginate($n);
    }

    // public function store(Array $inputs)
    // {
    //     $tablerest = new $this->tablerest;
    //     $this->save($tablerest, $inputs);
    //     return $tablerest;
    // }

    public function getById($id)
    {
        return $this->tablerest->findOrFail($id);
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

