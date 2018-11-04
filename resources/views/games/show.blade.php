@extends('layouts.pages2')

@push('styles')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
    {{--<link href='{{ asset('css/page.css') }}' rel='stylesheet'>--}}
    {{--<link href='{{ asset('css/form.css') }}' rel='stylesheet'>--}}
    <link href='{{ asset('css/newStyle.css') }}' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


@endpush

@push('body')
<div class='wrapper'>
    <div id="page-content" class="page-content flexbox-col">
        <div class='list-item'> <span id='gameName'>{{ $match['gameName'] }}</span> <span id='gameDate'>{{ $match['date'] }}</span></div>
        <div class='list-container'>
            <div class='list'>
                <div class="list-header">Player</div>
                <div class="list-item">{{$match['p1_Name']}}</div>
                <div class="list-item">{{$match['p2_Name']}}</div>
                <div class="list-item">{{$match['p3_Name']}}</div>
                <div class="list-item">{{$match['p4_Name']}}</div>
            </div>
        </div>
        <div class='list-container'>
            <div class='list'>
                <div class="list-header">Score</div>
                <div class="list-item">@if (array_key_exists('p1_Score',$match)) {{$match['p1_Score']}} @endif</div>
                <div class="list-item">@if (array_key_exists('p2_Score',$match)) {{$match['p2_Score']}} @endif</div>
                <div class="list-item">@if (array_key_exists('p3_Score',$match)) {{$match['p3_Score']}} @endif</div>
                <div class="list-item">@if (array_key_exists('p4_Score',$match)) {{$match['p4_Score']}} @endif</div>
            </div>
        </div>
        <div class='list-container'>
            <div class='list'>
                <div class="list-header">Winner </div>
                <div class="check-item">@if (array_key_exists('p1_Winner',$match)) <i class="fas fa-check-circle"></i> @else &nbsp; @endif</div>
                <div class="check-item">@if (array_key_exists('p2_Winner',$match)) <i class="fas fa-check-circle"></i> @else &nbsp; @endif</div>
                <div class="check-item">@if (array_key_exists('p3_Winner',$match)) <i class="fas fa-check-circle"></i> @else &nbsp; @endif</div>
                <div class="check-item">@if (array_key_exists('p4_Winner',$match)) <i class="fas fa-check-circle"></i> @else &nbsp; @endif</div>
            </div>
        </div>
    </div>
</div>
@endpush