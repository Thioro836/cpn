
<div class="card-box">
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
       <div class="champ"></div>
    

        <button class="btn btn-success " type="submit">enregistrer</button>
    </form>
</div>
<div id="model" style="display: none">
    <div class="form-group">
        <label for="valeur">Valeur </label>
        <input class="form-control" type="text" name="nom" id="nom">
    </div>
</div>