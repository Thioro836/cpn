<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-start mb-3">
            <div class="w-100 ml-2">
                <h4 class="mt-0 mb-1">{{ $patient->nom_patient }} {{ $patient->prenom_patient }}</h4>
                <p class="text-muted">{{ $patient->profession_patient  }}</p>
            </div>
        </div>

        <h5 class="mb-3 mt-4 text-uppercase bg-light p-2">
            <i class="mdi mdi-account-circle me-1"></i> Informations Personnelle
        </h5>
        <div class="">

            <h4 class="font-13 text-muted text-uppercase mb-1">Adresse</h4>
            <p class="mb-3"> {{ $patient->adresse_patient }}</p>
            <h4 class="font-13 text-muted text-uppercase mb-1">Age</h4>
            <p class="mb-3"> {{ $patient->age_patient }}</p>

            <h4 class="font-13 text-muted text-uppercase mb-1">Secteur</h4>
            <p class="mb-3">{{ $patient->secteur_patient }}</p>

            <h4 class="font-13 text-muted text-uppercase mb-1">Telephone</h4>
            <p class="mb-3"> {{ $patient->telephone_patient }}</p>
            <h5 class="mb-3 mt-4 text-uppercase bg-light p-2">
                <i class="mdi mdi-account-circle me-1"></i> Informations de l'époux
            </h5>
            <h4 class="font-13 text-muted text-uppercase mb-1">Nom</h4>
            <p class="mb-3"> {{ $patient->nom_mari }}</p>
            <h4 class="font-13 text-muted text-uppercase mb-1">Prénom</h4>
            <p class="mb-3"> {{ $patient->prenom_mari }}</p>
            <h4 class="font-13 text-muted text-uppercase mb-1">Adresse</h4>
            <p class="mb-3"> {{ $patient->adresse_mari }}</p>
            <h4 class="font-13 text-muted text-uppercase mb-1">Secteur</h4>
            <p class="mb-3">{{ $patient->secteur_mari }}</p>
            <h4 class="font-13 text-muted text-uppercase mb-1">Profession</h4>
            <p class="mb-3"> {{ $patient->profession_mari }}</p>
            <h4 class="font-13 text-muted text-uppercase mb-1">Telephone</h4>
            <p class="mb-3"> {{ $patient->telephone_mari }}</p>

        </div>
    </div>
</div>
