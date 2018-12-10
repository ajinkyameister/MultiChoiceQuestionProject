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
/*
  3 |--------------------------------------------------------------------------
  4 | Web Routes -  REQUEST TYPES : URL. This is basic REST resourcefull controller
  5 |--------------------------------------------------------------------------
  6 |  List all Posts                       GET    /posts
  7 |  Get a specific post                  GET    /posts/{id}
  8 |  Display form to create post          GET    /posts/create
  9 |  Submit form to database new post     POST   /posts
 10 |  Edit a post                          GET    /posts/{id}/edit
 11 |  Submit to db edited form post        PATCH  /posts/{id}
 12 |  Delete a post                        DELETE /posts/{id}
 13 |
 14  */


Route::get('/', function () {
    return view('welcome');
})->name('welcome');
 
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about',function (){
	return view('about');
})->name('about');

Route::get('/home',function(){
	return view('home');
})->name('home')->middleware('auth');

// Route::get('/institute',function(){
// 	return view('institute');
// })->name('institute')->middleware('auth');

Route::get('/reseller',function(){
	return view('reseller');
})->name('reseller')->middleware('auth');

// Route::get('/reseller/create',function(){
// 	return view('reseller');
// })->name('reseller')->middleware('auth');

//-------------------------------Reseller Routes------------------------------------------//

Route::get('/reseller/create',function(){

	return view('reseller_try');
});

// Route::post('/resellers','ResellerController@store');//

Route::post('/resellers','ResellerController@store');//

Route::get('/resellers','ResellerController@show');

Route::get('/users/{user}','ResellerController@edit');


//-------------------------------Institute Routes------------------------------------------//

Route::get('/institutes',function(){
  return view('institute'); 

  // return "Hello World from Institute";
})->name('institute');

Route::post('/institutes','InstituteController@store');

Route::get('/institutes/show','InstituteController@show');

// Route::get('/institutes/{institute}','InstituteController@edit');

  
Route::post('/institutes/{institute}','InstituteController@edit')->name('modifyInstitutes');

