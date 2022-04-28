@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">
                        {{ config('app.name') }}
                    </a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Categorie Antecedent</a></li>
                    <li class="breadcrumb-item active">Liste</li>
                </ol>
            </div>
            <h4 class="page-title">Liste des categories d'antécedent </h4>
        </div>
    </div>
</div>
<div class="card-box mt-5">
    <a href="{{ route('categorie-antecedent.create') }} " class="btn btn-primary mb-3">
        Ajouter une catégorie d'antécedent
    </a>
    <h4 class="header-title">Liste des Catégories d'antécedent</h4>
    <p class="sub-header">
        You can also invert the colors—with light text on dark backgrounds—with <code class="highlighter-rouge">.table-dark</code>.
    </p>

    <div class="table-responsive">
        <table class="table mb-0">
            <thead>
            <tr>
                <th>#</th>
                <th>Nom Catégorie</th>
                <th class="text-right">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($listeCategories as $key=> $categorie )
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $categorie->nom_cat_antecedent }}</td>
                    <td class="text-right">
                        <a href="{{ route('categorie-antecedent.edit', $categorie->id_categorie_antecedent) }}" class="btn btn-info">
                            Modifier
                        </a>
                        <a href="{{ route('categorie-antecedent.destroy', $categorie->id_categorie_antecedent) }}" class="btn btn-danger btn-delete">
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