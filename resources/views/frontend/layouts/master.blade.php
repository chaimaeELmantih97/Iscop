<!DOCTYPE html>
<html lang="fr">
<head>
	@include('frontend.layouts.head')
</head>
<body class="home2">

<!-- start page-wrapper -->
<div class="page-wrapper">

    <!-- start preloader -->
	<div class="book_preload">
        <div class="book">
            <div class="book__page"></div>
            <div class="book__page"></div>
            <div class="book__page"></div>
        </div>
    </div>
    <!-- end preloader -->

	@include('frontend.layouts.notification')
	<!-- Header -->
	@include('frontend.layouts.header')
	<!--/ End Header -->
	@yield('main-content')

	@include('frontend.layouts.footer')

</div>

</body>
</html>
