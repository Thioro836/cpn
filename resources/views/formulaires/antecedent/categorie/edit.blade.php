@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-6" >
        <div class="card-box">
            @if (\Session::has('message'))
                <h4 class="alert alert-success">{{ Session::get('message') }}</h4>

            @endif
            <form action="{{ route('categorie-antecedent.update', $categorie->id_categorie_antecedent) }}" method="POST">
            @csrf 
            @method('PUT')
            <div class="form-group">
                <label for="nom">Nom de la categorie</label>
                <input type="text"name="nom" class="form-control" id="nom" value="{{ $categorie->nom_cat_antecedent }}">
            </div>
            <button class="btn btn-success " type="submit">enregistrer</button>
            </form>
        </div>
    </div>
</div>
    
@endsection