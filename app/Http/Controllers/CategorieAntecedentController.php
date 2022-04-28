<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{CategorieAntecedent};

class CategorieAntecedentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('categorie_antecedent',[
            'listeCategories'=> CategorieAntecedent::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formulaires.antecedent.categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CategorieAntecedent::create([
            'nom_cat_antecedent' =>$request->nom
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
        $categorie = CategorieAntecedent::find($id);
        return view('formulaires.antecedent.categorie.edit', [
            'categorie' => $categorie
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
        $categorie = CategorieAntecedent::find($id);
        $categorie->update([
            'nom_cat_antecedent'=>$request->nom
        ]);
        return  redirect('categorie-antecedent');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CategorieAntecedent::find($id)->delete();
        return response(['status' =>true]);
    }
}
