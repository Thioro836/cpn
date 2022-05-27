<h4 class=" header-title text-center">Ajouter  une catégorie d'antécédent</h4>
        <div class="card-box">
            @include('layouts.message')
            <form action="{{ route('categorie-antecedent.store') }}" method="POST">
            @csrf 
            <div class="form-group">
                <label for="nom">Nom de la catégorie</label>
                <input type="text"name="nom" class="form-control" id="nom">
            </div>
            <button class="btn btn-success " type="submit">Enregistrer</button>
            </form>
        </div>

    
