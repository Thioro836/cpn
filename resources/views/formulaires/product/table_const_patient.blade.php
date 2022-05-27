<h4 class="header-title text-center"> Liste des produit delivrés</h4>
<div class="card-box mt-2">
<div class="table-responsive">
    <table class="table mb-0">

        <thead>
        <tr>
            <th>N°</th>
            <th>Nom du produit</th>
            <th>Quantité reçue</th>
        </tr>
        </thead>
        <tbody>
           @foreach ($listeProduits as $key => $produit)
           <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $produit->nom_produit }}</td>
                <td>{{ $produit->pivot->quantite }}</td>
            </tr>
           @endforeach
        </tbody>
    </table>
    </div>
</div>
