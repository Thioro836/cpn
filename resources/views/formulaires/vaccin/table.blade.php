<div class="card-box mt-1">
    <h4 class="header-title">Liste des vaccins</h4>

    <div class="table-responsive table-bordered">
        <table class="table mb-0">
            <thead>
            <tr>
                <th>#</th>
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
                    <a href="{{ route('vaccins.edit',$vaccin->id_vaccin) }}" class="btn btn-primary mt-3">
                        Modifier
                    </a>
                    <a href="{{ route('vaccins.destroy', $vaccin->id_vaccin) }}" class="btn btn-delete btn-danger mt-3">
                        supprimer
                    </a>
                </td>
            </tr>
               @endforeach


            </tbody>
        </table>
    </div>
</div>
