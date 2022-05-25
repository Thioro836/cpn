<div class="card-box mt-2">
    <h4 class="header-title">Produit delivrés</h4>
    <p class="sub-header">
        For basic styling—light padding and only horizontal dividers—add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.
    </p>

<div class="table-responsive">
    <table class="table mb-0">

        <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Quantité</th>
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
