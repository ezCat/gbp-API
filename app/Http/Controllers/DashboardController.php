<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Heure;
use App\Commande;

class DashboardController extends Controller
{

    public function showBU(Request $request){
        $id_projet = $request->session()->get('id_projet');

        $total_heures_realisees = DB::table('heure')
            ->select(DB::raw('SUM(heure.h_duree_mission) as total_heure'))
            ->join('ensemble', 'ensemble.id', '=', 'heure.fk_id_ensemble')
            ->join('projet', 'projet.id', '=', 'ensemble.fk_id_projet')
            ->join('etat', 'heure.fk_id_etat', '=', 'etat.id')
            ->where('heure.fk_id_etat', '=', '1')
            ->where('projet.id', '=', $id_projet)
            ->get();

        $total_commandes_realisees = DB::table('commande')
            ->select(DB::raw('SUM(commande.c_prix) as total_prix'))
            ->join('ensemble', 'ensemble.id', '=', 'commande.fk_id_ensemble')
            ->join('projet', 'projet.id', '=', 'ensemble.fk_id_projet')
            ->join('etat', 'commande.fk_id_etat', '=', 'etat.id')
            ->where('commande.fk_id_etat', '=', '1')
            ->where('projet.id', '=', $id_projet)
            ->get();

        $total_heures_previsionnelles = DB::table('budget_heure_ressource')
            ->select(DB::raw('SUM(budget_heure_ressource.value) as total_heure'))
            ->join('ensemble', 'ensemble.id', '=', 'budget_heure_ressource.fk_id_ensemble')
            ->join('projet', 'projet.id', '=', 'ensemble.fk_id_projet')
            ->join('etat', 'budget_heure_ressource.fk_id_etat', '=', 'etat.id')
            ->where('budget_heure_ressource.fk_id_etat', '=', '1')
            ->where('projet.id', '=', $id_projet)
            ->get();

        $total_commandes_previsionnelles = DB::table('ensemble')
            ->select(DB::raw('SUM(ensemble.en_budget_commande) as total_prix'))
            ->join('projet', 'projet.id', '=', 'ensemble.fk_id_projet')
            ->join('etat', 'ensemble.fk_id_etat', '=', 'etat.id')
            ->where('ensemble.fk_id_etat', '=', '1')
            ->where('projet.id', '=', $id_projet)
            ->get();



        $data = array(
                'heure_rel' => $total_heures_realisees[0]->total_heure,
                'comm_rel' => $total_commandes_realisees[0]->total_prix,
                'heure_prev' => $total_heures_previsionnelles[0]->total_heure,
                'comm_prev' => $total_commandes_previsionnelles[0]->total_prix
            );

        return view('dashboard/unique', compact('data'));
    }

    public function showBG(Request $request){
        return view('dashboard/general');
    }

    public function showMA(Request $request){
        return view('dashboard/master');
    }

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

    public function getSumUpBG(Request $request){
        $year = $request->get('year');
        $output = array();

        $nbProjetSolde = DB::table('projet')
            ->select(DB::RAW('COUNT(*) as result'))
            ->whereYear('projet.created_at', '=', $year)
            ->where('projet.fk_id_etat', '=', 5)
            ->get();

        $nbProjetEnCours = DB::table('projet')
            ->select(DB::RAW('COUNT(*) as result'))
            ->whereYear('projet.created_at', '=', $year)
            ->where('projet.fk_id_etat', '=', 4)
            ->get();

        $total_heures_previsionnelles = DB::table('budget_heure_ressource')
            ->select(DB::raw('SUM(budget_heure_ressource.value) as result'))
            ->join('ensemble', 'ensemble.id', '=', 'budget_heure_ressource.fk_id_ensemble')
            ->join('projet', 'projet.id', '=', 'ensemble.fk_id_projet')
            ->join('etat', 'budget_heure_ressource.fk_id_etat', '=', 'etat.id')
            ->where('budget_heure_ressource.fk_id_etat', '=', '1')
            ->whereYear('projet.created_at', '=', $year)
            ->get();

        $total_commandes_previsionnelles = DB::table('ensemble')
            ->select(DB::raw('SUM(ensemble.en_budget_commande) as result'))
            ->join('projet', 'projet.id', '=', 'ensemble.fk_id_projet')
            ->join('etat', 'ensemble.fk_id_etat', '=', 'etat.id')
            ->where('ensemble.fk_id_etat', '=', '1')
            ->whereYear('projet.created_at', '=', $year)
            ->get();

        $total_heures_realisees = DB::table('heure')
            ->select(DB::raw('SUM(heure.h_duree_mission) as result'))
            ->join('ensemble', 'ensemble.id', '=', 'heure.fk_id_ensemble')
            ->join('projet', 'projet.id', '=', 'ensemble.fk_id_projet')
            ->join('etat', 'heure.fk_id_etat', '=', 'etat.id')
            ->where('heure.fk_id_etat', '=', '1')
            ->whereYear('projet.created_at', '=', $year)
            ->get();

        $total_commandes_realisees = DB::table('commande')
            ->select(DB::raw('SUM(commande.c_prix) as result'))
            ->join('ensemble', 'ensemble.id', '=', 'commande.fk_id_ensemble')
            ->join('projet', 'projet.id', '=', 'ensemble.fk_id_projet')
            ->join('etat', 'commande.fk_id_etat', '=', 'etat.id')
            ->where('commande.fk_id_etat', '=', '1')
            ->whereYear('projet.created_at', '=', $year)
            ->get();

        $output = array(
            'nbProjetSolde' => $nbProjetSolde[0]->result,
            'nbProjetEnCours' => $nbProjetEnCours[0]->result,
            'heure_prev' => $total_heures_previsionnelles[0]->result,
            'comm_prev' => $total_commandes_previsionnelles[0]->result,
            'heure_reel' => $total_heures_realisees[0]->result,
            'comm_reel' => $total_commandes_realisees[0]->result
            );

        return response()->json($output);
    }

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
