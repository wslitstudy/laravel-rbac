<?php

Route::Resource('/admin/login', 'Admin\LoginController');

Route::get('/admin', 'IndexController@index')->middleware(['admin.auth']);

Route::namespace('Admin')->middleware(['admin.auth'])->prefix('admin')->group(function () {

    Route::get('/error', 'IndexController@error');
    Route::get('/logout', 'IndexController@logout');

    Route::delete('/manage/unforbidden/{id}', 'ManageController@unforbidden');
    Route::resource('/manage', 'ManageController');

    Route::delete('/group/force/{id}', 'GroupController@force');
    Route::resource('/group', 'GroupController');
});


