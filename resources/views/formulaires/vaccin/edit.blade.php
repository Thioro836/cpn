@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card-box">
                @if (\Session::has('message'))
                <h4 class="alert alert-success">{{ Session::get('message') }}</h4>
            @endif
                <form action="{{ route('vaccins.update',$vaccin->id_vaccin) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nom">Nom du vaccin</label>
                        <input type="text" name="nom" class="form-control" id=nom value="{{ $vaccin->nom_vaccin}}">
                        <label for="periodicite">Périodicité</label>
                        <input type="text" name="periodicite" class="form-control" id=periodicite value='{{ $vaccin->periodicite }}'>
                    </div>
                    <button class="btn btn-success " type="submit">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
@endsection