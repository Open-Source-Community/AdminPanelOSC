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
    return redirect('/login');
});

//Route::get('/addcommittee', function () {
//    if (Auth::user() != null) {
//        return view('addcommittee');
//    } else {
//        return redirect('/login');
//    }
//});
Route::get('/addimagestocommittee', function () {
    if (Auth::user() != null) {
        return view('addimagestocommittee');
    } else {
        return redirect('/login');
    }
});

Route::get('/showallevents', 'EventsController@index');
//Route::get('/showallcommittees', 'CommitteesController@index');
Route::get('/showallimages', 'ImagesController@index');

//Route::get('/showallinterviews_Saturday', 'EventsController@index2');
//Route::get('/showallinterviews_Sunday', 'EventsController@index3');
//Route::get('/showallinterviews_Monday', 'EventsController@index4');
//Route::get('/showallinterviews_Tuesday', 'EventsController@index5');
//Route::get('/showallinterviews_Wednesday', 'EventsController@index6');
//Route::get('/showallinterviews_Thursday', 'EventsController@index7');
//
//Route::get('/showallinterviewsworkshops_Saturday', 'WorkshopController@indexSaturday');
//Route::get('/showallinterviewsworkshops_Sunday', 'WorkshopController@indexSunday');
//Route::get('/showallinterviewsworkshops_Monday', 'WorkshopController@indexMonday');
//Route::get('/showallinterviewsworkshops_Tuesday', 'WorkshopController@indexTuesday');
//Route::get('/showallinterviewsworkshops_Wednesday', 'WorkshopController@indexWednesday');
//Route::get('/showallinterviewsworkshops_Thursday', 'WorkshopController@indexThursday');
//Route::get('/showallinterviewsworkshops_Saturday7/10/2017', 'WorkshopController@indexSaturday_7_10_2017');
//Route::get('/showallinterviewsworkshops_Sunday8/10/2017', 'WorkshopController@indexSunday_8_10_2017');

//Route::post('/addParticiple', 'WorkshopController@store');
//Route::get('/CreateNewParticiple', 'WorkshopController@create');
//Route::get('/Participles/{id}/delete', 'WorkshopController@delete');

Route::post('/addadmin', 'HomeController@insert');
Route::get('/CreateNewAdmin', 'HomeController@index2');

Route::post('/addEvent', 'EventsController@insert');
//Route::post('/addCommittee', 'CommitteesController@insert');
Route::post('/addimagestoCommittee', 'ImagesController@insert');


Route::get('/events/{id}/delete', 'EventsController@delete');
Route::get('/events/{id}/edit', 'EventsController@edit');
Route::post('/edit_event/{id}', 'EventsController@update');


//Route::get('/committees/{id}/delete', 'CommitteesController@delete');
//Route::get('/committees/{id}/edit', 'CommitteesController@edit');
//Route::post('/edit_committee/{id}', 'CommitteesController@update');


Route::get('/images/{id}/delete', 'ImagesController@delete');
Route::get('/images/{id}/edit', 'ImagesController@edit');
Route::post('/edit_image/{id}', 'ImagesController@update');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
