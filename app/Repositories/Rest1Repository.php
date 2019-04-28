<?php

namespace App\Repositories;

use App\Rest1;

class Rest1Repository
{
    protected $rest1;

    public function __construct(Rest1 $rest1)
    {
        $this->rest1 = $rest1;
    }

    private function save(Rest1 $rest1, Array $inputs)
    {
        $rest1->nom = $inputs['nom'];
        $rest1->immeuble = $inputs['immeuble'];
        $rest1->rue = $inputs['rue'];
        $rest1->quartier = $inputs['quartier'];
        $rest1->cuisine = $inputs['cuisine'];
        $rest1->image = $inputs['image'];
        $rest1->save();
    }

    public function getPaginate($n)
    {
        return $this->rest1->paginate($n);
    }

    public function store(Array $inputs)
    {
        $rest1 = new $this->rest1;
        $this->save($rest1, $inputs);
        return $rest1;
    }

    public function getById($id)
    {
        return $this->rest1->findOrFail($id);
    }

    public function update($id, Array $inputs)
    {
        $this->save($this->getById($id), $inputs);
    }

    public function destroy($id)
    {
        $this->getById($id)->delete();
    }
}

