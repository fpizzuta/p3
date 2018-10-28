@extends('layouts.pages');

@push('styles')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
    <link href='{{ asset('css/style.css') }}' rel='stylesheet'>
@endpush

@push('body')
    <h1>Show game {{ $title }}  here</h1>
@endpush