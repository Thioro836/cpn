
<div class="card-box">
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

        <button class="btn btn-success " type="submit">enregistrer</button>
    </form>
</div>

