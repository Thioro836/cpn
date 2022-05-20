<div class="form-group">
    <label for="age_gestationnel">Age gestationel </label>
    <input class="form-control" type="text" name="age_gestationnel" id="age_gestationnel">
</div>

<div class="form-group">
    <label for="poids">Poids </label>
    <input class="form-control" type="text" name="poids" id="poids">
</div>
<div class="form-group">
    <label for="haut_uterine">Hauteur utérine </label>
    <input class="form-control" type="text" name="haut_uterine" id="haut_uterine">
</div>
<div class="row">
    @foreach (page_1() as $name => $question)
        <div class="col-md-4">
            <div class="checkbox checkbox-success form-check-inline ml-1 mb-2">
                <input name="{{ $name }}" type="checkbox" id="{{ $name }}">
                <label for="{{ $name }}"> {{ $question }} </label>
            </div>
        </div>
    @endforeach
</div>