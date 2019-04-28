<?php 

namespace App\Http\Controllers;

use App\Grocery;
use App\Repositories\RestaurantRepository;
use App\Repositories\TablerestRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RestaurantController extends Controller 
{


  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  protected $restaurantRepository;
  protected $tablerestRepository;
  protected $nbPerPage = 4;

  public function __construct(
        RestaurantRepository $restaurantRepository, 
        TablerestRepository $tablerestRepository)
  {
    $this->restaurantRepository = $restaurantRepository;
    $this->tablerestRepository = $tablerestRepository;
  }
   
  /**
   * Chercher tous les restaurants correspondants aux paramètres de recherches.
   *
   * @return Response
   */
  public function reserver(Request $request)
  { 
    $nom = $request->input('nom');
    $localite = $request->input('localite');
    $cuisine = $request->input('cuisine');
    $dataSearch = array(
      'nom' => $nom,
      'localite' => $localite,
      'cuisine' => $cuisine
    );
    $search_localites = DB::table('restaurants')->select('quartier')->distinct()->get();
    $search_cuisines = DB::table('restaurants')->select('cuisine')->distinct()->get();

    $restaurants = DB::table('restaurants')                      
                      ->when($nom, function ($query, $nom) {
                          return $query->where('nom', $nom);
                        }, function($query){
                        })
                      ->when($localite, function ($query, $localite) {
                        return $query->where('quartier', $localite);
                      })
                      ->when($cuisine, function ($query, $cuisine) {
                        return $query->where('cuisine', $cuisine);
                      })
                      ->paginate(3);

    if($request->ajax()){
      return view('restaurant/restaurantRecherche', compact('restaurants', 'dataSearch'))->render();
    } else {
      return view('restaurant/index', compact('restaurants', 'dataSearch'), compact('search_localites', 'search_cuisines'));
    }
  }

  public function reservation(Request $request)
  {
    $cbank = $request->input('cbank');
    $table_id = $request->input('table_id');                             
    $date_reservation = $request->input('date_reservation');
    $rest_id = $request->input('rest_id');
    $user_id = $request->input('user_id');

    $tablerests = DB::table('tablerests')
                      ->where('id', $table_id)
                      ->update([
                        'date_reservation' => $date_reservation,
                        'rest_id' => $rest_id,
                        'user_id' => $user_id 
                      ]);
  
    return view('restaurant/reservationReponse');                  
  }

  public function r(Request $request){
    $restaurants = DB::table('restaurants')->paginate(3);
    /* if($request->ajax){
      return view('restaurant/restaurantSearchInside', compact('restaurants'));
    } */
    return view('restaurant/restaurantSearch', compact('restaurants'));
  }

  public function r_data(Request $request)
  {
    if($request->ajax()){
      $restaurants = DB::table('restaurants')->paginate(3);
      return view('restaurant/restaurantSearchInside', compact('restaurants'))->render();
    }
  }

  public function index()
  {
    $restaurants = $this->restaurantRepository->getPaginate($this->nbPerPage);
    $links = $restaurants->render();
        
    return view('restaurant/index', compact('restaurants'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show(Request $request, $id)
  {
    $rest = $this->restaurantRepository->getById ($id);
    // $tablerests = $this->tablerestRepository->getPaginate(5);
    // $tabledata = DB::table('tablerests')->get();

    $restaurants = DB::table('restaurants')->distinct()->limit(3)->get();

    $categories = DB::table('restaurants')
                        ->select(DB::raw('count(*) as rest_count, cuisine'))
                        ->groupBy('cuisine')
                        ->orderBy('rest_count','desc')
                        ->limit(6)
                        ->get();

    $tablerests = DB::table('tablerests')
            ->join('restaurants', 'tablerests.rest_id', '=', 'restaurants.id')
            ->where('restaurants.id', $id)
            ->select('tablerests.*')
            ->orderBy('date_reservation', 'ASC')
            ->paginate(3);
    // $links = $tablerests->render();
    if($request->ajax())
    {
      return view('restaurant/tableRecherche', compact('tablerests', 'categories'))->render();     
    }

    return view('restaurant/show', compact('rest', 'restaurants'), compact('tablerests', 'categories'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }





  
  public function testForm(Request $request)
  {
    return view('testform');
  }

  public function testFormPost(Request $request)
  {
    $nom = $request['nom'];
    $locatite = $request['locatite'];
    $cuisine = $request['cuisine'];

    // $restaurants = DB::table('restaurants')
    //                   ->when($nom, function ($query, $nom) {
    //                       return $query->where('nom', $nom);
    //                     })
    //                   ->when($locatite, function ($query, $localite) {
    //                     return $query->where('quartier', $localite);
    //                   })
    //                   ->when($cuisine, function ($query, $cuisne) {
    //                     return $query->where('cuisine', $cuisine);
    //                   })
    //                   ->get();
    return view('testresult', compact('nom'));

  }
  
}

?>