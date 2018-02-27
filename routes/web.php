<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layout.layout');
});
Route::get('/sandbox', function(){
    return view('sandbox');
});

Route::get('/sandbox/testpage', function(){

    $section = array(
        'type' => 'default',
        'styles' => array(
            array('background' => 'red')
        ),
        'containers' => array(
            array(
                'type' => 'default',
                'styles' => array(
                    'background' => 'green'
                ),
                'segments' => '4_4_4'
            )
        )
    );

    $sections = array();
    for($i = 1; $i < 4; $i++){
        $sections[] = $section;
    }

    echo json_encode($sections);
});





Route::get('/manager/server', 'Manager\ServerController@index');