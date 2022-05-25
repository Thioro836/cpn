
<div class="card-box">
    <h4 class="text-center">Enregistrer un antecedent</h4>
    <form action="{{ route('antecedents.store') }}" method="POST">
        @csrf
        @include('layouts.message')
        <div class="form-group">
            <label >Catégorie de l'antecedent </label>
            <select name="categorie" class="form-control" >
                @foreach ($categories as $categorie )
                    <option value="{{ $categorie->id_categorie_antecedent }}">
                        {{ $categorie->nom_cat_antecedent }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nom">Nom de l'antecedent </label>
            <input class="form-control" type="text" name="nom" id="nom">
        </div>

        <button class="btn btn-success " type="submit">enregistrer</button>
    </form>
</div>
