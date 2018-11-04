<div id="mainWrapper" class="flexbox">
    <div id="sidebar" class="flexbox-col">
        <div> <img id="logo" src="{{ asset('images/catanicons.jpg') }}"></div>
        <div class="name"><h1 class="name">THE GATHERING</h1></div>
        <div class="navlink">
            {{--<div class="link"><a href="#" target="_blank">Games</a></div>--}}
            {{--<div class="link"><a href="#" target="_blank">Create Game</a></div>--}}
            {{--<div class="link"><a href="#" target="_blank">Users</a></div>--}}
            @foreach(config('app.nav') as $link => $label)
                <div class="link">
                    @if(Request::is(substr($link, 1)))
                        <a class="active" href="{{ $link }}">{{ $label }}</a>
                    @else
                        <a href="{{ $link }}">{{ $label }}</a>
                    @endif
                </div>
            @endforeach
        </div>
    </div>

    {{--@foreach(config('app.nav') as $link => $label)--}}
        {{--<div class="link">--}}
            {{--@if(Request::is(substr($link, 1)))--}}
                {{--<a class="active" href="{{ $link }}">{{ $label }}</a>--}}
            {{--@else--}}
                {{--><a href="{{ $link }}">{{ $label }}</a>--}}
            {{--@endif--}}
        {{--</div>--}}
    {{--@endforeach--}}