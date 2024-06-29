<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/generate_menus', [App\Http\Controllers\Controller::class,'generate_menus'])->name('menus');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(App\Http\Controllers\AdminControllers\EmployeesController::class)->group(function() {
    $url = '/employees';

    Route::get($url.'/', 'index');
    Route::post($url.'/input', 'input');
    Route::post($url.'/list', 'get_list');
});
