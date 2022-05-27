<h4 class="header-title text-center">Ajouter  un antécédent</h4>
<div class="card-box">
    <form action="{{ route('antecedents.store') }}" method="POST">
        @csrf
        @include('layouts.message')
        <div class="form-group">
            <label >Catégorie de l'antécédent </label>
            <select name="categorie" class="form-control" >
                @foreach ($categories as $categorie )
                    <option value="{{ $categorie->id_categorie_antecedent }}">
                        {{ $categorie->nom_cat_antecedent }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nom">Nom de l'antécédent </label>
            <input class="form-control" type="text" name="nom" id="nom">
        </div>

        <button class="btn btn-success " type="submit">Enregistrer</button>
    </form>
</div>
