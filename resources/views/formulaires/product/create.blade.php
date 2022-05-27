<h4 class="text-center">Ajouter  un produit</h4>
<div class="card-box">
            @include('layouts.message')
            <form action="{{ route('produit.store') }}" method="POST">
            @csrf 
            <div class="form-group">
                <label for="nom">Nom du produit</label>
                <input type="text"name="nom" class="form-control" id="nom">
            </div>
            <button class="btn btn-success " type="submit">Enregistrer</button>
            </form>
</div>
    