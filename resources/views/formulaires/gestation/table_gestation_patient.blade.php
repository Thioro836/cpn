<div class="card-box mt-2">
    <h4 class="header-title">gestations antérieures</h4>
    <p class="sub-header">
        For basic styling—light padding and only horizontal dividers—add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.
    </p>

<div class="table-responsive">
    <table class="table mb-0">

        <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
        </thead>
        <tbody>
           @foreach ($listeGestations as $key => $gestation)
           <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $gestation->nom_gestation }}</td>
                <td>{{ $gestation->pivot->valeur_gestation }}</td>
            </tr>
           @endforeach
        </tbody>
    </table>
    </div>
</div>
