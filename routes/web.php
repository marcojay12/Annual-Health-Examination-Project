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
//Route::get('/', [App\Http\Controllers\PatientInformationController::class, 'index']);

Route::get('patient_designation', [App\Http\Controllers\FrontPageController::class, 'index']);
Route::get('patient_designation/{category_status}', [App\Http\Controllers\FrontPageController::class, 'patientcategory']);
Route::get('patient_designation/{category_status}/{patient_gender}', [App\Http\Controllers\FrontPageController::class, 'patients']);

Route::prefix('forms')->group(function() {
Route::controller(App\Http\Controllers\PatientCategoryController::class)->group(function(){
    Route::get('category', 'index');
    Route::get('category/create', 'create');
    Route::post('category', 'store');
    Route::get('category/{patient_category_id}/delete', 'destroy');

});

Route::controller(App\Http\Controllers\PatientInformationController::class)->group(function(){
    Route::get('patient', 'index');
    Route::get('patient/registration', 'registration');
    Route::post('patient', 'store');
    Route::get('patient/{patient}/edit', 'edit');
    Route::put('patient/{patient}', 'update');

});
});
