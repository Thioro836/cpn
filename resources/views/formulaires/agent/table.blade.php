<div class="card-box ">
    <a href="{{ route('agent-sante.create') }} " class="btn btn-primary mb-3">
        Ajouter un Agent de Santé
    </a>
    <div class="table-responsive table-bordered table-sm">
        <table class="table mb-0">
            <thead>
            <tr>
                <th>N°</th>
                <th>Nom </th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>email</th>
                <th>Téléphone</th>
                
                <th class="text-right">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($listeAgent as $key=> $agent )
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $agent->nom }}</td>
                <td>{{ $agent->prenom }}</td>
                <td>{{ $agent->adresse }}</td>
                <td>{{ $agent->email }}</td>
                <td>{{ $agent->telephone }}</td>
               
                <td class="text-right">
                    <a href="{{ route('agent-sante.edit', $agent->id_agent) }}" class="btn btn-info ">
                        Modifier
                    </a>
                    <a href="{{ route('agent-sante.destroy', $agent->id_agent) }}" class="btn btn-danger btn-delete">
                        Supprimer
                    </a>
                </td>
            </tr>
                
    @endforeach
            </tbody>

        </table>
    </div>
</div>