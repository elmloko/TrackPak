<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\LocationController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	
	Route::resource('package', 'App\Http\Controllers\PackageController');
	Route::get('packages', [PackageController::class, 'index'])->name('packages.index');
	Route::get('packages/create', [PackageController::class, 'create'])->name('packages.create');
	Route::post('packages', [PackageController::class,'store'])->name('packages.store');
	Route::put('packages/{package}', [PackageController::class, 'update'])->name('packages.update');
	Route::delete('packages/{package}', [PackageController::class, 'destroy'])->name('packages.destroy');
	Route::get('/packages/{package}', [PackageController::class, 'show'])->name('packages.show');
	Route::get('packages/{package}/edit', [PackageController::class, 'edit'])->name('packages.edit');

	Route::resource('location', 'App\Http\Controllers\LocationController');
	Route::get('locations', [LocationController::class, 'index'])->name('locations.index');
	Route::get('locations/create', [LocationController::class, 'create'])->name('locations.create');
	Route::post('locations', [LocationController::class,'store'])->name('locations.store');
	Route::put('/locations/{location}', [LocationController::class, 'update'])->name('locations.update');
	Route::delete('locations/{location}', [LocationController::class, 'destroy'])->name('locations.destroy');
	Route::get('/locations/{location}', [LocationController::class, 'show'])->name('locations.show');
	Route::get('locations/{location}/edit', [LocationController::class, 'edit'])->name('locations.edit');
	

 
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
	Route::get('map', function () {
		return view('pages.maps');
	})->name('map');
	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');
	Route::get('table-list', function () {
		return view('pages.tables');
	})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});
