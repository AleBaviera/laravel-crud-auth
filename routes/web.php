<?php



Auth::routes();

Route::get('/', 'CatController@index')->name('cats.index');
