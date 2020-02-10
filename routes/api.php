<?php

use Illuminate\Http\Request;
use App\Word;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('v1')->group(function() {
    Route::apiResource('/word', 'Api\v1\WordsController')
        ->only(['show', 'destroy', 'update', 'store']);

    Route::apiResource('/words', 'Api\v1\WordsController')
        ->only(['index']);
});

Route::prefix('v2')->group(function() {
    Route::apiResource('/word', 'Api\v2\WordsController')
        ->only(['show']);
});
