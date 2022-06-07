<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Patient};
use App\Http\Requests\AgentSanteRequest;
use Propaganistas\LaravelPhone\PhoneNumber;

class PatientController extends Controller
{
    public function search($request, $patients)
    {
        if ($request->has('numero') AND $request->numero) {
            $patients = $patients->where('telephone_patient', 'LIKE', "%{$request->numero}%");
        }

        if ($request->has('nom') AND $request->nom) {
            $patients = $patients->where(function ($query) use ($request){
                $query->where('prenom_patient', 'LIKE', "{$request->nom}%")
                ->orWhere('nom_patient', 'LIKE', "{$request->nom}%");
            });
        }

        return $patients->orderBy('nom_patient')->paginate(10)->withQueryString();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('patient',[
            'listePatients'=> $this->search($request, new Patient())/*recuperer les info dans la bd*/
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formulaires.patient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge([
            'telephone_patient'=>PhoneNumber::make($request->telephone_patient, 'GN'),
            'telephone_mari'=>PhoneNumber::make($request->telephone_mari, 'GN'),
        ]);
        $patient=Patient::create(
            $request->all()
        );
        try {
            send_sms($request->telephone_patient, 'Bienvenue au CS Kaporo Fondis');
            return back()->with('message', "enregistrement reussi");
        } catch (\Throwable $th) {
            $patient->delete();
            return back()->with('message',"Aucune connexion internet, impossible d'ajouter la patiente");
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
        return view('formulaires.patient.details', [
            'patient' => Patient::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::find($id); //recuperer l'id de la ligne
       return view('formulaires.patient.edit',[
           'patient'=>$patient //la clé devient la variable qui stocke l'id dans le fichier blade au niveau du bouton
       ]);
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
        $patient = Patient::find($id);
        $patient->update(
            $request->all()
        );
        return  redirect('patients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Patient::find($id)->delete();
        return response(['status' =>true]);
    }
}
