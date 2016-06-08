<?php

namespace App\Http\Controllers;

use App\Ensemble;
use App\Ressource;
use App\Fournisseur;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SaisieController extends Controller
{

    /*
     * Display form and table for the user
     *
     * */
    public function layout(Request $request){
        // Récupération des valuers pour SELECT/OPTION
        $array_ensembles = $this->getListEnsemble($request);
        $array_fournisseurs = $this->getListFournisseur();
        $array_ressources = $this->getListRessource();
        $array_ressources_id = $this->getListRessourceId();

        // Récupération des données pour feed les tableaux
        $table_commande = $this->getAllCommande($request);
        $table_heure = $this->getAllHeure($request);
        $table_ensemble = $this->getAllEnsemble($request);

    	return view('saisie.saisie', compact('array_ensembles', 'array_ressources', 'array_fournisseurs', 'array_ressources_id', 'table_commande', 'table_heure', 'table_ensemble'));
    }

    /*
     * Get list of Ensemble
     *
     * */
    public function getListEnsemble(Request $request){
        $id_projet = $request->session()->get('id_projet');
        $ensembles = DB::table('ensemble')
                        ->where('fk_id_projet', '=', $id_projet)
                        ->get();
                        
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

        // Tableau aidant à l'ajout d'ensemble cf EnsembleController@store
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
        $id_projet = $request->session()->get('id_projet');
        $ensembles = DB::table('ensemble')
                          ->where('ensemble.fk_id_etat', '=', '1')
                          ->where('fk_id_projet', "=", $id_projet)
                          ->get();

        return $ensembles;
    }

    /*
     * Get data for table : HeureBudget
     *
     * */
    public function getAllHeureBudget(Request $request){
        $id_projet = $request->session()->get('id_projet');
        $budgets = DB::table('budget_heure_ressource')
                        ->leftJoin('ensemble', 'ensemble.id', '=', 'budget_heure_ressource.fk_id_ensemble') 
                        ->leftJoin('ressource', 'budget_heure_ressource.fk_id_ressource', '=', 'ressource.id') 
                        ->where('ensemble.fk_id_etat', '=', '1')
                        ->where('ressource.fk_id_etat', '=', '1')
                        ->where('fk_id_projet', "=", $id_projet)
                        ->get();

        return $budgets;
    }

    /*
     * Get data for table : Commande
     *
     * */
    public function getAllCommande(Request $request){
        $id_projet = $request->session()->get('id_projet');
        $commandes = DB::table('commande')
                            ->select('commande.id', 'c_designation', "c_numero_commande", "c_date_commande", "c_prix", "c_insatisfaction_qualite", "c_insatisfaction_livraison", 'commande.fk_id_ensemble', "fk_id_fournisseur", 'f_libelle', 'en_libelle')
                            ->leftJoin('ensemble', 'ensemble.id', '=', 'commande.fk_id_ensemble') 
                            ->leftJoin('fournisseur', 'commande.fk_id_fournisseur', '=', 'fournisseur.id') 
                            ->where('commande.fk_id_etat', '=', '1')
                            ->where('ensemble.fk_id_etat', '=', '1')
                            ->where('fk_id_projet', "=", $id_projet)
                            ->get();

        return $commandes;
    }

    /*
     * Get data for table : Heure
     *
     * */
    public function getAllHeure(Request $request){
        $id_projet = $request->session()->get('id_projet');
        $heures = DB::table('heure')
                            ->select("heure.id", "h_designation", "h_date_debut", "h_date_fin", "h_duree_mission", "heure.fk_id_ensemble", "heure.fk_id_ressource", "heure.fk_id_etat", "en_libelle", "en_budget_commande", "en_commentaire", "ensemble.fk_id_projet", "r_libelle")      
                            ->leftJoin('ensemble', 'ensemble.id', '=', 'heure.fk_id_ensemble') 
                            ->leftJoin('ressource', 'heure.fk_id_ressource', '=', 'ressource.id') 
                            ->where('heure.fk_id_etat', '=', '1')
                            ->where('fk_id_projet', "=", $id_projet)
                            ->get();

        return $heures;
    }
}