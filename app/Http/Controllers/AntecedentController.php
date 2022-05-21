<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Antecedent,CategorieAntecedent};

class AntecedentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('antecedent', [
           'form' => 'formulaires.antecedent.create',
           'listesAntecedents' => Antecedent::get(),
           'categories' => CategorieAntecedent::get()
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
        Antecedent::create([
            'nom' => $request->nom,
            'id_categorie_antecedent' => $request->categorie
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
        $antecedent=Antecedent::find($id);
        return view('antecedent', [
            'form' => 'formulaires.antecedent.edit',
            'listesAntecedents' => Antecedent::get(),
            'categories' => CategorieAntecedent::get(),
            'antecedent' =>$antecedent
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
       Antecedent::find($id)->update([
        'nom' => $request->nom,
        'id_categorie_antecedent' => $request->categorie
       ]);
       return redirect('/antecedents')->with('message',"enregistrement reussi");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Antecedent::find($id)->delete();
        return response(['status' =>true]);
    }
}
