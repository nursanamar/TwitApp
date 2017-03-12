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
Route::get('/json',function (){
  $data = array(array('id' =>1 ,"name" => "Teman 1","status" => "helo semua","image"=>"images/placeholder.jpg","type"=>"friend"),array('id' =>2 ,"name" => "Teman 2","status" => "helo semua","image"=>"images/placeholder.jpg","type"=>"friend"));
  echo json_encode($data);
});
Route::post('/daftar','Data@daftar');

Route::get('/beranda','Home@index');
Route::get('/profil',function (){
  return view('profil');
});
Route::get('/data',"Data@getpost");

Auth::routes();
