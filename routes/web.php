<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('forms')->group(function() {
Route::controller(App\Http\Controllers\PatientCategoryController::class)->group(function(){
    Route::get('category', 'index');
    Route::get('category/create', 'create');
    Route::post('category', 'store');
});

Route::controller(App\Http\Controllers\PatientInformationController::class)->group(function(){
    Route::get('patient', 'index');
    Route::get('patient/registration', 'registration');
    Route::post('patient', 'store');
});
});
