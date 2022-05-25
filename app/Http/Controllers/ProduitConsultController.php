<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ConsultationProduit,Produit,Consultation};
class ProduitConsultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $consultation= Consultation::find($request->consultation);
      return view('produit_const_patient',[
            'form' =>'formulaires.product.produit_const_create',
            'consultation' =>$consultation,
            'produits'=> Produit::get(),
            'listeProduits' =>$consultation->produits()->get()

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
        foreach ($request->produits as $key => $value) {
            $consultation= ConsultationProduit::firstOrCreate([
                'id_produit' =>$key,
                'id_consultation' => $request->consultation
            ]);
            $consultation->update(['quantite'=>$value]);
        }
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
