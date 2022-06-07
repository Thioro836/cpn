<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-start mb-3">
            <img class="d-flex me-3 rounded-circle avatar-lg" src="{{ asset("assets/images/users/user-8.jpg") }}" alt="Generic placeholder image">
            <div class="w-100 ml-2">
                <h4 class="mt-0 mb-1">{{ $agent->nomComplet() }}</h4>
                <p class="text-muted">{{ $agent->qualification }}</p>
            </div>
        </div>

        <h5 class="mb-3 mt-4 text-uppercase bg-light p-2">
            <i class="mdi mdi-account-circle me-1"></i> Informations Personnelle
        </h5>
        <div class="">

            <h4 class="font-13 text-muted text-uppercase mb-1">Adresse</h4>
            <p class="mb-3"> {{ $agent->adresse }}</p>

            <h4 class="font-13 text-muted text-uppercase mb-1">Email</h4>
            <p class="mb-3">{{ $agent->email }}</p>

            <h4 class="font-13 text-muted text-uppercase mb-1">Telephone</h4>
            <p class="mb-3"> {{ $agent->telephone }}</p>

        </div>
    </div>
</div>
