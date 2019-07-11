<?php

Route::get('/','Test1Controller@index')->name('test1.index');
Route::post('/test1','Test1Controller@process')->name('test1.process');

Route::get('/test2','Test2\Test2Controller@index')->name('test2.index');
Route::post('/test2','Test2\Test2Controller@process')->name('test2.process');

Route::get('/ongkir/get/province','Test2\LocationController@province')->name('get_province');
Route::get('/ongkir/get/city','Test2\LocationController@city')->name('get_city');
Route::post('/ongkir/hitung','Test2\Test2Controller@hitungOngkir')->name('hitungOngkir');