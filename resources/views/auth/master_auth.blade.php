<!DOCTYPE html>
<html lang="en">

<head>
    @include('auth.components.css')
</head>

<body>
    <!-- header -->
    @include('auth.components.header')
    <!-- header -->
   
    <!-- main -->
    @yield('content')
    <!-- main -->

    <!-- header -->
    @include('auth.components.footer')
    <!-- header -->

    @include('auth.components.js')
</body>

</html>