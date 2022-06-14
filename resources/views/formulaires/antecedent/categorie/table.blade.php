<div class="card-box mt-1">

    <div class="table-responsive table-bordered mt-3 table-sm">
        <table class="table mb-0">
            <thead>
            <tr>
                <th>N°</th>
                <th>Nom Catégorie</th>
                <th class="text-right">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($listeCategories as $key=> $categorie )
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $categorie->nom_cat_antecedent }}</td>
                    <td class="text-right ">
                        <a href="{{ route('categorie-antecedent.edit', $categorie->id_categorie_antecedent) }}" class="btn btn-info ">
                            Modifier
                        </a>
                        <a href="{{ route('categorie-antecedent.destroy', $categorie->id_categorie_antecedent) }}" class="btn btn-danger btn-delete ">
                            Supprimer
                        </a>
                    </td>

                </tr>

            @endforeach

            </tbody>
        </table>
    </div>
</div>
