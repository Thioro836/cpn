<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-start mb-3">
            <img class="d-flex me-3 rounded-circle avatar-lg" src="{{ asset("assets/images/users/user-8.jpg") }}" alt="Generic placeholder image">
            <div class="w-100 ml-2">
                <h4 class="mt-0 mb-1">{{$consultation->dossierPatient->patient->nomComplet() }}</h4>
                <p class="text-muted">{{$consultation->dossierPatient->patient->profession_patient }}</p>
            </div>
        </div>

        <h5 class="mb-3 mt-4 text-uppercase bg-light p-2">
            <i class="mdi mdi-account-circle me-1"></i> 
        </h5>
        <div class="">

            <h4 class="font-13 text-muted text-uppercase mb-1">date consultation</h4>
            <p class="mb-3"> {{ $consultation->date_consultation }}</p>

            <h4 class="font-13 text-muted text-uppercase mb-1">Age gestationel</h4>
            <p class="mb-3">{{ $consultation->age_gestationnel }}</p>

            <h4 class="font-13 text-muted text-uppercase mb-1">Poids</h4>
            <p class="mb-3"> {{ $consultation->poids }}</p>
            <h4 class="font-13 text-muted text-uppercase mb-1">Hauteur utérine</h4>
            <p class="mb-3"> {{ $consultation->haut_uterine }}</p>
            <h4 class="font-13 text-muted text-uppercase mb-1">Tension Arterielle</h4>
            <p class="mb-3"> {{ $consultation->tension_arterielle }}</p>

        </div>
    </div>
</div>
