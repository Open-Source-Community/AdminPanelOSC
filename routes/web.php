<?php

Auth::routes();
Route::Resource('/', 'CommitteesController');
Route::Resource('/committees', 'CommitteesController');
Route::Resource('/committees.images', 'CommitteeImagesController');
Route::Resource('/events', 'EventsController');
Route::Resource('/users', 'UsersController');


Route::get('/showallinterviews_Saturday', 'EventsController@index2');
Route::get('/showallinterviews_Sunday', 'EventsController@index3');
Route::get('/showallinterviews_Monday', 'EventsController@index4');
Route::get('/showallinterviews_Tuesday', 'EventsController@index5');
Route::get('/showallinterviews_Wednesday', 'EventsController@index6');
Route::get('/showallinterviews_Thursday', 'EventsController@index7');

Route::get('/showallinterviewsworkshops_Saturday', 'WorkshopController@indexSaturday');
Route::get('/showallinterviewsworkshops_Sunday', 'WorkshopController@indexSunday');
Route::get('/showallinterviewsworkshops_Monday', 'WorkshopController@indexMonday');
Route::get('/showallinterviewsworkshops_Tuesday', 'WorkshopController@indexTuesday');
Route::get('/showallinterviewsworkshops_Wednesday', 'WorkshopController@indexWednesday');
Route::get('/showallinterviewsworkshops_Thursday', 'WorkshopController@indexThursday');
Route::get('/showallinterviewsworkshops_Saturday7/10/2017', 'WorkshopController@indexSaturday_7_10_2017');
Route::get('/showallinterviewsworkshops_Sunday8/10/2017', 'WorkshopController@indexSunday_8_10_2017');

Route::post('/addParticiple', 'WorkshopController@store');
Route::get('/CreateNewParticiple', 'WorkshopController@create');
Route::get('/Participles/{id}/delete', 'WorkshopController@delete');









