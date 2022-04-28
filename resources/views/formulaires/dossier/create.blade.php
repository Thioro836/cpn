<div class="card-box">
    <form action="">
       <input type="hidden" name="patient" value="{{  $patient->id_patient }}">
        <div class="form-group">
            <label for="date_derniere_regle">date des dernières règes </label>
            <input class="form-control" type="date" name="date_derniere_regle" id="date_derniere_regle">
        </div>
        <div class="form-group">
            <label for="dure_cycle">Durée du cycle</label>
            <input class="form-control" type="text" name="dure_cycle" id="dure_cycle">
        </div>
        
        <p>Handicap physique</p>
        <div class="radio radio-info form-check-inline ml-1 mb-2">
            <input type="radio" id="handicap_physique_O" value="oui" name="handicap_physique" checked="">
            <label for="handicap_physique_O"> Oui </label>
        </div>
        <div class="radio radio-info form-check-inline mb-2">
            <input type="radio" id="handicap_physique_N" value="non" name="handicap_physique" checked="">
            <label for="handicap_physique_N"> Non </label>
        </div>
        <div class="form-group">
            <label for="groupe_sanguin">Groupe sanguin et Facteur Rhésus </label>
            <select name="groupe_sanguin" class="form-control" id="">
                <option value="O+">O+</option>
            </select>
            
        </div>
        <div class="form-group">
            <label for="taille_patiente">Taille de la patiente </label>
            <input class="form-control" type="text" name="taille_patiente" id="taille_patiente">
        </div>
        <div class="form-group">
            <label for="dap">DAP </label>
            <input class="form-control" type="text" name="dap" id="dap">
        </div>
        <button class="btn btn-success " type="submit">enregistrer</button>
    </form>
</div>