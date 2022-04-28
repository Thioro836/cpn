<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Dossier,Patient};
class DossierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
        $patient=Patient::find($request->patient);
        return view('dossier',[
            'patient'=>$patient,
            'dossiers'=>$patient->dossierPatients
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Dossier::create([
        'date_derniere_regle'=>$request->date_derniere_regle,
        'dure_cycle'=>$request->dure_cycle,
        'hadicap_pysique'=>$request->handicap_physique,
        'groupe_sanguin'=>$request->groupe_sanguin,
        'taille_patiente'=>$request->taille_patiente,
        'dap'=>$request->dap
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
