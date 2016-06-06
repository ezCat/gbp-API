<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ensemble;
use App\Ressource;
use App\Fournisseur;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SaisieController extends Controller
{
    public function layout()
    {
        // Récupération des valuers pour SELECT/OPTION
    	$ensembles = Ensemble::all();
    	$ressources = Ressource::all();
    	$fournisseurs = Fournisseur::all();

        $array_ressources = array();
        foreach ($ressources as $ressource) {
            $array_ressources[$ressource->id] = $ressource->r_libelle;
        }

        $array_ensembles = array();
        foreach ($ensembles as $ensemble) {
            $array_ensembles[$ensemble->id] = $ensemble->en_libelle;
        }

        $array_fournisseurs = array();
        foreach ($fournisseurs as $fournisseur) {
            $array_fournisseurs[$fournisseur->id] = $fournisseur->f_libelle;
        }

        // Tableau aidant à l'ajout d'ensemble cf EnsembleController@store + AJAX
    	$array_ressources_id = array();
    	foreach ($ressources as $ressource) {
    		array_push($array_ressources_id, $ressource->id);
    	}

    	return view('saisie.saisie', compact('array_ensembles', 'array_ressources', 'array_fournisseurs', 'array_ressources_id'));
    }
}