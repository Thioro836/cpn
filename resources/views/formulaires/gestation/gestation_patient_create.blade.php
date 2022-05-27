<h4 class="header-title text-center mt-3">Renseigner la valeur d'une gestation</h4>
<div class="card-box ">
    <form action="{{ route('gestation-patient.store') }}" method="POST">
        @csrf
        <input type="hidden" value="{{ $dossier->id_dossier }}" name="dossier">
        @include('layouts.message')
        @foreach ($gestations as $gestation )
        <div class="form-group">
            <label >{{ $gestation->nom_gestation }} </label>
            <input class="form-control" type="text" name="gestations[{{ $gestation->id_gestation }}]" >
        </div>
        @endforeach

        <button class="btn btn-success " type="submit">Enregistrer</button>
    </form>
</div>

