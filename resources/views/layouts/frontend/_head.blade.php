<!-- Basic page needs
    ============================================ -->
<title>@yield('title') :: TFP_Solutions_BD</title>
<meta charset="utf-8">
<meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
<meta name="author" content="Magentech">
<meta name="robots" content="index, follow" />

<!-- Mobile specific metas
============================================ -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicon
============================================ -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assets/frontend/ico/apple-touch-icon-144-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets/frontend/ico/apple-touch-icon-114-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets/frontend/ico/apple-touch-icon-72-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" href="{{asset('assets/frontend/ico/apple-touch-icon-57-precomposed.png')}}">
<link rel="shortcut icon" href="{{asset('assets/frontend/ico/favicon.png')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<!-- Google web fonts
============================================ -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Libs CSS
============================================ -->
<link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap/css/bootstrap.min.css')}}">
<link href="{{asset('assets/frontend/css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/frontend/js/datetimepicker/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/frontend/js/owl-carousel/assets/owl.carousel.css')}}" rel="stylesheet">
<link href="{{asset('assets/frontend/js/owl-carousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/frontend/css/themecss/lib.css')}}" rel="stylesheet">
<link href="{{asset('assets/frontend/js/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet">

<!-- Theme CSS
============================================ -->
<link href="{{asset('assets/frontend/css/themecss/so_megamenu.css')}}" rel="stylesheet">
<link href="{{asset('assets/frontend/css/themecss/so-categories.css')}}" rel="stylesheet">
<link href="{{asset('assets/frontend/css/themecss/so-listing-tabs.css')}}" rel="stylesheet">
<link id="color_scheme" href="{{asset('assets/frontend/css/theme.css')}}" rel="stylesheet">
<!-- <link href="{{asset('assets/frontend/css/responsive.css')}}" rel="stylesheet"> -->
<link href="{{asset('assets/frontend/css/footer1.css')}}" rel="stylesheet">
<link href="{{asset('assets/frontend/css/header1.css')}}" rel="stylesheet">


<!-- Include Libs & Plugins
============================================ -->

<script type="text/javascript" src="{{asset('assets/frontend/js/jquery-2.2.4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/owl-carousel/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/themejs/libs.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/unveil/jquery.unveil.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/countdown/jquery.countdown.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/datetimepicker/moment.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Placed at the end of the document so the pages load faster -->

<!-- Theme files
============================================ -->
<script type="text/javascript" src="{{asset('assets/frontend/js/themejs/so_megamenu.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/themejs/addtocart.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/themejs/application.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}")
    @endif
</script>
@yield('table_script')

@yield('script')
