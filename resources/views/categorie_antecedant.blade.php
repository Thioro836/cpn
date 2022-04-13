@extends('layouts.master')
@section('content')
<a href="{{ route('categorie-ancetedent.create') }}" class="btn btn-primary mt-3">
    Ajouter une catégrie d'antecedent
</a>
<div class="card-box mt-5">
    <h4 class="header-title">Liste des catégories d'antecedent</h4>
    <p class="sub-header">
        For basic styling—light padding and only horizontal dividers—add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.
    </p>

    <div class="table-responsive">
        <table class="table mb-0">
            <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
            </tr>
            </thead>
            <tbody>
                @foreach ( $listeCategories as $key=> $categorie )
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $categorie->nom_cat_antecedent }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection