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
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dossiers</a></li>
                    <li class="breadcrumb-item active">{{ $patient->prenom_patient }}</li>
                </ol>
            </div>
            <h4 class="page-title text-center font-weight-bold">Liste  des dossiers de {{ $patient->prenom_patient }} </h4>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-md-8">
            <div class="card-box">
                <div class="row">
                    @foreach ($dossiers as $dossier )
                        <div class="col-md-6 fiche">
                            <div class="card m-1 shadow-none border">
                                <div class="p-2">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-soft-primary text-primary rounded">
                                                    <i class="mdi mdi-folder-zip font-28"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col pl-0">
                                            <a href="{{ route('consultations.index', ['dossier'=> $dossier->id_dossier]) }}" class="text-muted font-weight-bold">
                                                Numero de dossier: {{ $dossier->numero_dossier }}
                                            </a>
                                            <p class="mb-0 font-13">
                                                Enregistrement:
                                                {{ dateFormat($dossier->date_enregistrement) }}
                                            </p>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a href="{{ route('gestation-patient.index',['dossier'=> $dossier->id_dossier]) }} " class="btn btn-primary btn-xs btn-block">Gestation antérieure</a>
                                                    <a href="{{ route('situation.index',['dossier'=> $dossier->id_dossier]) }} " class="btn btn-dark btn-xs btn-block">Situation des deux derniers nés</a>
                                                    <a href="{{ route('dossiers.destroy', $dossier->id_dossier) }} " class="btn btn-danger btn-delete btn-xs dossier btn-block">
                                                        Supprimer
                                                      </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end row -->
                                </div> <!-- end .p-2-->
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-4">
            @include('formulaires.dossier.create')
        </div>
    </div>
@endsection
