<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

	// DASHBOARD UNIQUE 

    public function getHeureEnsembleBU(Request $request){

    	$id_projet = $request->session()->get('id_projet');

        $heure = DB::table('heure')
            ->select('ensemble.en_libelle', 'ressource.r_libelle', 'heure.h_duree_mission', 'heure.h_date_debut' ,'heure.h_date_debut')
            ->join('ressource', 'ressource.id', '=', 'heure.fk_id_ressource')
            ->join('ensemble', 'ensemble.id', '=', 'heure.fk_id_ensemble')
            ->join('projet', 'projet.id', '=', 'ensemble.fk_id_projet')
            ->join('etat', 'heure.fk_id_etat', '=', 'etat.id')
            ->where('heure.fk_id_etat', '=', '1')
            ->where('projet.id', '=', $id_projet)
            ->orderBy('ensemble.en_libelle')
            ->get();
        return response()->json($heure);
    }

    public function getHeureRessourceBU(Request $request){

    	$id_projet = $request->session()->get('id_projet');

        $heure = DB::table('heure')
            ->select('ensemble.en_libelle', 'ressource.r_libelle', 'heure.h_duree_mission', 'heure.h_date_debut' ,'heure.h_date_debut')
            ->join('ressource', 'ressource.id', '=', 'heure.fk_id_ressource')
            ->join('ensemble', 'ensemble.id', '=', 'heure.fk_id_ensemble')
            ->join('projet', 'projet.id', '=', 'ensemble.fk_id_projet')
            ->join('etat', 'heure.fk_id_etat', '=', 'etat.id')
            ->where('heure.fk_id_etat', '=', '1')
            ->where('projet.id', '=', $id_projet)
            ->orderBy('ressource.r_libelle')
            ->get();
        return response()->json($heure);
    }

    public function getCommandeEnsembleBU(Request $request){

    	$id_projet = $request->session()->get('id_projet');

        $commande = DB::table('commande')
            ->select('ensemble.en_libelle', 'fournisseur.f_libelle', 'commande.c_designation', 'commande.c_date_commande' ,'commande.c_prix')
            ->join('fournisseur', 'fournisseur.id', '=', 'commande.fk_id_fournisseur')
            ->join('ensemble', 'ensemble.id', '=', 'commande.fk_id_ensemble')
            ->join('projet', 'projet.id', '=', 'ensemble.fk_id_projet')
            ->join('etat', 'commande.fk_id_etat', '=', 'etat.id')
            ->where('commande.fk_id_etat', '=', '1')
            ->where('projet.id', '=', $id_projet)
            ->orderBy('ensemble.en_libelle')
            ->get();
        return response()->json($commande);
    }

    public function getCommandeFournisseurBU(Request $request){

    	$id_projet = $request->session()->get('id_projet');

        $commande = DB::table('commande')
            ->select('fournisseur.f_libelle', 'ensemble.en_libelle', 'commande.c_designation', 'commande.c_date_commande' ,'commande.c_prix')
            ->join('fournisseur', 'fournisseur.id', '=', 'commande.fk_id_fournisseur')
            ->join('ensemble', 'ensemble.id', '=', 'commande.fk_id_ensemble')
            ->join('projet', 'projet.id', '=', 'ensemble.fk_id_projet')
            ->join('etat', 'commande.fk_id_etat', '=', 'etat.id')
            ->where('commande.fk_id_etat', '=', '1')
            ->where('projet.id', '=', $id_projet)
            ->orderBy('fournisseur.f_libelle')
            ->get();
        return response()->json($commande);
    }

    // DASHBOARD TOUS PROJETS

    public function getListeProjetBG()
    {
        $listProjet = DB::table('projet')
            ->select('projet.p_libelle', 'utilisateur.nom', 'projet.p_commentaire', 'etat.et_libelle')
            ->join('projet_utilisateur', 'projet_utilisateur.fk_id_projet', '=', 'projet.id')
            ->join('utilisateur', 'projet_utilisateur.fk_id_utilisateur', '=', 'utilisateur.id')
            ->join('etat', 'projet.fk_id_etat', '=', 'etat.id')
            ->orderBy('projet.p_libelle')
            ->get();
        return response()->json($listProjet);
    }


    public function getCommandeBG()
    {
        $commande = DB::table('commande')
            ->select('fournisseur.f_libelle', 'projet.p_libelle',DB::raw('SUM(commande.c_prix) as total_prix'))
            ->join('fournisseur', 'fournisseur.id', '=', 'commande.fk_id_fournisseur')
            ->join('ensemble', 'ensemble.id', '=', 'commande.fk_id_ensemble')
            ->join('projet', 'projet.id', '=', 'ensemble.fk_id_projet')
            ->join('etat', 'commande.fk_id_etat', '=', 'etat.id')
            ->where('commande.fk_id_etat', '=', '1')
            ->groupBy('fournisseur.f_libelle', 'projet.p_libelle')
            ->orderBy('fournisseur.f_libelle')
            ->get();
        return response()->json($commande);
    }


    public function getHeureBG()
    {
        $heure = DB::table('heure')
            ->select('ressource.r_libelle', 'projet.p_libelle',DB::raw('SUM(heure.h_duree_mission) as total_heure'))
            ->join('ressource', 'ressource.id', '=', 'heure.fk_id_ressource')
            ->join('ensemble', 'ensemble.id', '=', 'heure.fk_id_ensemble')
            ->join('projet', 'projet.id', '=', 'ensemble.fk_id_projet')
            ->join('etat', 'heure.fk_id_etat', '=', 'etat.id')
            ->where('heure.fk_id_etat', '=', '1')
            ->groupBy('ressource.r_libelle', 'projet.p_libelle')
            ->orderBy('ressource.r_libelle')
            ->get();
        return response()->json($heure);
    }

    // DASHBOARD MASTER

}
