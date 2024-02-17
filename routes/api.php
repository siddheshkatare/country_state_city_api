<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CscControler;
use L5Swagger\Http\Controllers\SwaggerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('regions', [CscControler::class, 'regions']);
Route::get('subregions', [CscControler::class, 'subregions']);
Route::get('countries', [CscControler::class, 'countries']);
Route::get('states/{countryId}', [CscControler::class, 'states']);
Route::get('cities/{stateId}', [CscControler::class, 'cities']);
