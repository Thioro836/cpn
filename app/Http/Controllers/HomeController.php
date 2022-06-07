<?php

namespace App\Http\Controllers;
use App\Models\{Patient, RendezVou};

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index( Request $request)
    {
        return view('index',[
            'rendez_vous' => RendezVou::where('date_rendez_vous', '>=', now())->get()
        ]);
    }
}
