<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
	@include('home.components.css')
</head>

<body>

	<!-- Header Area -->
	@include('home.components.header')
	<!-- End Header Area -->

	<!-- main -->
	 @yield('content')
	 <!-- main -->

	<!-- footer -->
	 @include('home.components.footer')
	 <!-- footer -->

	@include('home.components.js')

</body>

</html>