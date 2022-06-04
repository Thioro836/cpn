<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{DossierPatient,Patient};
use App\Http\Requests\DossierRequest;

use Carbon\Carbon;
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
            'dossiers'=>$patient->dossierPatients()->orderBy('date_enregistrement' ,'desc')->get()
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
    public function store(DossierRequest $request)
    {
        $accouchement = $this->dateAccouchement($request->date_derniere_regle, $request->dure_cycle);
        $num = $this->genererNumeroDossier();
       $dossier=DossierPatient::create([
        'date_derniere_regle'=>$request->date_derniere_regle,
        'dure_cycle'=>$request->dure_cycle,
        'date_enregistrement'=>now(),
        'hadicap_pysique'=>($request->handicap_physique == 'oui'),
        'groupe_sanguin'=>$request->groupe_sanguin,
        'taille_patiente'=>$request->taille_patiente,
        'dap'=>$request->dap,
         'id_patient'=>$request->patient,
         'numero_dossier'=>$num,
         'date_accouchement'=>$accouchement
        ]);
        try {
            send_sms($dossier->patient->telephone_patient, "Vote numéro de dossier est $num");
            return back()->with('message',"enregistrement reussi");
        } catch (\GuzzleHttp\Exception\ConnectException $th) {
            $dossier->delete();
            return back()->with('message',"Aucune connexion internet, impossible d'enregistrer le dossier");
        }
        
        
    }
    function genererNumeroDossier(){
        $liste ='0123456789ABCD';
        $resultat = "";
        for($i=1;$i<=4;$i++){
            $resultat .=substr($liste,(rand()%(strlen($liste))),1);
        }
        return $resultat;
    }
    function dateAccouchement($date_derniere_regle, $dure_cycle){
        $tableau = explode("-",$date_derniere_regle);
        $jour = $tableau[2];
        $date = Carbon::parse($date_derniere_regle)->add(9,'month')->format('Y-m-d');
        $date = explode("-",$date);
        $date[2]='01';
        $date = Carbon::parse(collect($date)->join('-'))->format('Y-m-d');
        return $date;
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
