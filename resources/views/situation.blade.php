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
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Situation</a></li>
                    <li class="breadcrumb-item active">Liste </li>
                </ol>
            </div>
            <h4 class="page-title  font-weight-bold">Situation des deux derniers nés-vivants </h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="card-box">
            @include('formulaires.situation.table')
        </div>
    </div>
    <div class="col-md-4">
        @include($form)
    </div>
</div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('select[name=vivant]').change(function() {
                if($(this).val() == "1") {
                    $(".cause_deces").hide();
                } else {
                    $(".cause_deces").show();
                }
            });

            var vivant = $('select[name=vivant] option:selected').val();

            if(vivant == "1") {
                $(".cause_deces").hide();
            } else {
                $(".cause_deces").show();
            }
        });
    </script>
@endsection
