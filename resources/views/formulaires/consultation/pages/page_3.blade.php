<div class="row">
    @foreach (page_3() as $name => $question )
        @continue($dossier->consultations()->count()<8 AND in_array($name, ['position_transverse','siege','gemellaire']))
        <div class="col-md-4">
            <div class="checkbox checkbox-success form-check-inline ml-1 mb-2">
                <input name="{{ $name }}" type="checkbox" id="{{ $name }}" >
                <label for="{{ $name }}"> {!! $question !!}</label> </label>
            </div>
        </div>
    @endforeach
</div>