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
    Route::get('/get-post-by-id/{postId}', Constant::CONTROLLER_POST . 'getPostById');
    Route::get('/get-post-by-album-id/{albumId}', Constant::CONTROLLER_POST . 'getPostByAlbum');
    Route::get('/get-album-by-id/{albumId}', COnstant::CONTROLLER_ALBUM . 'getAlbumById');
    Route::get('/get-all-post', Constant::CONTROLLER_POST . 'getAllPost');
    Route::get('/get-comment-by-post/{postId}', Constant::CONTROLLER_COMMENT . 'getCommentByPost');
    Route::post('/send-comment', Constant::CONTROLLER_COMMENT . 'sendComment');
});
