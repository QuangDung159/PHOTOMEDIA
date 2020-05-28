<?php

use App\Constant;
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

Route::group(['prefix' => '/client'], function () {
    Route::get('/get-most-recent', Constant::CONTROLLER_POST . 'getMostRecent');
    Route::get('/get-album-slider', Constant::CONTROLLER_ALBUM . 'getAlbumSlider');
});
