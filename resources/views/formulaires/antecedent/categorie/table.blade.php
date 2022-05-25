<div class="card-box mt-1">
    <h4 class="header-title mb-2">Liste des Catégories d'antécedent</h4>

    <div class="table-responsive table-bordered">
        <table class="table mb-0">
            <thead>
            <tr>
                <th>#</th>
                <th>Nom Catégorie</th>
                <th class="text-right">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($listeCategories as $key=> $categorie )
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $categorie->nom_cat_antecedent }}</td>
                    <td class="text-right">
                        <a href="{{ route('categorie-antecedent.edit', $categorie->id_categorie_antecedent) }}" class="btn btn-info">
                            Modifier
                        </a>
                        <a href="{{ route('categorie-antecedent.destroy', $categorie->id_categorie_antecedent) }}" class="btn btn-danger btn-delete">
                            Supprimer
                        </a>
                    </td>

                </tr>

            @endforeach

            </tbody>
        </table>
    </div>
</div>
