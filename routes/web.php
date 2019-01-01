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
  6 |  List all Reseller                        GET    /resellers
  7 |  Get a specific Reseller  SHOW            GET    /resellers/{id}
  8 |  Display form to create Reseller          GET    /resellers/create
  9 |  Submit form to database new Reselelr     POST   /resellers
 10 |  Edit a Reseller                          GET    /resellers/{id}/edit
 11 |  Submit to db edited form Reseller        PATCH  /resellers/{id}
 12 |  Delete a Reseller                        DELETE /resellers/{id}
 13 |
 14  */

// /standard/{id}/exam/{82}/subject/{872}/


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
// Route::resource('users','UserController');

Route::middleware(['can:view-resellers'])->group(function () {
    Route::get('/resellers','ResellerController@index')->name('resellers');
    Route::get('/resellers/create','ResellerController@create');
    Route::get('/resellers/{user}','ResellerController@show');
    Route::post('/resellers','ResellerController@store');
    Route::get('/resellers/edit/{user}','ResellerController@edit');
    Route::patch('/resellers/{user}','ResellerController@update');
    Route::delete('/resellers/{user}','ResellerController@destroy');
}) ;   

// Route::get('/resellers/create',function(){

// 	return view('reseller_try');
// });

// Route::post('/resellers','ResellerController@store');//

// Route::post('/resellers','ResellerController@store');//
// Route::post('/users/{user}','ResellerController@update');


//-------------------------------Institute Routes------------------------------------------//

Route::get('/institutes', 'InstituteController@index')->name('institute');
Route::get('/institute/create','InstituteController@create');
Route::post('/institutes','InstituteController@store');
Route::get('/institutes/{institute}','InstituteController@show');
Route::get('/institutes/edit/{institute}','InstituteController@edit');
Route::patch('/institutes/{institute}','InstituteController@update');


// Route::get('/institutes/{institute}','InstituteController@edit');

  
Route::post('/institutes/{institute}','InstituteController@edit')->name('modifyInstitutes');


//-------------------------------Standard Routes------------------------------------------//



Route::get('/standards',function(){
  return view('standard'); 

})->name('standard');

Route::post('/standards','StandardController@store');

Route::get('/standards/show','StandardController@show');

// Route::get('/institutes/{institute}','InstituteController@edit');
  
Route::post('/standards/{standard}','StandardController@update')->name('modifystandard');

//-------------------------------Exam Routes------------------------------------------//

Route::get('/exams','ExamController@index');
Route::get('/standard/{standard}/exams/create','ExamController@create');
Route::post('/exams','ExamController@store');
Route::get('/exams/show','ExamController@show');
Route::get('/exams/{exam}',function(){

  dd("hello exam is working now with great effort");

});