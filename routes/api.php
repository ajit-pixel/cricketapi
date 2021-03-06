<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('cricket','Cricket\Cricket_Controller@get_api_data');
Route::get('score','Cricket\Score_Controller@get_score');
Route::get('calender','Cricket\Match_Calender@get_calender');
Route::get('oldmatches','Cricket\OldMatches_Controller@get_oldmatch_details');
Route::get('playerstat','Cricket\PlayerStatastic_Controller@get_playerstat');