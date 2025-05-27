<!DOCTYPE html>
<html lang="en">

<head>
    @include('auth.components.css')
</head>

<body>
    <!-- js -->
    <!-- main -->
    @yield('content')
    <!-- main -->

    @include('auth.components.js')
</body>

</html>