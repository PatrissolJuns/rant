<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });
/*
Route::get('{n}', function ($n) {
    return ('Je suis de la page '.$n.' !');
});

Route::get('article/{n}', function ($n)
{
    return view('article')->with('numero', $n);
})->where('n', '[0-9]+');

Route::get('/', 'WelcomeController@index');
*/

/* code pour nommer une route
Route::get('/', [ 'as'=>' home ', function ()
{
    return 'Je suis la page d\ 'accueil !';
}]);
*/


Route::get('grocery', 'GroceryController@index');
// Route::get('grocery', function(){
//     return App\Grocery::paginate(5);
// });
Route::post('grocery/post', 'GroceryController@store');

Route::get('users', 'TestControler@getInfos');
Route::post('users', 'TestControler@postInfos');

Route::get('/test', 'RestaurantController@testForm');
Route::post('/testf', 'RestaurantController@testFormPost');


Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/', 'HomeController@home')->name('home');
Route::get('apropos', 'HomeController@about')->name('apropos');
Route::get('contact', 'HomeController@contact')->name('contact');

Route::resource('rest1', 'Rest1Controller');

// Route::post('/junt', 'Rest1Controller@store');
Route::post('junt', ['uses' => 'Rest1Controller@delete', 'as' => 'junt']);

Route::resource('restaurant', 'RestaurantController');
Route::post('reserver', 'RestaurantController@reserver')->name('restaurant.reserver');
Route::get('reserver', 'RestaurantController@reserver')->name('restaurant.reserver');

Route::get('restaurantSearch', 'RestaurantController@r');
Route::get('restaurantSearchInside', 'RestaurantController@r_data');

Route::get('restaurantRecherche', 'RestaurantController@reserver');
Route::get('tableRecherche/{id}', 'RestaurantController@show');
// Route::get('restaurantSearchInside', 'RestaurantController@r_data');

Route::post('restaurant/reservation', 'RestaurantController@reservation');
Route::post('envoie-de-message', 'SendEmailController@EmailFromContactMe')->name('EnvoieDeMessage');


// Route::resource('tablerest', 'TablerestController');
Route::resource('user', 'UserController');
Route::get('mes-réservations/{id}', 'UserController@mesReservations')->name('mes-réservations');
Route::get('mon-profile/{id}', 'UserController@monProfile')->name('mon-profile');
Route::post('utilisateur/update/{id}', 'UserController@utilisateurUpdate')->name('utilisateurUpdate');




