<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ensemble;
use App\BudgetEnsemble;
use App\Projet;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EnsembleController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {

            // Get id_projet
            $id_projet = $request->input('id_projet');

            // Init a new Ensemble
            $ens = new Ensemble();

            // Add var to the object
            $ens->en_libelle = $request->input('en_libelle');
            $ens->en_budget_commande = $request->input('en_budget_commande');
            $ens->en_commentaire = $request->input('en_commentaire');
            $ens->fk_id_projet = $id_projet;

            $ens->save();

            $id_ensemble = $ens->id;

            // Save BudgetEnsembleHeure

            // Loop for each Ressource, save each time
            for ($i=0; $i < 6; $i++) { 
                // Init a new BudgetEnsemble
                $budget_ens = new BudgetEnsemble();

                $budget_ens->fk_id_ressource = $request->input("be_attr_".$i);
                $budget_ens->fk_id_ensemble = $id_ensemble;
                $budget_ens->value = $request->input("be_val_".$i);
                $budget_ens->save();
            }

            return response()->json('Ajout effectué !');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}