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
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Patient</a></li>
                    <li class="breadcrumb-item active">Liste</li>
                </ol>
            </div>
            <h4 class="page-title">Gestion des patients</h4>
        </div>
    </div>
</div>
<a href="{{ route('patients.create') }}" class="btn btn-primary mt-3">
    Ajouter une patiente
</a>
<div class="card-box mt-2">
    <h4 class="header-title">Liste des patientes</h4>
    <p class="sub-header">
        For basic styling—light padding and only horizontal dividers—add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.
    </p>

    <div class="table-responsive">
        <table class="table mb-0">
            <thead>
            <tr>
               <th>#</th>
               <th>Nom</th>
               <th>Prénom</th>
               <th>Adresse</th>
               <th>Telephone</th>
               <th class="text-right">Actions</th>

            </tr>
            </thead>
            <tbody>
                @foreach ( $listePatients as $key=> $patient )
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $patient->nom_patient }}</td>
                    <td>{{ $patient->prenom_patient }}</td>
                    <td>{{ $patient->adresse_patient }}</td>
                    <td>{{ $patient->telephone_patient }}</td>
                    <td class="text-right">
                        <a href="{{ route('dossiers.index', ['patient'=> $patient->id_patient]) }}"  class="btn btn-success">
                            Dossiers
                            </a>
                        <a href="{{ route('patients.edit', $patient->id_patient) }}" class="btn btn-info">
                            Modifier
                        </a>
                        <a href="{{ route('patients.destroy', $patient->id_patient) }}" class="btn btn-danger btn-delete">
                          Supprimer
                        </a>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
