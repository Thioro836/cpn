<div class="card">
    <div class="card-header">
        ANTECEDENTS <b>{{ $categorie->nom_cat_antecedent }}</b>
    </div>
    <div class="card-body">
        @php
            $antecedents = $dossier->antecedents()->whereIn('antecedent.id_antecedent', function ($query) use ($categorie){
                $query->from('antecedent')->where('id_categorie_antecedent', $categorie->id_categorie_antecedent)
                ->select('id_antecedent')->get();
            })->get();
        @endphp
        <div class="row">
            @foreach ($antecedents as $antecedent)
                <div class="col-md-12">
                    <h4>{{ $antecedent->nom }}: {{ $antecedent->pivot->valeur_antecedent }}</h4>
                </div>
            @endforeach
        </div>

    </div>
</div>
