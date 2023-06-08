<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\TestMiddleware;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\DashboardController;

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


//cache()->get('abc');
// app()->bind('Hello', function(){
//     return 'Kolkata is city of joy...';
// });


//dd(app()->make('Hello'));
//dd(app());

Route::get('/', [HomePageController::class, 'displayHome'])->name('home');

Route::controller(DashboardController::class)->group(function () {
    Route::name('dashboard.')->prefix('dashboard')->group(function () {
        Route::get('/countries', 'listCountries')->name('countries');
        Route::get('/countries/create', 'createCountry')->name('countries.create');
        Route::post('/countries/create', 'storeCountry')->name('countries.store');

        Route::get('/cities', 'listCities')->name('cities');
        Route::get('/cities/create', 'createCity')->name('cities.create');
        Route::post('/cities/create', 'storeCity')->name('cities.store');

        Route::get('/professions', 'listProfessions')->name('professions');
        Route::get('/professions/create', 'createProfession')->name('professions.create');
        Route::post('/professions/create', 'storeProfession')->name('professions.store');


        Route::get('/shifts', 'listShifts')->name('shifts');
        Route::get('/shifts/create', 'createShift')->name('shifts.create');
        Route::post('/shifts/create', 'storeShift')->name('shifts.store');
    });
});
Route::get('dashboard', [DashboardController::class, 'showdashboard'])->name('dashboard');
Route::get('test', [HomePageController::class, 'displayArea'])->name('test');
Route::get('exception-handling-test', [HomePageController::class, 'displayExceptionHandler'])->name('exception-handling-test');
Route::get('query-builder', [HomePageController::class, 'queryBuilderTest']);
Route::get('collection-test', [HomePageController::class, 'collectionTest']);
Route::resource('employees', EmployeeController::class);
Route::post('api/cities', [HomePageController::class, 'fetchCitiesByCountry']);