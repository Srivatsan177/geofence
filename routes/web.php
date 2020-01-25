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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/create','AdminController@create');
Route::get("/index",'AdminController@index')->name('home');
Route::post('/store','AdminController@store');
Route::get('/get-dist','AdminController@getDist');
Route::get('/get-taluka','AdminController@getTaluka');
Route::get('/get-area','AdminController@getArea');

Route::get("/show/{state_id}","AdminController@showDist");
Route::get("/show/{state_id}/{dist_id}","AdminController@showTaluk");
Route::get("/show/{state_id}/{dist_id}/{taluka_id}","AdminController@showArea");
Route::get("/edit_area/{area_id}","AdminController@editArea");
Route::post("/update_area/{area_id}","AdminController@updateArea");
Route::get("/show/{state_id}/{dist_id}/{taluka_id}/{area_id}","AdminController@showLand");
Route::get("/edit_land/{land_id}/","AdminController@editLand");
Route::post("/update_land/{land_id}","AdminController@updateLand");

Route::get("user/view/{id}","UsersController@index");
Route::get("/user/create","UsersController@create");
Route::post("user/store","UsersController@store");
Route::get("/user/view/crop/{land_id}","UsersController@showcrop");

Route::get("/temp",function(){
    return view("temp");
});


Route::get("/landUser/{land_id}/{user_id}","AdminController@landUser");


Route::get("/predict","AdminController@predict");