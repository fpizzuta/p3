@extends('layouts.pages')

@push('styles')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
    {{--<link href='{{ asset('css/page.css') }}' rel='stylesheet'>--}}
    {{--<link href='{{ asset('css/form.css') }}' rel='stylesheet'>--}}
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          crossorigin="anonymous">

@endpush

@push('body')
    <div class="container">
        @foreach($data as $game)
            <ul class="list-inline" style='text-align: center'>
                <div>
                    <li class="list-inline-item"><a class="social-icon text-center"
                                                    target="_self"
                                                    href="games/{{$game['id']}}">{{$game['gameName']}}</a></li>
                    <li class="list-inline-item">{{$game['date']}}</li>

                </div>
            </ul>
        @endforeach
    </div>

@endpush
