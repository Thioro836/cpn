<div class="card-box">
    <h4 class="header-title text-center mb-3">Ajouter un agent de santé</h4>
           @include('layouts.message')
            <form action="{{ route('agent-sante.store') }}" method="POST">
            @csrf 
            <div class="form-group">
                <label for="nom">Nom Agent de Santé</label>
                <input type="text"name="nom" class="form-control" id="nom" value="{{ old('nom') }}">
            </div>
            <div class="form-group">
                <label for="prenom">prénom Agent de Santé</label>
                <input type="text"name="prenom" class="form-control" id="prenom" value="{{ old('prenom') }}">
            </div>
            <div class="form-group">
                <label for="adresse">Adresse </label>
                <input type="text"name="adresse" class="form-control" id="adresse" value="{{ old('adresse') }}">
            </div>
            <div class="form-group">
                <label for="email">EMAIL</label>
                <input type="email"name="email" class="form-control" id="email" value="{{ old('email') }}">
            
            </div>
            <div class="form-group">
                <label for="telephone">Téléphone</label>
                <input type="text"name="telephone" class="form-control" id="telephone" value="{{ old('telephone') }}">
            </div>
           
            <div class="form-group">
                <label for="qualification">Qualification du prestataire</label>
                <input type="text"name="qualification" class="form-control" id="qualification" value="{{ old('qualification') }}">
            </div>
           
            <button class="btn btn-success " type="submit">Enregistrer</button>
            </form>
</div>
    