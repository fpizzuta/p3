@if($errors->get($field))
    <div class="alert alert-danger" role="alert">{{ $errors->first($field) }}</div>
@endif