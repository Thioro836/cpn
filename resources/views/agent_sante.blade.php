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
                    <li class="breadcrumb-item active">Liste</li>
                </ol>
            </div>
            <h4 class="page-title text-center font-weight-bold">Liste des agents de santé</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-9">
        <div class="card-box">
            @include('formulaires.agent.table')
        </div>
    </div>
    <div class="col-md-3">
        @include($form)
    </div>
</div>
@endsection
