<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::resource('categorie-ancetedent','App\Http\Controllers\CategorieAntecedentController');
Route::resource('gestations','App\Http\Controllers\GestationController');
Route::resource('vaccins','App\Http\Controllers\VaccinController');
Route::resource('categorie-antecedent', 'App\Http\Controllers\CategorieAntecedentController');
Route::resource('agent-sante', 'App\Http\Controllers\AgentSanteController');
Route::resource('produit', 'App\Http\Controllers\ProduitsController');
