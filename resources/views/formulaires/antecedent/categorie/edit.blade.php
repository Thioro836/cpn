
 <div class="card-box">
    <h4 class="header-title text-center mb-2">Modifier une catégorie d'antécédent</h4>
            @if (\Session::has('message'))
                <h4 class="alert alert-success">{{ Session::get('message') }}</h4>

            @endif
            <form action="{{ route('categorie-antecedent.update', $categorie->id_categorie_antecedent) }}" method="POST">
            @csrf 
            @method('PUT')
            <div class="form-group">
                <label for="nom">Nom de la catégorie</label>
                <input type="text"name="nom" class="form-control" id="nom" value="{{ $categorie->nom_cat_antecedent }}">
            </div>
            <button class="btn btn-success " type="submit">Enregistrer</button>
            </form>
</div>

    
