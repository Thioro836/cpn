<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="tension_arterielle">Tension artérielle </label>
            <input class="form-control" type="text" name="tension_arterielle" id="tension_arterielle" value="{{ $consultation->tension_arterielle }}" >
        </div>
       
    </div>
    
        <div class="row">
            @foreach (page_2() as $name => $question )
                <div class="col-md-4">
                    <div class="checkbox checkbox-success form-check-inline ml-1 mb-2">
                        <input name="{{ $name }}" type="checkbox" id="{{ $name }}" >
                        <label for="{{ $name }}"> {{ $question }} </label>
                    </div>
                </div>
            @endforeach
        
    </div>
</div>





