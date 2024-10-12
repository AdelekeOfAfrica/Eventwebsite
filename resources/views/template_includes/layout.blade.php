<!-- layout.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @include('template_includes.css') <!-- Include CSS -->
</head>
<body>
    @include('template_includes.header')

    <div class="content">
        @yield('content') <!-- Content section -->
    </div>

    @include('template_includes.js') <!-- Include JavaScript -->
</body>
</html>
