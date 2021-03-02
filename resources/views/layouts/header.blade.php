<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Nordia's Soaps</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="../content/herbal/images/herbal.png">

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:100,300,400,400italic,700,700italic'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Caudex:100,300,400,400italic,700,700italic'>

    <!-- CSS -->
    <link rel='stylesheet' href='../css/global.css'>
    <link rel='stylesheet' href='../content/herbal/css/structure.css'>
    <link rel='stylesheet' href='../content/herbal/css/herbal.css'>
    <link rel='stylesheet' href='../content/herbal/css/custom.css'>

</head>

<body class="archive post-type-archive post-type-archive-product woocommerce woocommerce-page color-custom style-simple layout-full-width nice-scroll-on button-flat if-overlay if-border-hide header-plain header-fw minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-center menuo-no-borders menuo-right mobile-tb-left mobile-mini-mr-ll mobile-header-mini">
    <div id="Wrapper">
        <div id="Header_wrapper">
            <header id="Header">
                <div class="header_placeholder"></div>
                <div id="Top_bar">
                    <div class="container">
                        <div class="column one">
                            <div class="top_bar_left clearfix">
                                <div class="logo">
                                    <a id="logo" href="{{ url('/') }}" title="BeHerbal - BeTheme"><img class="logo-main scale-with-grid" src="../content/herbal/images/herbal.png" alt="herbal" /><img class="logo-sticky scale-with-grid" src="images/herbal.png" alt="herbal" /><img class="logo-mobile scale-with-grid" src="images/herbal.png" alt="herbal" />
                                    </a>
                                </div>
                                <div class="menu_wrapper">
                                    <nav id="menu" class="menu-main-menu-container">
                                        <ul id="menu-main-menu" class="menu">
                                            <li>
                                                <a href="{{ url('/') }}"><span>Home</span></a>
                                            </li>
                                            <li class="current_page_item">
                                                <a href="{{url('/shop')}}"><span>Shop</span></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/about') }}"><span>About</span></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/faq') }}"><span>FAQ</span></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/contact') }}"><span>Contact</span></a>
                                            </li>
                                           
                                        </ul>
                                    </nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu-fine"></i></a>
                                </div>
                                <div class="secondary_menu_wrapper"></div>
                                <div class="banner_wrapper"></div>
                                <div class="search_wrapper">
                                    <form method="get" id="searchform" action="#">
                                        <i class="icon_search icon-search-fine"></i><a href="#" class="icon_close"><i class="icon-cancel-fine"></i></a>
                                        <input type="text" class="field" name="s" id="s" placeholder="Enter your search" />
                                        <input type="submit" class="submit" value="" style="display:none;" />
                                    </form>
                                </div>
                            </div>
                            <div class="top_bar_right">
                                <div class="top_bar_right_wrapper">
                                    <a id="header_cart" href="#"><i class="icon-bag-fine"></i><span>1</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

@yield('content')



            <footer id="Footer" class="clearfix">
            <div class="widgets_wrapper" style="padding:80px 0;">
                <div class="container">
                    <div class="column one-fifth">
                        <aside class="widget widget_text">
                            <div class="textwidget">
                                <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                    <div class="image_wrapper"><img class="scale-with-grid" src="../content/herbal/images/home_herbal_logo_small.png" alt="home_herbal_logo_small" width="84" height="34" />
                                    </div>
                                </div>
                                <hr class="no_line" style="margin: 0 auto 20px;" />
                                <p style="margin-right: 10%; font-size: 11px;">
                                    Aliquam sem. In hendrerit nulla quam nunc, accumsan congue. Lorem ipsum primis in nibh vel risus.
                                </p>
                            </div>
                        </aside>
                    </div>
                    <div class="column one-fifth">
                        <aside class="widget widget_text">
                            <div class="textwidget">
                                <ul style="line-height: 40px; font-weight: 700;">
                                    <li>
                                        <a href="#">Aliquam</a>
                                    </li>
                                    <li>
                                        <a href="#">Nulla imperdiet</a>
                                    </li>
                                    <li>
                                        <a href="#">Quisque</a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="column one-fifth">
                        <aside class="widget widget_text">
                            <div class="textwidget">
                                <ul style="line-height: 40px; font-weight: 700;">
                                    <li>
                                        <a href="#">Curabitur</a>
                                    </li>
                                    <li>
                                        <a href="#">Donec ligula</a>
                                    </li>
                                    <li>
                                        <a href="#">Vestibulum</a>
                                    </li>
                                    <li>
                                        <a href="#">Mauris</a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="column one-fifth">
                        <aside class="widget widget_text">
                            <div class="textwidget">
                                <ul style="line-height: 40px; font-weight: 700;">
                                    <li>
                                        <a href="#">Vivamus</a>
                                    </li>
                                    <li>
                                        <a href="#">Etiam commodo</a>
                                    </li>
                                    <li>
                                        <a href="#">Morbi</a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="column one-fifth">
                        <aside id="text-6" class="widget widget_text">
                            <div class="textwidget">
                                <p>
                                    Follow us:
                                </p><a href="#" class="icon_bar  icon_bar_small"><span class="t"><i class="icon-facebook"></i></span><span class="b"><i class="icon-facebook"></i></span></a><a href="#" class="icon_bar  icon_bar_small"><span class="t"><i class="icon-gplus"></i></span><span class="b"><i class="icon-gplus"></i></span></a><a href="#" class="icon_bar  icon_bar_small"><span class="t"><i class="icon-twitter"></i></span><span class="b"><i class="icon-twitter"></i></span></a>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="footer_copy">
                <div class="container">
                    <div class="column one">
                        <a id="back_to_top" class="button button_left button_js" href="#"><span class="button_icon"><i class="icon-up-open-big"></i></span></a>
                        <div class="copyright">
                            &copy; Nordia's Soaps <a target="_blank" rel="nofollow" href="http://bit.ly/1M6lijQ">BeantownThemes</a>
                        </div>
                        <ul class="social"></ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- JS -->
    <script src="../../js/jquery-2.1.4.min.js"></script>

    <script src="../../js/mfn.menu.js"></script>
    <script src="../../js/jquery.plugins.js"></script>
    <script src="../../js/jquery.jplayer.min.js"></script>
    <script src="../../js/animations/animations.js"></script>
    <script src="../../js/scripts.js"></script>

    <script id="mfn-dnmc-retina-js">
        jQuery(window).load(function() {
            var retina = window.devicePixelRatio > 1 ? true : false;
            if (retina) {
                var retinaEl = jQuery("#logo img.logo-main");
                var retinaLogoW = retinaEl.width();
                var retinaLogoH = retinaEl.height();
                retinaEl.attr("src", "../content/herbal/images/retina-herbal.png").width(retinaLogoW).height(retinaLogoH);
                var stickyEl = jQuery("#logo img.logo-sticky");
                var stickyLogoW = stickyEl.width();
                var stickyLogoH = stickyEl.height();
                stickyEl.attr("src", "../content/herbal/images/retina-herbal.png").width(stickyLogoW).height(stickyLogoH);
                var mobileEl = jQuery("#logo img.logo-mobile");
                var mobileLogoW = mobileEl.width();
                var mobileLogoH = mobileEl.height();
                mobileEl.attr("src", "../content/herbal/images/retina-herbal.png").width(mobileLogoW).height(mobileLogoH);
            }
        });
    </script>
</body>

</html>