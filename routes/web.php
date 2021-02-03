<?php

Route::group([
    'prefix' => '/',
], function() {
    Route::get('home',['as' => 'controle.home', 'uses' => 'App\Http\Controllers\Controle\HomeController@home']);

});

Route::get('teste', function(){
    dd('TESTE');
});



