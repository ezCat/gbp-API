<?php

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function(){
		return view('accueil');
	});

    Route::get('ajouter/affaire', function(){
		return view('saisie/ajouter_affaire');
	});

    Route::get('saisir/affaire', function(){
		return view('saisie/saisie');
	});

    Route::get('dashboard/general', function(){
		return view('dashboard/general');
	});

	Route::get('dashboard/unique', function(){
		return view('dashboard/unique');
	});

	Route::get('dashboard/master', function(){
		return view('dashboard/master');
	});

	Route::get('help', function(){
		return view('errors.503');
	});

	Route::resource('projet', 'ProjetController');

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
});
