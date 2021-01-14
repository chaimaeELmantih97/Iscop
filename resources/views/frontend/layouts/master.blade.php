<!DOCTYPE html>
<html lang="fr">
<head>
	@include('frontend.layouts.head')
</head>
<body class="home2">

    {{-- <div id="dark-overlay-1" class="modal-wrap">
        <div id="modal-view-1" class="cstm-modal cstm-large-modal">
          <span id="modal-close-1" onclick="closeModal()" class="modal-close">&times;</span>
          <div id="modal-content-generalized-1" style="width: 100%;height: 100%;" class=" justify-content-center align-items-center">
            <div style="width: 100%; height:15%;" class="d-flex justify-content-center align-items-center">
                <h6 style="margin-top:10px">voici notre formation la plus demandée</h6>
            </div>
            <div style="width: 100%; height: 90%; overflow: scroll;">
                <img src="{{url('storage/photos/1/logistique.jpg')}}" style="width:100%; padding:0;margin:0;" alt="">
            </div>
          </div>
        </div>
    </div>  --}}
  
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
