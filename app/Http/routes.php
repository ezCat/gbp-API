<?php

Route::group(['middleware' => ['web', 'cnx.ad']], function () {

    // page de choix de projet
    Route::get('choose.projet', ['as' => 'choose.projet', 'uses' => 'ProjetController@choisirProjet']);

    // sauvegarde en session l'id du projet choisi et redirige vers l'accueil
    Route::post('accueil', ['as' => 'accueil', 'uses' => 'ProjetController@validationFormProjet']);

    Route::get('ajouter-projet', function () {
        return view('saisie/ajouter_affaire');
    });


    Route::group(['middleware' => ['need.projet']], function () {

        Route::get('/', function () {
            return view('accueil');
        });

//	SAISIE
        Route::get('saisir-projet', 'SaisieController@layout');

//	TABLEAU DE BORD

        Route::get('dashboard/general', function () {
            return view('dashboard/general');
        });
        Route::get('dashboard/unique', function () {
            return view('dashboard/unique');
        });
        Route::get('dashboard/master', function () {
            return view('dashboard/master');
        });

//	HELP

        Route::get('help', function () {
            return view('errors.503');
        });

        Route::resource('projet', 'ProjetController');
        Route::resource('fournisseur', 'FournisseurController');
        Route::resource('heure', 'HeureController');
        Route::resource('commande', 'CommandeController');
        Route::resource('ensemble', 'EnsembleController');

        Route::get('yo', 'SaisieController@getAllHeure');

    });

    // AJAX
    Route::post('ajax/ajouterProjet', 'ProjetController@store');
    Route::post('ajax/getListeProjet', 'ProjetController@getListe');
    Route::get('ajax/getStatutProjet', 'ProjetController@getSessionIdStatutProjet');
    Route::post('ajax/postStatutProjet', 'ProjetController@postStatutProjet');

    Route::post('ajax/deleteEnsemble', 'EnsembleController@destroy');
    Route::post('ajax/deleteCommande', 'CommandeController@destroy');
    Route::post('ajax/deleteHeure', 'HeureController@destroy');
    Route::post('ajax/deleteFournisseur', 'FournisseurController@destroy');

    Route::post('ajax/postEnsemble', 'EnsembleController@store');
    Route::post('ajax/postCommande', 'CommandeController@store');
    Route::post('ajax/postHeure', 'HeureController@store');
    Route::post('ajax/postFournisseur', 'FournisseurController@store');

});