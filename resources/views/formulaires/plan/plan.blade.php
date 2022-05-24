<div class="card">
    <div class="card-header">
        <h2>PLAN D'ACOUCHEMENT</h2>
    </div>
    <div class="card-body">
        @if($dossier->planAccouchement()->get())
            <div class="row">
                <div class="col-md-6">
                    <h4>Lieu:
                        {{ $dossier->planAccouchement()->first()->getAttribute('lieu_accouchement') }}
                    </h4>
                </div>
                <div class="col-md-6">
                    <h4>Moyen de transport:
                        {{ $dossier->planAccouchement()->first()->getAttribute('moyens_transport') }}
                    </h4>
                </div>
                <div class="col-md-6">
                    <h4>Personne responsable:
                        {{ $dossier->planAccouchement()->first()->getAttribute('personne_responsable') }}
                    </h4>
                </div>
                <div class="col-md-6">
                    <h4>Accompagnant:
                        {{ $dossier->planAccouchement()->first()->getAttribute('accompagant') }}
                    </h4>
                </div>
            </div>
        @endif
    </div>
</div>
