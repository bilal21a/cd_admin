<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowRequestController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IssuedBooksController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RenewRequestController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\RequestedBooksController;
use App\Http\Controllers\ReserveRequestController;
use App\Http\Controllers\ReturnRequestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth'])->group(function () {

    // Route::group(['middleware' => ['role:admin']], function () {
        Route::get('reports', [ReportsController::class, 'index'])->name('reports.index');

        // Users Management
        Route::resource('users', 'UserController');
        Route::get('get_users', [UserController::class, 'get_data'])->name('get_users');
        Route::resource('applications', 'ApplicationController');
        Route::get('get_applications', [ApplicationController::class, 'get_data'])->name('get_applications');
        Route::resource('jobs', 'JobController');
        Route::get('get_jobs', [JobController::class, 'get_data'])->name('get_jobs');
        Route::resource('vouchers', 'VoucherController');
        Route::resource('insurance', 'InsuranceController');
    // });
});

Auth::routes();
Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');
Route::get('/home', 'HomeController@index')->name('home');
