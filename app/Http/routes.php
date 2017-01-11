<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get(/**
 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
 */
    '/', function () {
    return view('welcome');
});


Route::get(/**
 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
 */
    'tickets/create', function () {
    $provinces = App\Provincia::select('nombre')->get();
    $cantones = App\Canton::select('nombre')->get();
    $districts = App\Distrito::select('nombre')->get();
    $promoters = App\Promoter::all();
    return view('tickets.create', compact('provinces','cantones','districts','promoters'));
});


/* Tickets Controller and routes (NOT RESOURCE) */

Route::get('tickets', 'TicketsController@index');
Route::get('tickets/{id}', 'TicketsController@show');
Route::POST('tickets/create', 'TicketsController@store');
Route::GET('tickets/edit/{id}','TicketsController@edit');
Route::PUT('tickets/update/{id}', 'TicketsController@update');
Route::DELETE('tickets/delete/{id}','TicketsController@destroy');
/* END TICKETS CONTROLLER AND ROUTES CRUD*/




/* DASHBOARD ROUTES*/
Route::get('dashboard', 'DashboardController@index');
Route::get('dashboard/soon', 'DashboardController@soonDates');
/* END DASHBOARD ROUTES*/

/*Builder Routes ||Resource Controller||*/
Route::resource('builders', 'BuilderController');

/*Promoter Routes ||Resource Controller||*/
Route::resource('promoters', 'PromoterController');