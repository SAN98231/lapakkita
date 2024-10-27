<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.stylecss')
</head>
<body>
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')
</body>
</html>