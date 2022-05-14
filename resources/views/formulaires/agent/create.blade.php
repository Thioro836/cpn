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
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Agent santé</a></li>
                    <li class="breadcrumb-item active">Creation</li>
                </ol>
            </div>
            <h4 class="page-title">enregistrement d'un nouveau agent de santé</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6" >
        <div class="card-box">
           @include('layouts.message')
            <form action="{{ route('agent-sante.store') }}" method="POST">
            @csrf 
            <div class="form-group">
                <label for="nom">Nom Agent de Santé</label>
                <input type="text"name="nom" class="form-control" id="nom" value="{{ old('nom') }}">
            </div>
            <div class="form-group">
                <label for="prenom">prénom Agent de Santé</label>
                <input type="text"name="prenom" class="form-control" id="prenom" value="{{ old('prenom') }}">
            </div>
            <div class="form-group">
                <label for="adresse">Adresse </label>
                <input type="text"name="adresse" class="form-control" id="adresse" value="{{ old('adresse') }}">
            </div>
            <div class="form-group">
                <label for="email">EMAIL</label>
                <input type="email"name="email" class="form-control" id="email" value="{{ old('email') }}">
            
            </div>
            <div class="form-group">
                <label for="telephone">Téléphone</label>
                <input type="text"name="telephone" class="form-control" id="telephone" value="{{ old('telephone') }}">
            </div>
            <div class="form-group">
                <label for="qualification">Qualification du prestataire</label>
                <input type="text"name="qualification" class="form-control" id="qualification" value="{{ old('qualification') }}">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text"name="password" class="form-control" id="password" value="{{ old('qualification') }}">
            </div>
            
            <button class="btn btn-success " type="submit">enregistrer</button>
            </form>
        </div>
    </div>
</div>
    
@endsection