<?php
Route::when('*', 'csrf', ['post','put','patch']);

/**
 * public routes
 */

route::get('/', 'PublicController@index');
Route::get('/contactus', 'PublicController@contactus');
Route::post('/contactus', 'PublicController@postContactus');

Route::get('/advertise', 'PublicController@advertise');
Route::post('/advertise', 'PublicController@postAdvertise');