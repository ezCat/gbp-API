<?php

Route::group(['middleware' => ['web', 'cnx.ad']], function () {

    // page de choix de projet
    Route::get('choose.projet', ['as' => 'choose.projet', 'uses' => 'ProjetController@choisirProjet']);

    // sauvegarde en session l'id du projet choisi et redirige vers l'accueil
    Route::post('accueil', ['as' => 'accueil', 'uses' => 'ProjetController@validationFormProjet']);

    Route::get('ajouter-projet', function () {
        return view('saisie/ajouter_affaire');
    });

    Route::get('/', 'DashboardController@showBG');
    Route::get('dashboard/general', 'DashboardController@showBG');


    Route::group(['middleware' => ['need.projet']], function () {

//	SAISIE
        Route::get('saisir-projet', 'SaisieController@layout');

//	TABLEAU DE BORD

        Route::get('dashboard/unique', 'DashboardController@showBU');
        Route::get('dashboard/master', 'DashboardController@showMA');

//	HELP

        Route::get('help', function () {
            return view('errors.503');
        });

        Route::resource('projet', 'ProjetController');
        Route::resource('fournisseur', 'FournisseurController');
        Route::resource('heure', 'HeureController');
        Route::resource('commande', 'CommandeController');
        Route::resource('ensemble', 'EnsembleController');

        Route::get('go', 'DashboardController@getCommandeFournisseurBU');

    });

    // AJAX

    // Ajout projet
    Route::post('ajax/ajouterProjet', 'ProjetController@store');
    Route::post('ajax/getListeProjet', 'ProjetController@getListe');

    // Dashboard general
    Route::get('ajax/getListeProjetBilan', 'DashboardController@getListeProjetBG');
    Route::get('ajax/getCommandeBilan', 'DashboardController@getCommandeBG');
    Route::get('ajax/getHeureBilan', 'DashboardController@getHeureBG');

    // Dashboard unique
    Route::get('ajax/getHeureEnsembleBU', 'DashboardController@getHeureEnsembleBU');
    Route::get('ajax/getHeureRessourceBU', 'DashboardController@getHeureRessourceBU');
    Route::get('ajax/getCommandeFournisseurBU', 'DashboardController@getCommandeFournisseurBU');
    Route::get('ajax/getCommandeEnsembleBU', 'DashboardController@getCommandeEnsembleBU');

    // Dashboard master
        

    // Gestion statut projet
    Route::get('ajax/getStatutProjet', 'ProjetController@getSessionIdStatutProjet');
    Route::post('ajax/postStatutProjet', 'ProjetController@postStatutProjet');
    
    // autocompletion fournisseur
    Route::get('ajax/getListFournisseur', 'SaisieController@getListFournisseur');

    // AJAX routes pour saisie projet
    Route::post('ajax/deleteEnsemble', 'EnsembleController@destroy');
    Route::post('ajax/deleteCommande', 'CommandeController@destroy');
    Route::post('ajax/deleteHeure', 'HeureController@destroy');
    Route::post('ajax/deleteFournisseur', 'FournisseurController@destroy');
    Route::post('ajax/deleteRessource', 'RessourceController@destroy');
    Route::post('ajax/deleteProjet', 'ProjetController@destroy');

    Route::post('ajax/updateEnsemble', 'EnsembleController@update');
    Route::post('ajax/updateHeureBudget', 'EnsembleController@updateHeureBudget');
    Route::post('ajax/updateCommande', 'CommandeController@update');
    Route::post('ajax/updateHeure', 'HeureController@update');
    Route::post('ajax/updateFournisseur', 'FournisseurController@update');
    Route::post('ajax/updateRessource', 'RessourceController@update');
    Route::post('ajax/updateProjet', 'ProjetController@update');

    Route::post('ajax/postEnsemble', 'EnsembleController@store');
    Route::post('ajax/postCommande', 'CommandeController@store');
    Route::post('ajax/postHeure', 'HeureController@store');
    Route::post('ajax/postFournisseur', 'FournisseurController@store');

});