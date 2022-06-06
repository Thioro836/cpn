<div class="card-box">
    <h4 class="header-title text-center">Ajouter une situation</h4>
    @include('layouts.message')
    <form action="{{ route('situation.store') }}" method="post">
        @csrf
        
        <div class="form-group">
            <label for="numero">Numéro</label>
            <input type="text" name="numero" class="form-control" id=numero>
        </div>
        <div class="form-group">
            <label for="sexe_enfant">Sexe de l'enfant</label>
            <input type="text" name="sexe_enfant" class="form-control" id=sexe_enfant>
        </div>
        <div class="form-group">
            <label for="vivant">Vivant</label>
            <input type="text" name="vivant" class="form-control" id=vivant>
        </div>
        <div class="form-group">
            <label for="age_enfant">Age de l'enfant</label>
            <input type="text" name="age_enfant" class="form-control" id=age_enfant>
        </div>
        <div class="form-group">
            <label for="cause_deces">Cause du décès</label>
            <input type="text" name="cause_deces" class="form-control" id=cause_deces>
        </div>
        
        <button class="btn btn-success " type="submit">Enregistrer</button>
    </form>
</div>