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
            <h3 class="page-title text-center font-weight-bold">Liste  des patientes</h3>
        </div>
    </div>
</div>

<div class="card-box mt-2">

    <a href="{{ route('patients.create') }}" class="btn btn-primary mb-2 float-right">
        Ajouter une patiente
    </a>

    @include('formulaires.patient.header')

    <div class="table-responsive table-bordered table-sm">
        <table class="table mb-0">
            <thead>
            <tr>
               <th>N°</th>
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
                        <a href="{{ route('dossiers.index', ['patient'=> $patient->id_patient]) }}"  class="btn btn-success btn-xs ">
                            Dossiers
                            </a>
                        <a href="{{ route('patients.edit', $patient->id_patient) }}" class="btn btn-info btn-xs ">
                            Modifier
                        </a>
                        <a href="{{ route('patients.destroy', $patient->id_patient) }}" class="btn btn-danger btn-delete btn-xs ">
                          Supprimer
                        </a>
                        <a href="javascript: void(0);" data-href="{{ route('patients.show', $patient->id_patient) }}" class="btn btn-secondary btn-xs btn-details">
                            Details
                        </a>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {

            $('.btn-details').on('click', function(e) {
                e.preventDefault();

                var url = $(this).attr('data-href');

                $.confirm({
                    type: 'green',
                    columnClass: 'col-md-6',
                    content: "url:"+url,
                    title: "Informations sur la patiente",
                    theme: 'material',
                    buttons: {
                        OK: function(){
                            return true;
                        }
                    }
                });
            });
        });
    </script>
@endsection
