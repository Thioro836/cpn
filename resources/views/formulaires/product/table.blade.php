<div class="card-box ">
    <div class="table-responsive table-bordered table-sm">
        <table class="table mb-0">
            <thead>
            <tr>
                <th>N°</th>
                <th>Nom produit</th>
                <th class="text-right">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($listeproduits as $key=> $produit )
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $produit->nom_produit }}</td>
                    <td class="text-right">
                        <a href="{{ route('produit.edit', $produit->id_produit) }}" class="btn btn-info">
                            Modifier
                        </a>
                        <a href="{{ route('produit.destroy', $produit->id_produit) }}" class="btn btn-danger btn-delete">
                            Supprimer
                          </a>
                    </td>
                </tr>
                
            @endforeach

            </tbody>
        </table>
    </div>
</div>