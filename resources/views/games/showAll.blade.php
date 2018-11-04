@extends('layouts.pages2')

@push('styles')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
    {{--<link href='{{ asset('css/page.css') }}' rel='stylesheet'>--}}
    {{--<link href='{{ asset('css/form.css') }}' rel='stylesheet'>--}}
    <link href='{{ asset('css/newStyle.css') }}' rel='stylesheet'>

@endpush

@push('body')
<div class='wrapper'>
    <div id="page-content" class="page-content flexbox-col">
        <div class='list-container'>
            <div class='list'>
                <div class="list-header">Title</div>
                @foreach($data as $game)
                     <div class="list-item"><a target="_self" href="games/{{$game['id']}}">{{$game['gameName']}}</a></div>
                @endforeach
            </div>
        </div>
        <div class='list-container'>
            <div class='list'>
                <div class="list-header">Date</div>
                @foreach($data as $game)
                    <div class="list-item">{{$game['date']}}</div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endpush
