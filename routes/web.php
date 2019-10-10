<?php



Auth::routes();

Route::get('/', 'CatController@index')->name('cats.index');
Route::get('/addcat', 'CatAuthController@create')->name('addCat');
Route::post('/storecat', 'CatAuthController@store')->name('storeCat');
Route::get('/edit/{id}', 'CatAuthController@edit')->name('editCat');
Route::post('/update/{id}', 'CatAuthController@update')->name('updateCat');
