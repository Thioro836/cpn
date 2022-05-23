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
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Produits</a></li>
                    <li class="breadcrumb-item active">Liste</li>
                </ol>
            </div>
            <h4 class="page-title">Liste des produits</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="card-box">
            @include('formulaires.product.table')
        </div>
    </div>
    <div class="col-md-4">
        @include($form)
    </div>
</div>

     @endsection