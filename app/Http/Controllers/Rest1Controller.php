<?php

namespace App\Http\Controllers;

use App\Http\Requests\Rest1CreateRequest;
use App\Http\Requests\Rest1UpdateRequest;
use App\Repositories\Rest1Repository;
use Illuminate\Http\Request;

class Rest1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    protected $rest1Repository;
    protected $nbPerPage = 4;

    public function __construct(Rest1Repository $rest1Repository)
    {
        $this->rest1Repository = $rest1Repository;
    }
     public function index()
    {
        //
        $rest1s = $this->rest1Repository->getPaginate($this->nbPerPage);
        $links = $rest1s->render();
        return view('rest1/index', compact('rest1s', 'links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('rest1/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Rest1CreateRequest $request)
    {
        //
        return '<p>CONTAC1</p>';
        $rest1 = $this->rest1Repository->store($request->all());
        return view('rest1/index');
        // return redirect('rest1')->withOk("L'utilisateur ".$rest1->name." a été crée");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $rest1 = $this->rest1Repository->getById ($id);
        return view('rest1/show', compact('rest1'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $rest1 = $this->rest1Repository->getById ($id);
        return view('rest1/edit', compact('rest1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Rest1UpdateRequest $request, $id)
    {
        $rest1 = $this->rest1Repository->update($id, $request->all());
        //$this->rest1Repository->update($id, $request->all());
        return redirect('rest1')->withOk("L'utilisateur ".$request->input('name')." a été modifié");   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $this->rest1Repository->destroy($id);
        return redirect()->back();
    }
}
