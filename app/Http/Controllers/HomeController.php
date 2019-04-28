<?php

namespace App\Http\Controllers;

use App\Repositories\RestaurantRepository;
use App\Repositories\TablerestRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $restaurantRepository;
    protected $nbPerPage = 4;

    public function __construct(RestaurantRepository $restaurantRepository)
    {
        // $this->middleware('auth');
        $this->restaurantRepository = $restaurantRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        // $restaurants = $this->restaurantRepository->getPaginate($this->nbPerPage);
        // $links = $restaurants->render();
        $categories = DB::table('restaurants')
                        ->select(DB::raw('count(*) as rest_count, cuisine'))
                        ->groupBy('cuisine')
                        ->orderBy('rest_count','desc')
                        ->limit(6)
                        ->get();
        
        $search_localites = DB::table('restaurants')->select('quartier')->distinct()->get();
        $search_cuisines = DB::table('restaurants')->select('cuisine')->distinct()->get();
        $restaurants = DB::table('restaurants')->distinct()->limit(3)->get();

        return view('home', compact('search_localites', 'categories'), compact('search_cuisines', 'restaurants'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
