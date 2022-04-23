@extends('layouts.master')
@section('content')
<div class="card-box mt-5">
    <a href="{{ route('produit.create') }}" class="btn btn-primary mb-3">
        Ajouter un produit
    </a>
    <h4 class="header-title">Liste des produits</h4>
    <p class="sub-header">
        You can also invert the colors—with light text on dark backgrounds—with <code class="highlighter-rouge">.table-dark</code>.
    </p>
    <div class="table-responsive">
        <table class="table mb-0">
            <thead>
            <tr>
                <th>#</th>
                <th>Nom produit</th>
                <th class="text-right">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($listeproduits as $key=> $produit )
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $produit->nom_produit }}</td>
                    <td class="text-right">
                        <a href="{{ route('produit.edit', $produit->id_produit) }}" class="btn btn-info">
                            Modifier
                        </a>
                        <a href="{{ route('produit.destroy', $produit->id_produit) }}" class="btn btn-danger btn-delete">
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