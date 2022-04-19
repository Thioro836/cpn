@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-6" >
        <div class="card-box">
            @if (\Session::has('message'))
                <h4 class="alert alert-success">{{ Session::get('message') }}</h4>
            
            @endif
            <form action="{{ route('agent-sante.store') }}" method="POST">
            @csrf 
            <div class="form-group">
                <label for="nom">Nom Agent de Santé</label>
                <input type="text"name="nom" class="form-control" id="nom">
            </div>
            <div class="form-group">
                <label for="prenom">prénom Agent de Santé</label>
                <input type="text"name="prénom" class="form-control" id="prenom">
            </div>
            <div class="form-group">
                <label for="adresse">Adresse </label>
                <input type="text"name="adresse" class="form-control" id="adresse">
            </div>
            <div class="form-group">
                <label for="email">EMAIL</label>
                <input type="email"name="email" class="form-control" id="email">
            
            </div>
            <div class="form-group">
                <label for="telephone">Téléphone</label>
                <input type="text"name="telephone" class="form-control" id="telephone">
            </div>
            <div class="form-group">
                <label for="qualification">Qualification du prestataire</label>
                <input type="text"name="qualification" class="form-control" id="qualification">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text"name="password" class="form-control" id="password">
            </div>
            
            <button class="btn btn-success " type="submit">enregistrer</button>
            </form>
        </div>
    </div>
</div>
    
@endsection