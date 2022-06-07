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
            <h4 class="page-title font-weight-bold">Liste des agents de santé</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="card-box">
            @include('formulaires.agent.table')
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

            $('.btn-details').on('click', function(e) {
                e.preventDefault();

                var url = $(this).attr('data-href');

                $.confirm({
                    type: 'green',
                    columnClass: 'col-md-6',
                    content: "url:"+url,
                    title: "Information sur l'agent",
                    theme: 'material',
                    buttons: {
                        OK: function(){
                            return true;
                        }
                    }
                });
            });
        });
    </script>
@endsection
