<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    protected $userRepository;
    protected $nbPerPage = 4;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function mesReservations($id)
    {
        /* $datas = DB::table('tablerests')
                    ->where('user_id', $id)
                    ->get();
         */
        $restaurants = DB::table('restaurants')->distinct()->paginate(3);

        $datas = DB::table('tablerests')
                    ->join('restaurants', 'restaurants.id', '=', 'tablerests.rest_id')
                    ->where('user_id', $id)
                    ->select('restaurants.nom as rest_nom', 'tablerests.*')
                    ->get();
                    
        return view('utilisateur.mesReservations', compact('datas', 'restaurants'));
    }

    public function monProfile($id)
    {
        $restaurants = DB::table('restaurants')->distinct()->paginate(3);

        $user = DB::table('users')->where('id', $id)->get();

        return view('utilisateur.monProfile', compact('restaurants', 'user')); 
    }

     public function index()
    {
        //
        $users = $this->userRepository->getPaginate($this->nbPerPage);
        $links = $users->render();
        return view('index', compact('users', 'links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        //
        $user = $this->userRepository->store($request->all());
        return redirect('user')->withOk("L'utilisateur ".$user->name." a été crée");
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
        $user = $this->userRepository->getById ($id);
        return view('show', compact('user'));
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
        $user = $this->userRepository->getById ($id);
        return view('edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //$user = $this->userRepository->update($id, $request->all());

        $user = DB::table('users')
                      ->where('id', $id)
                      ->update([
                        'nom' => $request->input('nom'),
                        'prenom' => $request->input('prenom')
                      ]);
        
        return view('utilisateur.monProfile');   
        // return redirect('user')->withOk("L'utilisateur ".$request->input('name')." a été modifié");   
    }

    public function utilisateurUpdate(UserUpdateRequest $request, $id)
    {
        DB::table('users')
                      ->where('id', $id)
                      ->update([
                        'nom' => $request->input('nom'),
                        'prenom' => $request->input('prenom'),
                        'email' => $request->input('email')
                      ]);
                      
        $restaurants = DB::table('restaurants')->distinct()->paginate(3);

        $user = DB::table('users')->where('id', $id)->get();

        // return view('utilisateur.monProfile', compact('restaurants', 'user'));
        return redirect('mon-profile/'.$id)->withOk($restaurants, $user);    
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
        $this->userRepository->destroy($id);
        return redirect()->back();
    }
}
