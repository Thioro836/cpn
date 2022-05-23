<div class="card-box">
    @include('layouts.message')
    <form action="{{ route('gestations.update', $gestation->id_gestation) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom">Nom de la gestation</label>
            <input type="text" name="nom" class="form-control" id=nom value="{{ $gestation->nom_gestation  }}">
        </div>
        <button class="btn btn-success " type="submit">Enregistrer</button>
    </form>
</div>
