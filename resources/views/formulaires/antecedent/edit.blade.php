
<div class="card-box">
    <form action="{{ route('antecedents.update', $antecedent->id_antecedent) }}" method="POST">
        @csrf 
        @method('PUT')
        @include('layouts.message')
        <div class="form-group">
            <label >Catégorie de l'antecedent </label>
            <select name="categorie" class="form-control" >
                @foreach ($categories as $categorie )
                    <option {{ $categorie->is($antecedent->categorieAntecedent) ? "selected":"" }} value="{{ $categorie->id_categorie_antecedent }}">
                        {{ $categorie->nom_cat_antecedent }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nom">Nom de l'antecedent </label>
            <input class="form-control" type="text" name="nom" id="nom" value="{{ $antecedent->nom }}">
        </div>

        <button class="btn btn-success " type="submit">enregistrer</button>
    </form>
</div>