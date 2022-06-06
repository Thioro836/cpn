<form class="text-center mb-2" method="GET" action="">
    <div class="form-row align-items-center" align="center">
        <div class="col-auto">
            <label class="sr-only" for="">Par numéro de telephone</label>
            <input type="text" value="{{ request('numero', null) }}" class="form-control mb-2" placeholder="Par numéro de telephone" name="numero">
        </div>

        <div class="col-auto">
            <label class="sr-only" for="">Par nom ou prénom</label>
            <input type="text" value="{{ request('nom', null) }}" class="form-control mb-2" placeholder="Par nom ou prénom" name="nom">
        </div>


        {{-- <div class="col-auto">
            <label class="sr-only" for="">Par statut</label>
            <select name="status" class="form-control mb-2" placeholder="Par livreur">
                <option value="">Sélectionner un statut</option>
                @foreach ($boutons as $bouton)
                    <option value="{{ $bouton }}" {{ (request('status', null) == $bouton) ? 'selected':'' }}>
                        {{ $bouton }}
                    </option>
                @endforeach
            </select>
        </div> --}}

        {{-- <div class="col-auto">
            <label class="sr-only" for="">Par livreur</label>
            <select name="livreur" class="form-control mb-2" placeholder="Par livreur">
                <option value="">Sélectionner un livreur</option>
                @foreach ($livreurs as $livreur)
                    <option value="{{ $livreur->id_utilisateur }}" {{ (request('livreur', null) == $livreur->id_utilisateur) ? 'selected':'' }}>
                        {{ $livreur->nom }}
                    </option>
                @endforeach
            </select>
        </div> --}}

        <div class="col-auto">
            <button type="submit" class="btn btn-primary waves-effect waves-light mb-2">
                Rechercher une patiente
            </button>
        </div>
    </div>
</form>
