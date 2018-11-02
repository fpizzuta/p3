@extends('layouts.pages');

@push('styles')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
    {{--<link href='{{ asset('css/page.css') }}' rel='stylesheet'>--}}
    {{--<link href='{{ asset('css/form.css') }}' rel='stylesheet'>--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">

@endpush

@push('body')
    <div class="container">
        <ul class="list-inline" style='text-align: center;'>
            <div>
                <li class="list-inline-item"><a class="social-icon text-center"
                                                target="_self"
                                                href="#">{{$match['gameName']}}</a></li>
                <li class="list-inline-item">{{$match['date']}}</li>
                @if ($match['p1_Name'] != '')
                    <li class="list-inline-item">{{$match['p1_Name']}} @if (array_key_exists('p1_Winner',$match)) (Winner) @endif</li>
                @endif

                @if ($match['p2_Name'] != '')
                    <li class="list-inline-item">{{$match['p2_Name']}} @if (array_key_exists('p2_Winner',$match)) (Winner) @endif</li>
                @endif
                @if ($match['p3_Name'] != null)
                    <li class="list-inline-item">{{$match['p3_Name']}} @if (array_key_exists('p2_Winner',$match)) (Winner) @endif</li>
                @endif
                @if ($match['p3_Name'] != null)
                    <li class="list-inline-item">{{$match['p4_Name']}} @if (array_key_exists('p2_Winner',$match)) (Winner) @endif</li>
                @endif
            </div>
        </ul>
    </div>
@endpush
