<?php

use App\Http\Controllers\atelierController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\machineController;
use App\Http\Controllers\produitController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// les apis authentification
Route::post('register',[AuthController::class,'register']);
Route::post('login',[AuthController::class,'login']);

Route::middleware('auth:sanctum')->group(function(){
	Route::get('user',[AuthController::class,'user']);
	Route::post('logout',[AuthController::class,'logout']);

});


Route::get('getAllProduitConst',[produitController::class,'getAllProduitConst']);
Route::post('addProdConst',[produitController::class,'createProduitConstructible']);
Route::get('getProduitCondtById/{id}',[produitController::class,'getProduitConstById']);
Route::put('updateProdConst/{id}',[produitController::class,'updateProduitConstructible']);
Route::delete('deleteProduitConstr/{id}',[produitController::class,'deleteProduitConstr']);

//LES APIS DES PRODUITS ACHETABLES
Route::get('getAllProduitAcht',[produitController::class,'getAllProduitAchet']);
Route::post('addProdAcht',[produitController::class,'createProduitAchetable']);
Route::get('getProduitAchtById/{id}',[produitController::class,'getProduitAchtById']);
Route::put('updateProdAcht/{id}',[produitController::class,'updateProduitAchetable']);
Route::delete('deleteProduitAcht/{id}',[produitController::class,'deleteProduitAchtable']);
Route::get('getMachineByProduitId/{id}',[produitController::class,'getMachineFromProduit']);

//les apis des machines 
Route::get('getAllMachine',[machineController::class,'getAllMachine']);
Route::post('addMachine',[machineController::class,'createMachine']);
Route::delete('deleteMachine/{id}',[machineController::class,'deleteMachine']);
Route::get('getMachineById/{id}',[machineController::class,'getMachineById']);
Route::put('updateMachine/{id}',[machineController::class,'updateMachine']);

//les apis des atelier 
Route::get('getAllAtelier',[atelierController::class,'getAllAtelier']);
Route::post('addAtelier',[atelierController::class,'createAtelier']);

