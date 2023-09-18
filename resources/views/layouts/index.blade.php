<!doctype html>
<html>

<head>
    @yield('css')
    <title>Romi Muharom - @yield('title')</title>
    @include('includes.head')
</head>

<body>
    <div class="container">
        <div id="main" class="row">
            @yield('content')
        </div>
    </div>
</body>
    @yield('javascript')
    
</html>
