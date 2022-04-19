@extends('layouts.master')
@section('content')
    

    
<div class="card-box mt-5">
    <a href="{{ route('agent-sante.create') }} " class="btn btn-primary mb-3">
        Ajouter un Agent de Santé
    </a>
    <h4 class="header-title">Liste des agents de santé</h4>
    <p class="sub-header">
        You can also invert the colors—with light text on dark backgrounds—with <code class="highlighter-rouge">.table-dark</code>.
    </p>
    <div class="table-responsive">
        <table class="table mb-0">
            <thead>
            <tr>
                <th>#</th>
                <th>Nom </th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>email</th>
                <th>Téléphone</th>
                <th>Qualification</th>
                <th>Password</th>
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
                <td>{{ $agent->qualification }}</td>
                <td>{{ $agent->password }}</td>
                <td class="text-right">
                    <a href="{{ route('agent-sante.edit', $agent->id_agent) }}" class="btn btn-info">
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
@endsection
