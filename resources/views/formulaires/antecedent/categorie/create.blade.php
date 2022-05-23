
        <div class="card-box">
            @include('layouts.message')
            <form action="{{ route('categorie-antecedent.store') }}" method="POST">
            @csrf 
            <div class="form-group">
                <label for="nom">Nom de la categorie</label>
                <input type="text"name="nom" class="form-control" id="nom">
            </div>
            <button class="btn btn-success " type="submit">enregistrer</button>
            </form>
        </div>

    
