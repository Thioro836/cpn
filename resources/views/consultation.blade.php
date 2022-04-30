@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">
                        {{ config('app.name') }}
                    </a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Consultation</a></li>
                    <li class="breadcrumb-item active">{{ $dossier->numero_dossier }}</li>
                </ol>
            </div>
            <h4 class="page-title">Gestion du dossier {{ $dossier->numero_dossier }}</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <a href="{{ route('consultations.create',['dossier'=>$dossier->id_dossier]) }}" class="btn btn-primary mt-3">
                Nouvelle consultation
            </a>
            <div class="row">
                <table class="table mb-0">
                    <thead>
                        <tr>
                           <th>#</th>
                           <th>Date consultation</th>
                           <th>Age gestationel</th>
                           <th>Poids</th>
                           <th>Hauteur utérine</th>
                           <th>Tension Arterielle</th>
                           <th class="text-right">Actions</th>
                           
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ( $consultations as $key=> $consultation )
                            <tr>
                                <th scope="row">{{ $key+1 }}</th>
                                <td>{{ $consultation->date_consultation }}</td>
                                <td>{{ $consultation->age_gestationnel }}</td>
                                <td>{{ $consultation->poids }}</td>
                                <td>{{ $consultation->haut_uterine}}</td>
                                <td>{{ $consultation->tension_arterielle}}</td>
                                <td class="text-right">
                                    <a href=" "  class="btn btn-success">      
                                        Dossiers
                                        </a>
                                    <a href=" " class="btn btn-info">
                                        Modifier
                                    </a>
                                    <a href=" " class="btn btn-danger btn-delete">
                                      Supprimer
                                    </a>
                            </tr>
                            @endforeach

                </table>
            </div>
        </div>
    </div>
   
</div>
@endsection