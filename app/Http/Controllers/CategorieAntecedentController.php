<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{CategorieAntecedent};
use App\Http\Requests\CategorieAntecedentRequest;

class CategorieAntecedentController extends Controller
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
        return view('categorie_antecedent',[
            'listeCategories'=> CategorieAntecedent::get(),
            'form' => 'formulaires.antecedent.categorie.create',
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
    public function store(CategorieAntecedentRequest $request)
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
        return view('categorie_antecedent', [
            'form' => 'formulaires.antecedent.categorie.edit',
            'listeCategories'=> CategorieAntecedent::get(),
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
