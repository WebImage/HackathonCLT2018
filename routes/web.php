<?php

Route::get('', 'ContentController@index')->name('home');

Route::get('companies', 'CompaniesController@index')->name('companies');
//Route::get('companies/register', 'CompaniesController@register')->name('registercompany');
Route::get('companies/list', 'CompaniesController@listTrips')->name('companytrips');
Route::get('companies/welcome', 'CompaniesController@welcome')->name('companywelcome');
Route::get('companies/createfieldtrip', 'CompaniesController@createTrip')->name('createfieldtrip');
Route::get('companies/createtripschedule', 'CompaniesController@createTripSchedule')->name('createtripschedule');

Route::get('schools', 'SchoolsController@index')->name('schools');
Route::get('schools/list', 'SchoolsController@listTrips')->name('teachertrips');
Route::get('schools/scheduletrip', 'SchoolsController@scheduleTrip')->name('scheduletrip');
Route::get('apps', 'ContentController@apps')->name('apps');

Route::get('experiences', 'ContentController@experiences')->name('experiences');
//Route::get('schools/register', 'SchoolsController@register')->name('registerschool');