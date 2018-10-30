<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0">
        <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item active">
                <a class="nav-link" href="#">The Gathering</a>
            </li>
        </ul>
    </div>
    <div class="mx-auto my-2 order-0 order-md-1 position-relative">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse w-100 dual-collapse2 order-2 order-md-2">
        <ul class="navbar-nav mr-auto text-center">
            @foreach(config('app.nav') as $link => $label)
                <li class="nav-item">
                    @if(Request::is(substr($link, 1)))
                        <a class="nav-link active" href="{{ $link }}">{{ $label }}</a>
                    @else
                        <a class="nav-link" href="{{ $link }}">{{ $label }}</a>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</nav>
