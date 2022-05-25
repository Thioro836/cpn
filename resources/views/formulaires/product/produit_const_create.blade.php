
<div class="card-box">
    <form action="{{ route('produit-consultation.store') }}" method="POST">
        @csrf
        <input type="hidden" value="{{ $consultation->id_consultation }}" name="consultation">
        @include('layouts.message')
        @foreach ($produits as $produit )
        <div class="form-group">
            <label >{{ $produit->nom_produit }} </label>
            <input class="form-control" type="text" name="produits[{{  $produit->id_produit  }}]" >
        </div>
        @endforeach

        <button class="btn btn-success " type="submit">enregistrer</button>
    </form>
</div>

