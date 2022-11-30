<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
    <title>Go Travel a Travel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <link href={{ 'tema/css/bootstrap.css' }} rel="stylesheet" type="text/css" media="all">

    <link href={{ 'tema/css/style.css' }} rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Go Travel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href={{ 'tema/fonts.googleapis.com/css?family=Italiana' }} rel='stylesheet' type='text/css'>
    <script src="tema/js/jquery-1.11.1.min.js"></script>
    <link
        href={{ 'tema/fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' }}
        rel='stylesheet' type='text/css'>
    <link href={{ 'tema/fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300,700' }} rel='stylesheet'
        type='text/css'>
    <link rel="stylesheet" href={{ 'tema/css/font-awesome.min.css' }} />

    <script src={{ 'tema/js/bootstrap.js' }}></script>
    <script src={{ 'tema/js/responsiveslides.min.js' }}></script>
    {{-- -------------------links from ecommerce-------------- --}}
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords"
    content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
 --}}
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
</script>
    <!-- //for-mobile-apps -->

    <link href="{{ 'tema/payments_styles/css/bootstrap.css' }}" rel="stylesheet" type="text/css" media="all" />
    <link href=" {{ 'tema/payments_styles/css/style.css' }}" rel=" stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="{{ 'tema/payments_styles/css/font-awesome.css' }}" rel="stylesheet" type="text/css" media="all" />
    <!-- //font-awesome icons -->

    <link href={{ '//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' }}
        rel='stylesheet' type='text/css'>
    <link
        href={{ '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' }}
        rel='stylesheet' type='text/css'>

    {{-- ---------------------from layout ecommerce---------- --}}
    <script src={{ '/tema/payments_styles/js/jquery-1.11.1.min.js' }}></script>
    <!-- //js -->
    {{-- <link
href='tema/payments_styles/fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic'
rel='stylesheet' type='text/css'>
<link
href='tema/payments_styles/fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
rel='stylesheet' type='text/css'> --}}
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src={{ '/tema/payments_styles/js/move-top.js' }}></script>
    <script type="text/javascript" src={{ '/tema/payments_styles/js/easing.js' }}></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>

    {{-- -------------------end links from ecommerce-------------- --}}



    <script>
        $(function() {
            $("#slider").responsiveSlides({
                auto: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                pager: true,
            });
        });
    </script>

</head>



@yield('content')



<!--footer-->
<div class="footer-section-wthree-agile">
    <div class="container">
        <div class="social-icons">
            <a href="#"><i class="icon1"></i></a>
            <a href="#"><i class="icon2"></i></a>
            <a href="#"><i class="icon3"></i></a>
            <a href="#"><i class="icon4"></i></a>
        </div>
        <div class="footer-top-w3ls-agileits">
            <p>&copy; 2017 Go Travel. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
        </div>
    </div>
</div>
<!--footer-->
</body>

</html>
