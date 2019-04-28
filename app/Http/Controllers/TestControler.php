<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestControler extends Controller
{
    //
    public function getInfos()
    {
        return view('infos');
    }

    public function postInfos(Request $request)
    {
        return 'nom = '.$request->input('nom').' .';
    }
}
