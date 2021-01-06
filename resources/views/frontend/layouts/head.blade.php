<!-- Meta Tag -->
@yield('meta')
<!-- Title Tag  -->
<title>@yield('title')</title>

        <!-- meta tag -->
        <meta charset="utf-8">
        <title>ISCOP</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        @php
        $settings=DB::table('settings')->get();
        @endphp
        @foreach($settings as $data)
          <link rel="shortcut icon" type="image/x-icon" href="{{$data->logo}}">
        @endforeach

        <!-- bootstrap v4 css -->
        <link rel="stylesheet" type="text/css" href="{{url('frontend/css/bootstrap.min.css')}}">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{url('frontend/css/font-awesome.min.css')}}">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{url('frontend/css/animate.css')}}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{url('frontend/css/owl.carousel.css')}}">
		<!-- slick css -->
        <link rel="stylesheet" type="text/css" href="{{url('frontend/css/slick.css')}}">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="{{url('frontend/css/magnific-popup.css')}}">
		<!-- Offcanvas CSS -->
        <link rel="stylesheet" type="text/css" href="{{url('frontend/css/off-canvas.css')}}">
		<!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="{{url('frontend/fonts/flaticon.css')}}">
		<!-- flaticon2 css  -->
        <link rel="stylesheet" type="text/css" href="{{url('frontend/fonts/fonts2/flaticon.css')}}">
        <!-- rsmenu CSS -->
        <link rel="stylesheet" type="text/css" href="{{url('frontend/css/rsmenu-main.css')}}">
        <!-- rsmenu transitions CSS -->
        <link rel="stylesheet" type="text/css" href="{{url('frontend/css/rsmenu-transitions.css')}}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{url('frontend/css/style.css')}}">
         <!-- Spacing css -->
        <link rel="stylesheet" type="text/css" href="{{url('frontend/css/spacing.css')}}">
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{url('frontend/css/responsive.css')}}">

        <!-- jquery latest version -->
        <script src="{{url('frontend/js/jquery.min.js')}}"></script>

        <style>
            /* width */
            ::-webkit-scrollbar {
            width: 8px;
            }

            /* Track */
            ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            }

            /* Handle */
            ::-webkit-scrollbar-thumb {
            background: #1474A6;
            height: 200px;
            }

            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
            background: #1474A6;
            }
        </style>
