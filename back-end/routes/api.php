<?php

use App\Http\Controllers\AdresseController;
use App\Http\Controllers\GouvernoratController;
use App\Http\Controllers\PaysController;
use App\Http\Controllers\RegionController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// region
Route::get('regions-with-adresses', [RegionController::class, 'getAllWithAdresses']);
Route::get('regions', [RegionController::class, 'getAll']);
Route::get('region/{id}', [RegionController::class, 'getRegionById']);
Route::post('region/add', [RegionController::class, 'store']);

// gouvernorat
Route::get('gouvernorats-with-regions', [GouvernoratController::class, 'getAllWithRegions']);
Route::get('gouvernorats', [GouvernoratController::class, 'getAll']);
Route::get('gouvernorat/{id}', [GouvernoratController::class, 'getGouvernoratById']);
Route::post('gouvernorat/save', [GouvernoratController::class, 'store']);

//pays
Route::post('pays/save', [PaysController::class, 'store']);


//adresse
Route::get('adresses', [AdresseController::class, 'getAll']);
Route::post('adresse/add', [AdresseController::class, 'store']);
