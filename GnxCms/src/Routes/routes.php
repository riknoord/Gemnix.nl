<?php
Route::group(['namespace' => 'Gemnix\GnxCms\Controllers\Cms'], function(){

    Route::get('gnxcms', 'LoginController@index');

});