<?php
Auth::routes();
Route::Resource('/', 'CommitteesController');
Route::Resource('/home', 'CommitteesController');
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

Route::post('/addParticiple', 'WorkshopController@store');
Route::get('/CreateNewParticiple', 'WorkshopController@create');
Route::get('/Participles/{id}/delete', 'WorkshopController@delete');

Route::get('/OnlineRecruitment/Saturday', 'RecruitmentController@Saturday');
Route::get('/OnlineRecruitment/Sunday', 'RecruitmentController@Sunday');
Route::get('/OnlineRecruitment/Monday', 'RecruitmentController@Monday');
Route::get('/OnlineRecruitment/Tuesday', 'RecruitmentController@Tuesday');
Route::get('/OnlineRecruitment/Wednesday', 'RecruitmentController@Wednesday');
Route::get('/OnlineRecruitment/Thursday', 'RecruitmentController@Thursday');

Route::Resource('/OnlineRecruitment', 'RecruitmentController');