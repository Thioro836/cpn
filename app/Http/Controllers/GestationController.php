<?php

namespace App\Http\Controllers;
use App\Http\Requests\GestationRequest;

use Illuminate\Http\Request;
use App\Models\{Gestation};


class GestationController extends Controller
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
        return view('gestation',[
            'form' => 'formulaires.gestation.create',
            'gestations'=> Gestation::get()
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
    public function store(GestationRequest $request)
    {
        Gestation::create([
            'nom_gestation' =>$request->nom
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
        $gestation=Gestation::find($id);
        return view('gestation',[
            'form' => 'formulaires.gestation.edit',
            'gestations' => Gestation::get(),
            'gestation'=>$gestation
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
        $gestation=Gestation::find($id);
        $gestation->update([
            'nom_gestation' =>$request->nom
        ]);

        return redirect('/gestations')->with('message',"enregistrement reussi");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gestation::find($id)->delete();
        return response(['status' =>true]);
    }
}
