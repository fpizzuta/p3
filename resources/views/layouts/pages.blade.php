<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    @stack('styles')
</head>
<body>
<header>
    @include('modules.nav')
</header>

@stack('body')
</body>
</html>