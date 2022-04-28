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
            <h4 class="page-title">Gestion des dossiers de {{ $patient->prenom_patient }} </h4>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-md-8">
            <div class="card-box">
                <div class="row">
                    @foreach ($dossiers as $dossier )
                        <div class="col-md-6">
                            <div class="card m-1 shadow-none border">
                                <div class="p-2">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-soft-primary text-primary rounded">
                                                    <i class="mdi mdi-folder-zip font-18"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col pl-0">
                                            <a href="{{ route('consultations.index', ['dossier'=> $dossier->id_dossier]) }}" class="text-muted font-weight-bold">
                                                {{ $dossier->numero_dossier }}
                                            </a>
                                            <p class="mb-0 font-13"> {{ $dossier->date_enregistrement }}</p>
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