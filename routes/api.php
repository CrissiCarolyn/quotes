<?php

use App\Models\Quote;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\V1\QuoteResource;
use App\Http\Resources\V1\AuthorResource;
use App\Http\Controllers\Api\V1\QuoteController;
use App\Http\Controllers\Api\V1\AuthorController;
use App\Http\Controllers\Api\V1\CategoryController;

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
//, 'middleware' => 'auth:sanctum'

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function() {
    Route::apiResource('quotes', QuoteController::class);
    Route::apiResource('authors', AuthorController::class);
    Route::apiResource('categories', CategoryController::class);
    Route::post('quotes/bulk', ['uses' => 'QuoteController@bulkStore']);
    Route::get('quotes/{quote}/education', [QuoteController::class, 'getByCatEdu']);

});


//Route::get('/authors', function() {
//    return AuthorResource::collection((Author::all()->load('quotes')));
//});
