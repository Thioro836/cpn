
 <div class="card-box">
    <h4 class="header-title text-center">Modifier les informations  d'un agent de santé</h4>
            @include('layouts.message')
            <form action="{{ route('agent-sante.update',$agent->id_agent) }}" method="POST">
            @csrf 
            @method('PUT')
            <div class="form-group">
                <label for="nom">Nom Agent de Santé</label>
                <input type="text"name="nom" class="form-control" id="nom" value="{{ $agent->nom }}">
            </div>
            <div class="form-group">
                <label for="prenom">prénom Agent de Santé</label>
                <input type="text"name="prenom" class="form-control" id="prenom" value="{{ $agent->prenom }}">
            </div>
            <div class="form-group">
                <label for="adresse">Adresse </label>
                <input type="text"name="adresse" class="form-control" id="adresse" value="{{ $agent->adresse }}">
            </div>
            <div class="form-group">
                <label for="email">EMAIL</label>
                <input type="email"name="email" class="form-control" id="email" value="{{ $agent->email }}">
            
            </div>
            <div class="form-group">
                <label for="telephone">Téléphone</label>
                <input type="text"name="telephone" class="form-control" id="telephone" value="{{ $agent->telephone }}">
            </div>
            <div class="form-group">
                <label for="qualification">Qualification du prestataire</label>
                <input type="text"name="qualification" class="form-control" id="qualification" value="{{ $agent->qualification }}">
            </div>
            
            
            <button class="btn btn-success " type="submit">Enregistrer</button>
            </form>
</div>
