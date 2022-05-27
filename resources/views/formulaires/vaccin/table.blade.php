<div class="card-box mt-1"> 
    <div class="table-responsive table-bordered table-sm">
        <table class="table mb-0">
            <thead>
            <tr>
                <th>N°</th>
                <th>Nom</th>
                <th>Periodicité</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
               @foreach ( $vaccins as $key => $vaccin )
               <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $vaccin->nom_vaccin }}</td>
                <td>{{ $vaccin->periodicite }}</td>
                <td class="text-right">
                    <a href="{{ route('vaccins.edit',$vaccin->id_vaccin) }}" class="btn btn-primary ">
                        Modifier
                    </a>
                    <a href="{{ route('vaccins.destroy', $vaccin->id_vaccin) }}" class="btn btn-delete btn-danger">
                        Supprimer
                    </a>
                </td>
            </tr>
               @endforeach


            </tbody>
        </table>
    </div>
</div>
