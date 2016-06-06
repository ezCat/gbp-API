<?php

namespace App\Http\Controllers;

use App\Ensemble;
use App\Ressource;
use App\Fournisseur;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class SaisieController extends Controller
{

    /*
     * Display form and table for the user
     *
     * */
    public function layout()
    {
        // Récupération des valuers pour SELECT/OPTION
        $array_ensembles = $this->getListEnsemble();
        $array_fournisseurs = $this->getListFournisseur();
        $array_ressources = $this->getListRessource();
        $array_ressources_id = $this->getListRessourceId();

    	return view('saisie.saisie', compact('array_ensembles', 'array_ressources', 'array_fournisseurs', 'array_ressources_id'));
    }

    /*
     * Get list of Ensemble
     *
     * */
    public function getListEnsemble(){
        $ensembles = Ensemble::all();
        $array_ensembles = array();
        foreach ($ensembles as $ensemble) {
            $array_ensembles[$ensemble->id] = $ensemble->en_libelle;
        }

        return $array_ensembles;
    }

    /*
     * Get list of Ressource
     *
     * */
    public function getListRessource(){
        $ressources = Ressource::all();

        $array_ressources = array();
        foreach ($ressources as $ressource) {
            $array_ressources[$ressource->id] = $ressource->r_libelle;
        }

        return $array_ressources;
    }

    /*
     * Get list of Ressource for the id
     *
     * */
    public function getListRessourceId(){
        $ressources = Ressource::all();

        // Tableau aidant à l'ajout d'ensemble cf EnsembleController@store + AJAX
        $array_ressources_id = array();
        foreach ($ressources as $ressource) {
            array_push($array_ressources_id, $ressource->id);
        }

        return $array_ressources_id;
    }

    /*
     * Get list of Fournisseur
     *
     * */
    public function getListFournisseur(){
        $fournisseurs = Fournisseur::all();
        $array_fournisseurs = array();
        foreach ($fournisseurs as $fournisseur) {
            $array_fournisseurs[$fournisseur->id] = $fournisseur->f_libelle;
        }

        return $array_fournisseurs;
    }

    /*
     * Get data for table : Ensemble
     *
     * */
    public function getAllEnsemble(Request $request){
//        $id_projet = $request->session()->get('id_projet');
        $id_projet = 5;
        $ensembles = DB::table('ensemble')
            ->leftJoin('budget_heure_ressource', 'ensemble.id', '=', 'budget_heure_ressource.fk_id_ensemble')
            ->leftJoin('ressource', 'budget_heure_ressource.fk_id_ressource', '=', 'ressource.id')
            ->where('ensemble.fk_id_etat', '=', '1')
            ->where('fk_id_projet', "=", $id_projet)
            ->get();

        dd($ensembles);
    }
}