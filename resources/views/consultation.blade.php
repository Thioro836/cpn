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
                    <li class="breadcrumb-item active">{{ $dossier->numero_dossier }}</li>
                </ol>
            </div>
            <h4 class="page-title text-center font-weight-bold">Liste des consultations  {{ $dossier->numero_dossier }}</h4>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-md-12">
        <div class="card-box">
            <a href="{{ route('consultations.create',['dossier'=>$dossier->id_dossier]) }}" class="btn btn-primary mt-3 mb-2 ">
                Nouvelle consultation
            </a>

            <div class="row">
                <table class="table mb-0">
                    <thead>
                        <tr>
                           <th>#</th>
                           <th>Date consultation</th>
                           <th class="text-right">Age gestationel</th>
                           <th class="text-right">Poids</th>
                           <th class="text-right">Hauteur utérine</th>
                           <th class="text-right">Tension Arterielle</th>
                           <th class="text-right">Actions</th>

                        </tr>
                        </thead>
                        <tbody>
                            @foreach ( $consultations as $key=> $consultation )
                            <tr>
                                <th scope="row">{{ $key+1 }}</th>
                                <td>{{ dateFormat($consultation->date_consultation) }}</td>
                                <td class="text-right">{{ $consultation->age_gestationnel }} mois</td>
                                <td class="text-right">{{ $consultation->poids }} Kg</td>
                                <td class="text-right">{{ $consultation->haut_uterine}} cm</td>
                                <td class="text-right">{{ $consultation->tension_arterielle}}</td>
                                <td class="text-right">

                                    <a href="{{ route('consultations.edit', $consultation->id_consultation) }} " class="btn btn-info btn-sm btn-block">
                                        Modifier
                                    </a>
                                    @if ($consultations->count() == $key+1 and \Carbon\Carbon::parse($consultation->date_consultation)->diffInDays(now())<=1)
                                    <a href="{{ route('consultations.destroy', $consultation->id_consultation) }} " class="btn btn-danger btn-delete btn-sm btn-block">
                                        Supprimer
                                      </a>
                                    @endif
                                    <a href="{{ route('produit-consultation.index',['consultation'=>$consultation->id_consultation]) }}" class="btn btn-primary btn-sm btn-block">
                                        Produits delivrés
                                       </a>

                            </tr>
                            @endforeach

                </table>
            </div>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-8">
        <div class="row">
            @foreach ($categories as $categorie)
                <div class="col-md-6">
                    @include('formulaires.antecedentPatient.antecedant', ['categorie' => $categorie])
                </div>
            @endforeach
        </div>
    </div>
    <div class="col-md-4">
        @include('formulaires.antecedentPatient.create')
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-8">
        @include('formulaires.plan.plan')
    </div>
    <div class="col-md-4">
        @if ($dossier->planAccouchement()->count())
            @include('formulaires.plan.edit')
        @else
            @include('formulaires.plan.create')
        @endif

    </div>
</div>
@endsection
@section('script')

    <script>
        function getAntecedants(id) {
            $.get('/dossier-antecedents/'+id, function(data){
                $(".champ").empty();
                for (var i=0;i<data.length;i++){
                    var clone=$("#model .form-group").clone();
                    clone.find("label").text(data[i].nom+":");
                    clone.find("input").attr('name', 'antecedents['+data[i].id_antecedent+']');
                    $(".champ").append(clone);
                }
            });
        }
        $(document).ready(function() {

            $("select[name=categorie]").change(function() {
                getAntecedants(this.value);
            });

            var id=$("select[name=categorie] option:selected").val();
            getAntecedants(id);
        });
    </script>
@endsection
