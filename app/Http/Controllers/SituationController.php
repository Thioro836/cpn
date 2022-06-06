<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Situation,DossierPatient,CategorieSituation};

class SituationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request )
    {
        $dossier=DossierPatient::find($request->dossier);
        return view('situation',[
            'dossier'=>$dossier,
            'form' => 'formulaires.situation.create',
            'situations'=> Situation::get(),
            'categories'=>CategorieSituation::get()
        ]);
        
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
        Situation::create([
            'numero' => $request->numero,
            'sexe_enfant' => $request->sexe_enfant,
		    'vivant'=> $request->vivant,
		    'age_enfant'=> $request->age_enfant,
		    'cause_deces'=> $request->cause_deces,
            'id_dossier'=> $request->dossier,
            'id_categorie_situation'=>$request->categories
        ]);
        return back()->with('message',"enregistrement reussi");
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
