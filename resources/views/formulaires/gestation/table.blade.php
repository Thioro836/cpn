<div class="card-box mt-2">
    <h4 class="header-title">gestations antérieures</h4>


<div class="table-responsive table-bordered">
    <table class="table mb-0">

        <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th class="text-right">Actions</th>
        </tr>
        </thead>
        <tbody>
           @foreach ($gestations as $key => $gestation)
           <tr>
            <th scope="row">{{ $key+1 }}</th>
            <td>{{ $gestation->nom_gestation }}</td>
            <td class="text-right">
                <a href="{{ route('gestations.edit', $gestation->id_gestation) }}" class="btn btn-primary mt-3">
                    modifier
                </a>
                <a href="{{ route('gestations.destroy', $gestation->id_gestation) }}" class="btn btn-delete btn-danger mt-3">
                    supprimer
                </a>
            </td>
        </tr>
           @endforeach
        </tbody>
    </table>
    </div>
</div>
