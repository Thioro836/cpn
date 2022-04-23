@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-6" >
        <div class="card-box">
            @if (\Session::has('message'))
                <h4 class="alert alert-success">{{ Session::get('message') }}</h4>
            
            @endif
            <form action="{{ route('patients.store') }}" method="POST">
            @csrf 
            <div class="form-group">
                <label for="nom_patient">Nom patiente</label>
                <input type="text"name="nom_patient" class="form-control" id="nom_patient">
            </div>
            <div class="form-group">
                <label for="prenom_patient">prénom patiente</label>
                <input type="text"name="prenom_patient" class="form-control" id="prenom_patient">
            </div>
            <div class="form-group">
                <label for="age_patient">Age patiente </label>
                <input type="text"name="age_patient" class="form-control" id="age_patient">
            </div>
            <div class="form-group">
                <label for="adresse_patient">Adresse patiente </label>
                <input type="text"name="adresse_patient" class="form-control" id="adresse_patient">
            </div>
            <div class="form-group">
                <label for="secteur_patient">Secteur patiente </label>
                <input type="text"name="secteur_patient" class="form-control" id="secteur_patient">
            </div>
            <div class="form-group">
                <label for="profession_patient">Profession patiente </label>
                <input type="text"name="profession_patient" class="form-control" id="profession_patient">
            </div>
            <div class="form-group">
                <label for="telephone_patient">Téléphone patiente</label>
                <input type="text"name="telephone_patient" class="form-control" id="telephone_patient">
            </div>
            <h4>Identification du mari</h4>
            <div class="form-group">
                <label for="nom_mari">Nom</label>
                <input type="text"name="nom_mari" class="form-control" id="nom_mari">
            </div>
            <div class="form-group">
                <label for="prenom_mari">prénom </label>
                <input type="text"name="prenom_mari" class="form-control" id="prenom_mari">
            </div>
            <div class="form-group">
                <label for="adresse_mari">Adresse </label>
                <input type="text"name="adresse_mari" class="form-control" id="adresse_mari">
            </div>
            <div class="form-group">
                <label for="secteur_mari">Secteur </label>
                <input type="text"name="secteur_mari" class="form-control" id="secteur_mari">
            </div>
            <div class="form-group">
                <label for="profession_mari">Profession </label>
                <input type="text"name="profession_mari" class="form-control" id="profession_mari">
            </div>
            <div class="form-group">
                <label for="telephone_mari">Téléphone </label>
                <input type="text"name="telephone_mari" class="form-control" id="telephone_mari">
            </div>
            
            <button class="btn btn-success " type="submit">enregistrer</button>
            </form>
        </div>
    </div>
</div>
    
@endsection