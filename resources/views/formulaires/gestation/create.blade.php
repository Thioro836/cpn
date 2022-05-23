<div class="card-box">
    @include('layouts.message')
    <form action="{{ route('gestations.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nom">Nom de la gestation</label>
            <input type="text" name="nom" class="form-control" id=nom>
        </div>
        <button class="btn btn-success " type="submit">Enregistrer</button>
    </form>
</div>
