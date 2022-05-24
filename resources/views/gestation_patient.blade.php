@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-8">
            @include('formulaires.gestation.table_gestation_patient')
        </div>
        <div class="col-md-4">
            @include($form)
        </div>
    </div>
@endsection

