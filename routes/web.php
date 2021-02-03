<?php

Route::group([
    'prefix' => '/',
], function () {
    $main = "App\Http\Controllers\Controle";
    Route::get('/', ['as' => 'controle.home', 'uses' => "$main\HomeController@home"]);
    Route::get('categoria', ['uses' => "$main\CategoriaController@index"])->name('controle.categoria.index');
    Route::get('categoria/create', ['uses' => "$main\CategoriaController@create"])->name('controle.categoria.create');
    Route::get('categoria/show/{id}', ['uses' => "$main\CategoriaController@show"])->name('controle.categoria.show');
    Route::get('categoria/edit/{id}', ['uses' => "$main\CategoriaController@edit"])->name('controle.categoria.edit');
    Route::post('categoria/store', ['uses' => "$main\CategoriaController@store"])->name('controle.categoria.store');
    Route::post('categoria/update/{id}', ['uses' => "$main\CategoriaController@update"])->name('controle.categoria.update');
    Route::get('categoria/delete/{id}', ['uses' => "$main\CategoriaController@destroy"])->name('controle.categoria.destroy');

    Route::get('produto', ['uses' => "$main\ProdutoController@index"])->name('controle.produto.index');
    Route::get('produto/create', ['uses' => "$main\ProdutoController@create"])->name('controle.produto.create');
    Route::get('produto/show/{id}', ['uses' => "$main\ProdutoController@show"])->name('controle.produto.show');
    Route::get('produto/edit/{id}', ['uses' => "$main\ProdutoController@edit"])->name('controle.produto.edit');
    Route::post('produto/store', ['uses' => "$main\ProdutoController@store"])->name('controle.produto.store');
    Route::post('produto/update/{id}', ['uses' => "$main\ProdutoController@update"])->name('controle.produto.update');
    Route::get('produto/delete/{id}', ['uses' => "$main\ProdutoController@destroy"])->name('controle.produto.destroy');
});