<?php

namespace App\Http\Controllers;
use App\Models\{Consultation,DossierPatient,CategorieAntecedent};
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $dossier=DossierPatient::find($request->dossier);

        return view ('consultation',[
            'dossier'=>$dossier,
            'consultations'=>$dossier->consultations()->get(),
            'categories' =>CategorieAntecedent::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $dossier=DossierPatient::find($request->dossier);
        return view('formulaires.consultation.create',[
            'dossier'=>$dossier,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Consultation::create([
            'date_consultation'=>now(),
            'age_gestationnel' => $request->age_gestationnel,
            'mouvement_percus' => $request->has('mouvement_percus'),
            'poids' => $request->poids,
            'haut_uterine' => $request->haut_uterine,
            'bruit_coeur' => $request->has('bruit_coeur'),
            'conseling' => $request->has('conseling'),
            'tension_arterielle' => $request->tension_arterielle,
            'metorrhagies' => $request->has('metorrhagies'),
            'anemie_clinique' => $request->has('anemie_clinique'),
            'odemes' => $request->has('odemes'),
            'infection_urinaire' => $request->has('infection_urinaire'),
            'perte_fetide' => $request->has('perte_fetide'),
            'suspicion_bassin_retreci' => $request->has('suspicion_bassin_retreci'),
            'ca_uc_f_vada' => $request->has('ca_uc_f_vada'),
            'parite' => $request->has('parite'),
            'primapare' => $request->has('primapare'),
            'taille' => $request->has('taille'),
            'mn_dn_ed' => $request->has('mn_dn_ed'),
            'bw' => $request->has('bw'),
            'srv' => $request->has('srv'),
            'thb' => $request->has('thb'),
            'position_transverse' => $request->has('position_transverse'),
            'siege' => $request->has('siege'),
            'gemellaire' => $request->has('gemellaire'),
            'id_dossier'=> $request->dossier,
        ]);
        DossierPatient::find($request->dossier)->update([
            'age_gestationnel' => $request->age_gestationnel
        ]);
        return redirect("/consultations?dossier={$request->dossier}");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('formulaires.consultation.details', [
            'consultation' => Consultation::find($id)
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
        $consultation= Consultation::find($id); //recuperer l'id de la ligne
        return view('formulaires.consultation.edit',[
            'consultation'=>$consultation //la clé devient la variable qui stocke l'id dans le fichier blade au niveau du bouton
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
        $consultation= Consultation::find($id);

        $consultation->update([
            'age_gestationnel' => $request->age_gestationnel,
            'mouvement_percus' => $request->has('mouvement_percus'),
            'poids' => $request->poids,
            'haut_uterine' => $request->haut_uterine,
            'bruit_coeur' => $request->has('bruit_coeur'),
            'conseling' => $request->has('conseling'),
            'tension_arterielle' => $request->tension_arterielle,
            'metorrhagies' => $request->has('metorrhagies'),
            'anemie_clinique' => $request->has('anemie_clinique'),
            'odemes' => $request->has('odemes'),
            'infection_urinaire' => $request->has('infection_urinaire'),
            'perte_fetide' => $request->has('perte_fetide'),
            'suspicion_bassin_retreci' => $request->has('suspicion_bassin_retreci'),
            'ca_uc_f_vada' => $request->has('ca_uc_f_vada'),
            'parite' => $request->has('parite'),
            'primapare' => $request->has('primapare'),
            'taille' => $request->has('taille'),
            'mn_dn_ed' => $request->has('mn_dn_ed'),
            'bw' => $request->has('bw'),
            'srv' => $request->has('srv'),
            'thb' => $request->has('thb'),
            'position_transverse' => $request->has('position_transverse'),
            'siege' => $request->has('siege'),
            'gemellaire' => $request->has('gemellaire'),
        ]);

        return redirect("/consultations?dossier={$consultation->dossierPatient->id_dossier}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Consultation::find($id)->delete();
        return response(['status' =>true]);
    }
}
