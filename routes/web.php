<?php

use App\Http\Controllers\Admin\DigitalGiftController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\InvitationMainController;
use App\Http\Controllers\Admin\MarriageCeremonyController;
use App\Http\Controllers\Admin\MasterCatalogController;
use App\Http\Controllers\Admin\PhysicalGiftController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WeddingReceptionController;
use App\Models\MasterCatalog;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['Middleware' => ['auth:sanctum', 'verified']], function(){
    Route::name('dashboard.')->prefix('dashboard')->group(function(){
        Route::get('/', [DashboardController::class, 'index'])->name('index');
        Route::get('invitation/catalogIndex', [InvitationMainController::class, 'catalogIndex'])->name('invitation.catalogIndex');
        Route::get('invitation/createInvitation/{id}', [InvitationMainController::class, 'createInvitation'])->name('invitation.createInvitation');
        Route::middleware(['admin'])->group(function () {
            Route::resource('invitation', InvitationMainController::class);
            Route::resource('reception', WeddingReceptionController::class);
            Route::resource('ceremony', MarriageCeremonyController::class);
            Route::resource('physicalGift', PhysicalGiftController::class);
            Route::resource('digitalGift', DigitalGiftController::class);
            Route::resource('user', UserController::class);
            Route::resource('masterCatalog', MasterCatalogController::class);
        });
    });
});