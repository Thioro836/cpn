@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card-box">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card m-1 shadow-none border">
                            <div class="p-2">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="avatar-sm">
                                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                                <i class="mdi mdi-folder-zip font-18"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col pl-0">
                                        <a href="javascript:void(0);" class="text-muted font-weight-bold">admin-dashboard.zip</a>
                                        <p class="mb-0 font-13">45.1 MB</p>
                                    </div>
                                </div> <!-- end row -->
                            </div> <!-- end .p-2-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            @include('formulaires.dossier.create')
        </div>
    </div>
@endsection