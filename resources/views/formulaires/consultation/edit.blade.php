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
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Consultation</a></li>
                    <li class="breadcrumb-item active">Modification</li>
                </ol>
            </div>
            <h4 class="page-title text-center font-weight-bold">Modification d'une consultation</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-8">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title mb-3"> Formulaire de consultation</h4>

                <form method="post" action="{{ route('consultations.update',$consultation->id_consultation)}}">
                    @csrf
                    @method('PUT')
                    <div id="basicwizard">

                        <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
                            <li class="nav-item">
                                <a href="#basictab1" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2 active">
                                    <i class="mdi mdi-account-circle mr-1"></i>
                                    <span class="d-none d-sm-inline">Examen</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#basictab2" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                    <i class="mdi mdi-face-profile mr-1"></i>
                                    <span class="d-none d-sm-inline">Problèmes identifiés</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#basictab3" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                    <i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i>
                                    <span class="d-none d-sm-inline">Facteurs de risque</span>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content b-0 mb-0 pt-0">
                            <div class="tab-pane active" id="basictab1">
                                @include('formulaires.consultation.pages.edit.page_1')
                            </div>

                            <div class="tab-pane" id="basictab2">
                                @include('formulaires.consultation.pages.edit.page_2')
                            </div>

                            <div class="tab-pane" id="basictab3">
                               @include('formulaires.consultation.pages.edit.page_3')
                            </div>

                            <ul class="list-inline wizard mb-0">
                                <li class="previous list-inline-item disabled">
                                    <a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
                                </li>
                                <li class="next list-inline-item float-right">
                                    <a href="javascript: void(0);" class="btn btn-secondary">Next</a>
                                    <button class="btn btn-success" type="submit">Enregistrer</button>
                                </li>
                            </ul>

                        </div> <!-- tab-content -->
                    </div> <!-- end #basicwizard-->
                </form>

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->
    <div class="col-sm-4">
        <img src="{{ asset("assets/images/femme.jpg") }}" alt="image" class="img-fluid rounded">
    </div>
</div>
@endsection
