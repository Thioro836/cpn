@extends('layouts.master')
@section('content')

<div class="row mt-2">
    <h2 class="header-title text-center">Informations personnelles de la patiente</h2>
    <div class="col-md-12 mt-4" >
        <div class="card-box">
           @include('layouts.message')
            <form action="{{ route('patients.store') }}" method="POST">
            @csrf 
            <h3 class="header-title">Identification de la patiente </h3>
            <div class="row">
                <div class="col-md-6">
                  
                    <div class="form-group">
                        <label for="nom_patient">Nom patiente</label>
                        <input type="text"name="nom_patient" class="form-control" id="nom_patient" value="{{ old('nom_patient') }}">
                    </div>
                    <div class="form-group">
                        <label for="prenom_patient">prénom patiente</label>
                        <input type="text"name="prenom_patient" class="form-control" id="prenom_patient" value="{{ old('prenom_patient') }}">
                    </div>
                    <div class="form-group">
                        <label for="age_patient">Age patiente </label>
                        <input type="text"name="age_patient" class="form-control" id="age_patient" value="{{ old('age_patient') }}">
                    </div>
                    <div class="form-group">
                        <label for="adresse_patient">Adresse patiente </label>
                        <input type="text"name="adresse_patient" class="form-control" id="adresse_patient" value="{{ old('adresse_patient') }}">
                    </div>
                    <div class="form-group">
                        <label for="secteur_patient">Secteur patiente </label>
                        <input type="text"name="secteur_patient" class="form-control" id="secteur_patient" value="{{ old('secteur_patient') }}">
                    </div>
                    <div class="form-group">
                        <label for="profession_patient">Profession patiente </label>
                        <input type="text"name="profession_patient" class="form-control" id="profession_patient" value="{{ old('profession_patient') }}">
                    </div>
                    <div class="form-group">
                        <label for="telephone_patient">Téléphone patiente</label>
                        <input type="text"name="telephone_patient" class="form-control" id="telephone_patient" value="{{ old('telephone_patient') }}">
                    </div>
                </div>
                    
                <div class="col-md-6">
                    <h3 class="header-title">Identification du mari</h3>
                    <div class="form-group">
                        <label for="nom_mari">Nom</label>
                        <input type="text"name="nom_mari" class="form-control" id="nom_mari" value="{{ old('nom_mari') }}">
                    </div>
                    <div class="form-group">
                        <label for="prenom_mari">prénom </label>
                        <input type="text"name="prenom_mari" class="form-control" id="prenom_mari" value="{{ old('prenom_mari') }}">
                    </div>
                    <div class="form-group">
                        <label for="adresse_mari">Adresse </label>
                        <input type="text"name="adresse_mari" class="form-control" id="adresse_mari" value="{{ old('adresse_mari') }}">
                    </div>
                    <div class="form-group">
                        <label for="secteur_mari">Secteur </label>
                        <input type="text"name="secteur_mari" class="form-control" id="secteur_mari" value="{{ old('secteur_mari') }}">
                    </div>
                    <div class="form-group">
                        <label for="profession_mari">Profession </label>
                        <input type="text"name="profession_mari" class="form-control" id="profession_mari" value="{{ old('profession_mari') }}">
                    </div>
                    <div class="form-group">
                        <label for="telephone_mari">Téléphone </label>
                        <input type="text"name="telephone_mari" class="form-control" id="telephone_mari" value="{{ old('telephone_mari') }}">
                    </div>
                </div>
                </div>
            <button class="btn btn-success " type="submit">Enregistrer</button>
            </form>
        </div>
    </div>
</div>
    
@endsection