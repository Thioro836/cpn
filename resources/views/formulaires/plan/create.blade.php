
<div class="card-box">
    <form action="{{ route('plan-acouchement.store') }}#first" method="POST">
        @csrf
        <input type="hidden" value="{{ $dossier->id_dossier }}" name="id_dossier">
        @include('layouts.message')

        <div class="form-group" id="first">
            <label for="valeur">Lieu d'acouchement </label>
            <input class="form-control" type="text" name="lieu_accouchement">
        </div>

        <div class="form-group">
            <label for="valeur">Moyen de transport </label>
            <input class="form-control" type="text" name="moyens_transport">
        </div>

        <div class="form-group">
            <label for="valeur">Personne responsable </label>
            <input class="form-control" type="text" name="personne_responsable">
        </div>

        <div class="form-group">
            <label for="valeur">Accompagnant </label>
            <input class="form-control" type="text" name="accompagant">
        </div>

        <button class="btn btn-success " type="submit">Enregistrer</button>
    </form>
</div>
