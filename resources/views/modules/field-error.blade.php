@if($errors->get($field))
    <div class='error'>{{ $errors->first($field) }}</div>
@endif