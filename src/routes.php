<?php

Route::group(['prefix' => config('adminamazing.path').'/addfundsadmin', 'middleware' => ['web','CheckAccess']], function() {
	Route::get('/', 'Selfreliance\AddFundsAdmin\AddFundsAdminController@index')->name('AddFundsAdmin');
});
