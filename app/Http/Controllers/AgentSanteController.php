<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{AgentSante};
use App\Http\Requests\AgentSanteRequest;
class AgentSanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agent_sante',[
            'form' => 'formulaires.agent.create',
            'listeAgent'=>AgentSante::get()/*recuperer les info dans la bd*/
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formulaires.agent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AgentSanteRequest $request)
    {
        AgentSante::create([
            'nom'  => $request->nom,
            'prenom'=> $request->prenom,
            'adresse'=> $request->adresse,
            'email'  => $request->email,
            'telephone' => $request->telephone,
            'qualification' => $request->qualification,
            'password'   => $request->password
        ]);
        return back()->with('message', "enregistrement reussi");

        
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
       $agent = AgentSante::find($id); //recuperer l'id de la ligne
       return view('agent_sante',[
        'form' => 'formulaires.agent.edit',
        'listeAgent'=>AgentSante::get(),
        'agent'=>$agent //la clé devient la variable qui stocke l'id dans le fichier blade au niveau du bouton
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
        $agent=AgentSante::find($id);
        $agent->update(
            $request->all()
        );
        return  redirect('agent-sante');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AgentSante::find($id)->delete();
        return response(['status' =>true]);
    }
}
