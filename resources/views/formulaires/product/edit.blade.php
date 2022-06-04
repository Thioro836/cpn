
<div class="card-box">
    <h4 class="text-center mb-2">Modifier un produit</h4>
            @if (\Session::has('message'))
                <h4 class="alert alert-success">{{ Session::get('message') }}</h4>

            @endif
            <form action="{{ route('produit.update',$produit->id_produit) }}" method="POST">
            @csrf 
            @method('PUT')
            <div class="form-group">
                <label for="nom">Nom du produit</label>
                <input type="text"name="nom" class="form-control" id="nom" value="{{ $produit->nom_produit }}">
            </div>
            <button class="btn btn-success " type="submit">Enregistrer</button>
            </form>
</div>