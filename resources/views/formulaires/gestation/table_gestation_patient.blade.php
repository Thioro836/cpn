<h4 class="header-title text-center mt-3"> Liste des gestations antérieures et leurs valeurs</h4>
<div class="card-box mt-2">
<div class="table-responsive">
    <table class="table mb-0">

        <thead>
        <tr>
            <th>N°</th>
            <th>Nom </th>
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
