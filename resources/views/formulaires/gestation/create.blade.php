@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card-box">
            @if (\Session::has('message'))
            <h4 class="alert alert-success">{{ Session::get('message') }}</h4>
        @endif
            <form action="{{ route('gestations.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nom">Nom de la gestation</label>
                    <input type="text" name="nom" class="form-control" id=nom>
                </div>
                <button class="btn btn-success " type="submit">Enregistrer</button>
            </form>
        </div>
    </div>
</div>
@endsection