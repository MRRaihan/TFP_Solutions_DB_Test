<!DOCTYPE html>
<html>
<head>
    @include('layouts.admin._head')
</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- LOGO -->
        @include('layouts.admin._topNav')
    </div>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->

    <div class="left side-menu">
        @include('layouts.admin._leftNav')

         <!-- end sidebarinner -->
    </div>
    <!-- Left Sidebar End -->

    <!-- Start right Content here -->

    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                @yield('content')
                <!-- End Row -->


            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer">
            @include('layouts.admin._footer')
        </footer>

    </div>
    <!-- End Right content here -->

</div>
<!-- END wrapper -->

@include('layouts.admin._script')

</body>
</html>
