<h4 class=" header-title text-center">Ajouter  un vaccin</h4>
            <div class="card-box">
                @include('layouts.message')
                <form action="{{ route('vaccins.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nom">Nom du vaccin</label>
                        <input type="text" name="nom" class="form-control" id=nom>
                        <label for="periodicite">Périodicité</label>
                        <input type="text" name="periodicite" class="form-control" id=periodicite>
                    </div>
                    <button class="btn btn-success " type="submit">Enregistrer</button>
                </form>
            </div>