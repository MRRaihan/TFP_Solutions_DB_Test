<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.frontend._head')
</head>

<body class="res layout-subpage banners-effect-7">
<div id="wrapper" class="wrapper-full ">
    <!-- Header Container  -->
    <header id="header" class=" variantleft type_1">
        <!-- Header Top -->
        <div class="header-top">
          @include('layouts.frontend._headTop')
        </div>
        <!-- //Header Top -->

        <!-- Header center -->
        <div class="header-center left">
            @include('layouts.frontend._headMid')
        </div>
        <!-- //Header center -->

        <!-- Header Bottom -->
        <div class="header-bottom">
            <div class="container">
                <div class="row">

                    <!-- Main menu -->
                    <div class="megamenu-hori header-bottom-right  col-md-12 col-sm-12 col-xs-12 ">
                        <div class="responsive so-megamenu ">
                            <nav class="navbar-default">
                                @include('layouts.frontend._nav')
                            </nav>
                        </div>
                    </div>
                    <!-- //end Main menu -->

                </div>
            </div>

        </div>

        <!-- Navbar switcher -->
        <!-- //end Navbar switcher -->

    </header>
    <!-- //Header Container  -->
    <!-- Main Container  -->
    <div class="main-container container">
        @yield('content')
    </div>
    <!-- //Main Container -->


    <!-- Footer Container -->
    <footer class="footer-container type_footer1">
        <!-- Footer Top Container -->
        <section class="footer-top">
            @include('layouts.frontend._footer')
        </section>
        <!-- /Footer Top Container -->
    </footer>
    <!-- //end Footer Container -->

</div>

</body>
</html>
