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
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Vaccins</a></li>
                    <li class="breadcrumb-item active">Liste</li>
                </ol>
            </div>
            <h4 class="page-title">Gestion des vaccins</h4>
        </div>
    </div>
</div>
<a href="{{ route('vaccins.create') }}" class="btn btn-primary mt-3">
    Ajouter un nouveau vaccin
</a>
<div class="card-box mt-5">
    <h4 class="header-title">Liste des vaccins</h4>
    <p class="sub-header">
        For basic styling—light padding and only horizontal dividers—add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.
    </p>

    <div class="table-responsive">
        <table class="table mb-0">
            <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Periodicité</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
               @foreach ( $vaccins as $key => $vaccin )
               <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $vaccin->nom_vaccin }}</td>
                <td>{{ $vaccin->periodicite }}</td>
                <td class="text-right">
                    <a href="{{ route('vaccins.edit',$vaccin->id_vaccin) }}" class="btn btn-primary mt-3">
                        Modifier
                    </a>
                    <a href="{{ route('vaccins.destroy', $vaccin->id_vaccin) }}" class="btn btn-delete btn-danger mt-3">
                        supprimer
                    </a>
                </td>
            </tr>
               @endforeach
               
          
            </tbody>
        </table>
    </div>
</div>
@endsection