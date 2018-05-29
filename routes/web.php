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

Route::get('discipline/add',"DisciplineController@addDiscipline");
Route::post('discipline/add',"DisciplineController@addDiscipline");

Route::get('categorie/add',"CategorieController@addCategorie");
Route::post('categorie/add',"CategorieController@addCategorie");

Route::get('/categorie',"CategorieController@viewCategorie");
Route::get('/categorie/{id}',"CategorieController@viewCategorie");

Route::get('/discipline',"DisciplineController@viewDiscipline");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
