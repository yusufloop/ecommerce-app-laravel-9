<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SettingController;

Route::controller(LoginController::class)->prefix('admin')->name('admin.')->group(function () {
    Route::get('login',  'showLoginForm')->name('login');
    Route::post('login',  'login')->name('login.post');
    Route::get('logout',  'logout')->name('logout');

});

Route::middleware(['auth:admin'])->group(function () {

    Route::get('/admin', function () {
        return view('admin.dashboard.index');
    })->name('admin.dashboard');
    Route::controller(SettingController::class)->prefix('admin')->name('admin.')->group(function () {
    Route::get('settings', 'index')->name('settings');
    Route::post('settings', 'update')->name('settings.update');
    });
});



// Route::group(['middleware' => ['auth:admin']], function () {

//     Route::get('/', function () {
//         return view('admin.dashboard.index');
//     })->name('admin.dashboard');

// });


?>