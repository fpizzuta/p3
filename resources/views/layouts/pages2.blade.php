<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    @stack('styles')
</head>
<body>
<div id="mainWrapper" class="flexbox">
    @include('modules.nav2')

    @stack('body')
</div>
</body>
</html>