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
            <a href="{{ route('consultations.create',['dossier'=>$dossier->id_dossier]) }}" class="btn btn-primary mt-3 mb-2">
                Nouvelle consultation
            </a>
            <div class="row">
                <table class="table mb-0">
                    <thead>
                        <tr>
                           <th>#</th>
                           <th>Date consultation</th>
                           <th class="text-right">Age gestationel</th>
                           <th class="text-right">Poids</th>
                           <th class="text-right">Hauteur utérine</th>
                           <th class="text-right">Tension Arterielle</th>
                           <th class="text-right">Actions</th>

                        </tr>
                        </thead>
                        <tbody>
                            @foreach ( $consultations as $key=> $consultation )
                            <tr>
                                <th scope="row">{{ $key+1 }}</th>
                                <td>{{ $consultation->date_consultation }}</td>
                                <td class="text-right">{{ $consultation->age_gestationnel }} mois</td>
                                <td class="text-right">{{ $consultation->poids }} Kg</td>
                                <td class="text-right">{{ $consultation->haut_uterine}} cm</td>
                                <td class="text-right">{{ $consultation->tension_arterielle}}</td>
                                <td class="text-right">

                                    <a href="{{ route('consultations.edit', $consultation->id_consultation) }} " class="btn btn-info">
                                        Modifier
                                    </a>
                                    @if ($consultations->count() == $key+1 and \Carbon\Carbon::parse($consultation->date_consultation)->diffInDays(now())<=1)
                                    <a href="{{ route('consultations.destroy', $consultation->id_consultation) }} " class="btn btn-danger btn-delete">
                                        Supprimer
                                      </a>
                                    @endif

                            </tr>
                            @endforeach

                </table>
            </div>
        </div>
    </div>

</div>
@endsection
