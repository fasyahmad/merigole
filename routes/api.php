<?php

use App\Http\Controllers\API\CatalogController;
use App\Http\Controllers\API\GuestBookController;
use App\Http\Controllers\API\InvitationMain;
use App\Http\Controllers\API\InvitationMainController;
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

Route::get('invitations', [InvitationMainController::class, 'getAll']);
Route::get('catalogs', [CatalogController::class, 'All']);
Route::get('guestBooks', [GuestBookController::class, 'getAll']);
Route::post('createMessage', [GuestBookController::class, 'createMessage']);
