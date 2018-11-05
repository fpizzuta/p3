@if($errors->get($field))
    <div class="error" role="alert">{{ $errors->first($field) }}</div>
@endif