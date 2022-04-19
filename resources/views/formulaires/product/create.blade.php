@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-6" >
        <div class="card-box">
            @if (\Session::has('message'))
                <h4 class="alert alert-success">{{ Session::get('message') }}</h4>

            @endif
            <form action="{{ route('produit.store') }}" method="POST">
            @csrf 
            <div class="form-group">
                <label for="nom">Nom du produit</label>
                <input type="text"name="nom" class="form-control" id="nom">
            </div>
            <button class="btn btn-success " type="submit">enregistrer</button>
            </form>
        </div>
    </div>
</div>
    
@endsection