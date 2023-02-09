<?php
use App\http\controllers\MealsController;
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

Route::get('/', function () {return view('landing');});

Route::get('/', [MealsController::class, 'show']);

Route::get('DeleteMeal/{id}', [MealsController::class, 'destroy']);

Route::get('Edit/{id}', [MealsController::class, 'edit']);

Route::post('SaveMeal', [MealsController::class, 'store']);

Route::post('Edit/EditMeal/{id}', [MealsController::class, 'update']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('dashboard', [MealsController::class, 'index'])->name('dashboard');
});