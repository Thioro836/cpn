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

Route::middleware(['auth'])->group(function () {
    Route::get('/', 'App\Http\Controllers\HomeController@index');
    Route::resource('gestations','App\Http\Controllers\GestationController');
    Route::resource('vaccins','App\Http\Controllers\VaccinController');
    Route::resource('categorie-antecedent', 'App\Http\Controllers\CategorieAntecedentController');
    Route::resource('agent-sante', 'App\Http\Controllers\AgentSanteController');
    Route::resource('produit', 'App\Http\Controllers\ProduitsController');
    Route::resource('patients', 'App\Http\Controllers\PatientController');
    Route::resource('dossiers', 'App\Http\Controllers\DossierController');
    Route::resource('consultations', 'App\Http\Controllers\ConsultationController');
    Route::resource('antecedents', 'App\Http\Controllers\AntecedentController');
    Route::resource('dossier-antecedents', 'App\Http\Controllers\DossierAntecedentController');
    Route::resource('gestation-patient', 'App\Http\Controllers\GestationDossierPatientController');
    Route::resource('produit-consultation', 'App\Http\Controllers\ProduitConsultController');
    Route::resource('plan-acouchement', 'App\Http\Controllers\PlanAcouchementController');
    Route::resource('situation', 'App\Http\Controllers\SituationController');
});



Auth::routes();
