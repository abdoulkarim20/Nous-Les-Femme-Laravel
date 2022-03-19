<?php

namespace App\Http\Controllers;

use App\Models\Domaine;
use App\Models\Entreprise;
use App\Models\Quartier;
use App\Models\RegimeJuridique;
use App\Models\Repondant;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entreprises = Entreprise::all();
        return view('entreprise.list', compact('entreprises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $quartiers = Quartier::all();
        $repondants = Repondant::all();
        $domaines = Domaine::all();
        $regime_juridiques = RegimeJuridique::all();
        return view('entreprise.add', compact('quartiers', 'repondants', 'domaines', 'regime_juridiques'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Entreprise $entreprise)
    {
        $entreprise->nomEntreprise = $request->nomEntreprise;
        $entreprise->conrdonneeGPS = $request->conrdonneeGPS;
        $entreprise->siegeSociale = $request->siegeSociale;
        $entreprise->dateCreation = $request->dateCreation;
        $entreprise->registreCommerce = $request->registreCommerce;
        $entreprise->NINEA = $request->NINEA;
        $entreprise->pageWeb = $request->pageWeb;
        $entreprise->nombreEmployer = $request->nombreEmployer;
        $entreprise->contratFormel = $request->contratFormel;
        $entreprise->organigrammeRespecter = $request->organigrammeRespecter;
        $entreprise->dispositifFormation = $request->dispositifFormation;
        $entreprise->questionSociale = $request->questionSociale;
        $entreprise->quartier_id = $request->quartier_id;
        $entreprise->domaine_id = $request->domaine_id;
        $entreprise->repondant_id = $request->repondant_id;
        $entreprise->regime_juridique_id = $request->regime_juridique_id;
        $entreprise->save();
        if ($entreprise) {
            return redirect('entreprises')->with(['status' => "Reponse envoyer"]);
        } else {
            return view('entreprise.add', ['status' => "Echec d'envoi"]);
        }
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
    public function destroy(Entreprise $entreprise)
    {
        $entreprise->delete();
        return redirect('entreprises')->with(['status' => "Entreprise supprimer avec succes"]);
    }
}
