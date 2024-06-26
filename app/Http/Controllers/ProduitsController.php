<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Produit};
use App\Http\Requests\ProduitRequest; 
class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('produits',[
        'listeproduits'=>Produit::get(),/*recuperer les info dans la bd*/
        'form' => 'formulaires.product.create',
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
    public function store(ProduitRequest $request)
    {
        Produit::create([
            'nom_produit' => $request->nom
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
        $produit=Produit::find($id);
        return view('produits',[
            'form' => 'formulaires.product.edit',
            'listeproduits'=>Produit::get(),
            'produit'=>$produit
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
        $produit=Produit::find($id);
        $produit->update([
            'nom_produit'=>$request->nom
        ]);
        return  redirect('produit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produit::find($id)->delete();
        return response(['status' =>true]);
    }
}
