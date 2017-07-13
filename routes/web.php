<?php

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
    return view('addevent');
});

Route::get('/addcommittee', function () {
    return view('addcommittee');
});

Route::get('/addimagestocommittee', function () {
    return view('addimagestocommittee');
});

Route::get('/showallevents', 'EventsController@index');
Route::get('/showallcommittees', 'CommitteesController@index');


Route::post('/addEvent', 'EventsController@insert');
Route::post('/addCommittee', 'CommitteesController@insert');
Route::post('/addimagestoCommittee', 'ImagesController@insert');


Route::get('/events/{id}/delete', 'EventsController@delete');
Route::get('/events/{id}/edit','EventsController@edit');
Route::post('/edit_event/{id}','EventsController@update');


Route::get('/committees/{id}/delete', 'CommitteesController@delete');
Route::get('/committees/{id}/edit','CommitteesController@edit');
Route::post('/edit_committee/{id}','CommitteesController@update');