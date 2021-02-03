<?php

Route::group([
    'prefix' => '/',
], function() {
    $main = "App\Http\Controllers\Controle";
    Route::get('home',['as' => 'controle.home', 'uses' => "$main\HomeController@home"]); //'middleware' => 'auth'
    Route::get('categoria', ['uses' => "$main\CategoriaController@index"])->name('controle.categoria.index'); 
    Route::get('categoria/create', ['uses' => "$main\CategoriaController@create"])->name('controle.categoria.create'); 
    Route::get('categoria/show/{id}', ['uses' => "$main\CategoriaController@show"])->name('controle.categoria.show'); 
    Route::get('categoria/edit/{id}', ['uses' => "$main\CategoriaController@edit"])->name('controle.categoria.edit'); 
    Route::post('categoria/store', ['uses' => "$main\CategoriaController@store"])->name('controle.categoria.store'); 
    Route::post('categoria/update/{id}', ['uses' => "$main\CategoriaController@update"])->name('controle.categoria.update'); 
    Route::get('categoria/delete/{id}', ['uses' => "$main\CategoriaController@destroy"])->name('controle.categoria.destroy');
});

Route::get('teste', function(){
    dd('TESTE');
});



