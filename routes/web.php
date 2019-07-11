<?php

Route::get('/','Test1Controller@index')->name('test1.index');
Route::post('/test1','Test1Controller@process')->name('test1.process');

Route::get('/test2','Test2Controller@index')->name('test2.index');
Route::post('/test2','Test2Controller@process')->name('test2.process');
