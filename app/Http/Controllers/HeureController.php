<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Heure;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HeureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $heure = new Heure();

        $heure->h_duree_mission = $request->input('h_duree_mission');
        $heure->h_date_debut = $request->input('h_date_debut');
        $heure->h_date_fin = $request->input('h_date_fin');
        $heure->h_designation = $request->input('h_designation');
        $heure->fk_id_ressource = $request->input('fk_id_ressource');
        $heure->fk_id_ensemble = $request->input('fk_id_ensemble');

        $heure->save();

       return redirect('saisir-projet');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
