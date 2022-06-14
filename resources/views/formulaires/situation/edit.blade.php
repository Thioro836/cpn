<div class="card-box">
    <h4 class="header-title text-center">Ajouter une situation</h4>
    @include('layouts.message')
    <form action="{{ route('situation.update', $situation->id_situattion) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="dossier" value="{{ $dossier->id_dossier }}">
        <div class="form-group">
            <label for="numero">Categorie</label>
            <select name="categorie" class="form-control" id="">
                @foreach ($categories as $categorie)
                    <option value="{{ $categorie->id_categorie_situation }}">{{ $categorie->nom_cat_situation }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="numero">Numéro</label>
            <input type="text" name="numero" class="form-control" id=numero>
        </div>
        <div class="form-group">
            <label for="sexe_enfant">Sexe de l'enfant</label>
            <select name="sexe_enfant" id="sexe_enfant" class="form-control">
                <option value="G">Garçon</option>
                <option value="F">Fille</option>
            </select>
        </div>
        <div class="form-group">
            <label for="vivant">Vivant</label>
            <select name="vivant" id="vivant" class="form-control">
                <option value="1">OUI</option>
                <option value="0">NON</option>
            </select>
        </div>
        <div class="form-group">
            <label for="age_enfant">Age de l'enfant</label>
            <input type="text" name="age_enfant" class="form-control" id=age_enfant>
        </div>
        <div class="form-group cause_deces" style="display: none">
            <label for="cause_deces">Cause du décès</label>
            <input type="text" name="cause_deces" class="form-control" id=cause_deces>
        </div>

        <button class="btn btn-success " type="submit">Enregistrer</button>
    </form>
</div>
