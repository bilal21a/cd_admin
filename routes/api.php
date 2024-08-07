<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/register', 'RegisterController@register')->name('register');
Route::get('/common/jobs', 'CommonController@get_jobs');
Route::post('/common/contact_us', 'CommonController@contact_us');

Route::get('/search_visa_status', 'VisaController@search_visa_status');
Route::get('/search_nizwal', 'VisaController@search_nizwal');
