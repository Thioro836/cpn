<div class="table-responsive">
    <table class="table mb-0">
        <thead>
        <tr>
            <th>#</th>
            <th>Nom antecedent</th>
            <th>Categorie</th>
            <th class="text-right">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($listesAntecedents as $key=> $antecedent )
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $antecedent->nom }}</td>
                <td>{{ $antecedent->categorieAntecedent->nom_cat_antecedent }}</td>
                <td class="text-right">
                    <a href="{{ route('antecedents.edit', $antecedent->id_antecedent) }}" class="btn btn-info">
                        Modifier
                    </a>
                    <a href="{{ route('antecedents.destroy', $antecedent->id_antecedent) }}" class="btn btn-danger btn-delete">
                        Supprimer
                    </a>
                </td>
        
            </tr>
            
        @endforeach

        </tbody>
    </table>
</div>