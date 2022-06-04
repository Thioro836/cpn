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
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Catégorie Antécédent</a></li>
                    <li class="breadcrumb-item active">Liste</li>
                </ol>
            </div>
            <h3 class="page-title  font-weight-bold">Liste des catégories d'antécédents </h3>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="card-box">
            @include('formulaires.antecedent.categorie.table')
        </div>
    </div>
    <div class="col-md-4">
        @include($form)
    </div>
</div>
@endsection