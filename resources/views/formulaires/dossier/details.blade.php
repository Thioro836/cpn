<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-start mb-3">
            {{-- <img class="d-flex me-3 rounded-circle avatar-lg" src="{{ asset("assets/images/users/user-8.jpg") }}" alt="Generic placeholder image"> --}}
            <div class="w-100 ml-2">
                <h4 class="mt-0 mb-1">{{$dossier->patient->nomComplet() }}</h4>
                <p class="text-muted">{{$dossier->patient->profession_patient }}</p>
            </div>
        </div>

        <h5 class="mb-1 mt-4 text-uppercase bg-light p-2">
            <i class="mdi mdi-account-circle me-1"></i>
        </h5>
        <div class="">

            <h4 class="font-13 text-muted text-uppercase mb-1">Date des dernières règles</h4>
            <p class="mb-3"> {{ dateFormat($dossier->date_derniere_regle) }}</p>

            <h4 class="font-13 text-muted text-uppercase mb-1">Duree du cycle</h4>
            <p class="mb-3"> {{ $dossier->dure_cycle }} jours</p>

            <h4 class="font-13 text-muted text-uppercase mb-1">Handicap physique</h4>
            <p class="mb-3"> {{ $dossier->hadicap_pysique ? "OUI":"NON" }}</p>

            <h4 class="font-13 text-muted text-uppercase mb-1">Taille patiente</h4>
            <p class="mb-3"> {{ $dossier->taille_patiente }} m</p>

            <h4 class="font-13 text-muted text-uppercase mb-1">DAP</h4>
            <p class="mb-3"> {{ $dossier->dap }}</p>

            <h4 class="font-13 text-muted text-uppercase mb-1">Groupe sanguin</h4>
            <p class="mb-3"> {{ $dossier->groupe_sanguin }}</p>

        </div>
    </div>
</div>
