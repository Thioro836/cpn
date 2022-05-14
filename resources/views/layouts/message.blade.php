@if (\Session::has('message'))
    <h5 class="alert alert-success"> {{ Session::get('message') }}</h5>
@endif
@if ($errors->any())
    <h5 class="alert alert-danger"> {{ $errors->first() }}</h5>
@endif