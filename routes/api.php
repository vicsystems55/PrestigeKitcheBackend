<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\API\V1\VendorController;
use App\Http\Controllers\API\V1\MenuItemController;
use App\Http\Controllers\API\V1\OrderItemController;
use App\Http\Controllers\API\V1\ApiAuthController;

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

Route::group([
    'prefix' => '/v1',
  ], function () {

    Route::post('/register', [ApiAuthController::class, 'register']);

    Route::post('/login', [ApiAuthController::class, 'login']);

    Route::apiResource('vendor', VendorController::class)->middleware('auth:sanctum');

    Route::apiResource('menu-item', MenuItemController::class);

    Route::apiResource('order', OrderController::class);

    Route::apiResource('order-item', OrderItemController::class);


  });

