<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Grocery;
use Illuminate\Http\Request;

class GroceryController extends Controller
{
    public function store(Request $request){
        $grocery = new Grocery();
        $grocery->name = $request->name;
        $grocery->type = $request->type;
        $grocery->price = $request->price;
        
        $grocery->save();

        return response()->json(['success'=>'Data are successfully added']);
        
    }
    public function index(Request $request){
        //$data = Grocery::paginate(5); compact(['success','Data is succesfully added']),
        $datas = DB::table('groceries')->paginate(5);

        /* if($request->ajax()){
            return view('grocery', compact('datas'));
        } else {
            return '<h3 class="text-red">Ceci n\'est pas une requete AJAX</h3>';
        } */
        return view('grocery', compact('datas'));
    }
}
