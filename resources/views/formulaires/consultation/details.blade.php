<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-start mb-3">
            <div class="w-100 ml-2">
                <h4 class="mt-0 mb-1">{{$consultation->dossierPatient->patient->nomComplet() }}</h4>
                <p class="text-muted">{{$consultation->dossierPatient->patient->profession_patient }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <label for="">Date consultation: {{ dateFormat($consultation->date_consultation) }}</label>
            </div>
            <div class="col-md-4">
                <label for="">Age gestationel: {{ $consultation->age_gestationnel }} mois</label>
            </div>
            <div class="col-md-4">
                <label for="">Poids: {{ $consultation->poids }} Kg</label>
            </div>
            <div class="col-md-4">
                <label for="">Hauteur utérine: {{ $consultation->haut_uterine }} cm</label>
            </div>
            <div class="col-md-4">
                <label for="">Tension Arterielle: {{ $consultation->tension_arterielle }}</label>
            </div>
            <div class="col-md-4">
                <label for=""></label>
            </div>
        </div>
        <hr>

        <div class="row">
            @foreach (page_1() as $name => $question)
                <div class="col-md-6">
                    <div class="checkbox checkbox-success form-check-inline ml-1 mb-2">
                        <input disabled {{ $consultation->getAttribute($name) ? "checked":"" }} name="{{ $name }}" type="checkbox" id="{{ $name }}" >
                        <label for="{{ $name }}"> {{ $question }} </label>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row">
            @foreach (page_2() as $name => $question )
                <div class="col-md-6">
                    <div class="checkbox checkbox-success form-check-inline ml-1 mb-2">
                        <input disabled {{ $consultation->getAttribute($name) ? "checked":"" }} name="{{ $name }}" type="checkbox" id="{{ $name }}" >
                        <label for="{{ $name }}"> {{ $question }} </label>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row">
            @foreach (page_3() as $name => $question )
                @continue($consultation->dossierPatient->age_gestationnel<8 AND in_array($name, ['position_transverse','siege','gemellaire']))
                <div class="col-md-6">
                    <div class="checkbox checkbox-success form-check-inline ml-1 mb-2">
                        <input disabled {{ $consultation->getAttribute($name) ? "checked":"" }} name="{{ $name }}" type="checkbox" id="{{ $name }}" >
                        <label for="{{ $name }}"> {!! $question !!}</label> </label>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
