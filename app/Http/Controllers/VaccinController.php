<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Vaccin};
use App\Http\Requests\VaccinRequest;
class VaccinController extends Controller
{

    function __construct(){
        $this->middleware(function ($request, $next) {
            if(!auth()->user()->isAdmin()) return redirect('/');
            return $next($request);
        });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vaccin',[
            'vaccins'=> Vaccin::get(),
            'form' => 'formulaires.vaccin.create',

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
    public function store(VaccinRequest $request)
    {
        Vaccin::create([
            'nom_vaccin' =>$request->nom,
            'periodicite' =>$request->periodicite
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
        $vaccin=Vaccin::find($id);
        return view('vaccin',[
            'vaccin'=>$vaccin,
            'vaccins'=> Vaccin::get(),
            'form' => 'formulaires.vaccin.edit'
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
        $vaccin=Vaccin::find($id);
        $vaccin->update([
            'nom_vaccin' =>$request->nom,
            'periodicite' =>$request->periodicite
        ]);
        return redirect('vaccins');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vaccin::find($id)->delete();
        return response(['status' =>true]);
    }
}
