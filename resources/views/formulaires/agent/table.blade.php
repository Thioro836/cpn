<div class="card-box ">
   
    <div class="table-responsive table-bordered table-sm">
        <table class="table mb-0">
            <thead>
            <tr>
                <th>N°</th>
                <th>Prénoms et nom </th>
                <th>Adresse</th>
                <th>Téléphone</th>
                
                <th class="text-right">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($listeAgent as $key=> $agent )
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $agent->nomComplet() }}</td>
                <td>{{ $agent->adresse }}</td>
                <td>{{ $agent->telephone }}</td>
               
                <td class="text-right">
                    <a href="{{ route('agent-sante.edit', $agent->id_agent) }}" class="btn btn-info btn-xs btn-block ">
                        Modifier
                    </a>
                    <a href="{{ route('agent-sante.destroy', $agent->id_agent) }}" class="btn btn-danger btn-delete btn-xs btn-block">
                        Supprimer
                    </a>
                </td>
            </tr>
                
    @endforeach
            </tbody>

        </table>
    </div>
</div>