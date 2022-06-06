
<div class="card-box mt-2">
    <div class="table-responsive table-bordered table-sm">
        <table class="table mb-0">
    
            <thead>
            <tr>
                <th>N°</th>
                <th>Numéro</th>
                <th>Sexe de l'enfant</th>
                <th>Vivant</th>
                <th>Age de l'enfant</th>
                <th>Cause décès</th>
                <th class="text-right">Actions</th>
            </tr>
            </thead>
            <tbody>
               @foreach ($situations as $key => $situation)
               <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $situation->numero }}</td>
                <td>{{ $situation->sexe_enfant }}</td>
                <td>{{ $situation->vivant }}</td>
                <td>{{ $situation->age_enfant }}</td>
                <td>{{ $situation->cause_deces }}</td>

                <td class="text-right">
                    <a href="{{ route('situation.edit', $situation->id_situattion) }}" class="btn btn-primary ">
                        Modifier
                    </a>
                    <a href="{{ route('situation.destroy', $situation->id_situattion) }}" class="btn btn-delete btn-danger">
                        Supprimer
                    </a>
                </td>
            </tr>
               @endforeach
            </tbody>
        </table>
        </div>
    </div>
    