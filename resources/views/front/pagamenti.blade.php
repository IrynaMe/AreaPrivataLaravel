@extends('front/paym_layout')
<div class="header banr">
    <div class="container">
        <div class="header-top">




            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="navbar-brand">
                                <h1><a href="index.html"><span>Go</span> Travel</a></h1>
                            </div>
                        </div>

                    </div>
                    <br>
                    <br>


                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="row">
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"
                            style="border: 1px solid transparent; !important">

                            <div class="col-9">
                                <ul class="nav navbar-nav navbar-left"
                                    style="border: 1px solid transparent; !important">
                                    <li class="active" style="border: 1px solid transparent; !important"><a
                                            style="border: 1px solid transparent; !important"
                                            href={{ '/' }}>Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li><a style="border: 1px solid transparent; !important"
                                            href={{ '/about' }}>About</a></li>
                                    <li><a style="border: 1px solid transparent; !important"
                                            href={{ '/services' }}>Services</a></li>
                                    <li><a style="border: 1px solid transparent; !important"
                                            href={{ '/cart' }}>Cart <span
                                                style="margin: 15px 0 0 -5px; padding:5px 10px;background-color:orange; color:white; 
                                    border-radius:50%">
                                                {{ Session::has('cart') ? Session::get('cart')->totalQty : 0 }}</span></a>
                                    </li>

                                    {{--                         <li class="dropdown profile_details_drop">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                            aria-haspopup="true" aria-expanded="false">Account <i class="fa fa-user"
                                                aria-hidden="true"></i><span class="caret"></span></a>
                                        <ul class="dropdown-menu"> --}}
                                    <li><a style="border: 1px solid transparent; !important"
                                            href={{ '/contatti' }}>Contatti</a></li>
                                    @if (Session::has('Customer'))
                                        <li><a style="border: 1px solid transparent; !important"
                                                href={{ '/logoutUser' }}>Logout</a></li>
                                    @else
                                        <li><a style="border: 1px solid transparent; !important"
                                                href={{ '/loginUser' }}>Login</a></li>
                                    @endif
                                    {{--                             </ul>
                                    </li> --}}

                                </ul>
                            </div>
                            <div class="col-3">
                                <ul class="nav navbar-nav navbar-right"
                                    style="border: 1px solid transparent; !important">
                                    <li><a style="border: 1px solid transparent; !important"
                                            href={{ '/login' }}>Admin </a>
                                    </li>
                                </ul>
                            </div>


                        </div><!-- /.navbar-collapse -->
                    </div>
                </div><!-- /.container-fluid -->
            </nav>






        </div>
    </div>
</div>
@section('content')
    <div class="w3l_banner_nav_right" style="width:100%; margin:0 auto; text-align:center; !important">
        <!-- payment -->
        <div class="privacy" style="width:100%; margin:0 auto; text-align:center; !important">
            <h3 style="margin-bottom:30px; !important">Pay<span>ment</span></h3>

            <div class="checkout-right" style="width:100%; margin:0 auto; text-align:center; !important">
                <!--Horizontal Tab-->
                <div id="parentHorizontalTab" style="display: block; width: 100%; margin: 0px;">
                    <ul class="resp-tabs-list hor_1">
                        <li class="resp-tab-item hor_1 resp-tab-active" aria-controls="hor_1_tab_item-0" role="tab"
                            style="background-color: white; border-color: rgb(193, 193, 193);">Cash on delivery (COD)
                        </li>
                        <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-1" role="tab"
                            style="background-color: rgb(245, 245, 245);">Credit/Debit</li>
                        <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-2" role="tab"
                            style="background-color: rgb(245, 245, 245);">Netbanking</li>
                        <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-3" role="tab"
                            style="background-color: rgb(245, 245, 245);">Paypal Account</li>
                    </ul>

                    <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193);">

                        <h2 class="resp-accordion hor_1 resp-tab-active" role="tab" aria-controls="hor_1_tab_item-0"
                            style="background: none; border-color: rgb(193, 193, 193);"><span class="resp-arrow"></span>Cash
                            on delivery (COD)</h2>
                        <div class="resp-tab-content hor_1 resp-tab-content-active" aria-labelledby="hor_1_tab_item-0"
                            style="display:block">
                            <div class="vertical_post check_box_agile">
                                <h5>COD</h5>
                                <div class="checkbox">
                                    <div class="check_box_one cashon_delivery">
                                        <label class="anim">
                                            <input type="checkbox" class="checkbox">
                                            <span> We also accept Credit/Debit card on delivery. Please Check with
                                                the agent.</span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-1"
                            style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);"><span
                                class="resp-arrow"></span>Credit/Debit</h2>
                        <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-1"
                            style="border-color: rgb(193, 193, 193);">
                            <form action="#" method="post" class="creditly-card-form agileinfo_form">
                                <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                                    <div class="credit-card-wrapper">
                                        <div class="first-row form-group">
                                            <div class="controls">
                                                <label class="control-label">Name on Card</label>
                                                <input class="billing-address-name form-control" type="text"
                                                    name="name" placeholder="John Smith">
                                            </div>
                                            <div class="w3_agileits_card_number_grids">
                                                <div class="w3_agileits_card_number_grid_left">
                                                    <div class="controls">
                                                        <label class="control-label">Card Number</label>
                                                        <input class="number credit-card-number form-control"
                                                            type="text" name="number" inputmode="numeric"
                                                            autocomplete="cc-number" autocompletetype="cc-number"
                                                            x-autocompletetype="cc-number"
                                                            placeholder="•••• •••• •••• ••••">
                                                    </div>
                                                </div>
                                                <div class="w3_agileits_card_number_grid_right">
                                                    <div class="controls">
                                                        <label class="control-label">CVV</label>
                                                        <input class="security-code form-control" Â·=""
                                                            inputmode="numeric" type="text" name="security-code"
                                                            placeholder="•••">
                                                    </div>
                                                </div>
                                                <div class="clear"> </div>
                                            </div>
                                            <div class="controls">
                                                <label class="control-label">Expiration Date</label>
                                                <input class="expiration-month-and-year form-control" type="text"
                                                    name="expiration-month-and-year" placeholder="MM / YY">
                                            </div>
                                        </div>
                                        <button class="submit"><span>Make a payment </span></button>
                                    </div>
                                </section>
                            </form>

                        </div>
                        <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-2"
                            style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);"><span
                                class="resp-arrow"></span>Netbanking</h2>
                        <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-2"
                            style="border-color: rgb(193, 193, 193);">
                            <div class="vertical_post">
                                <form action="#" method="post">
                                    <h5>Select From Popular Banks</h5>
                                    <div class="swit-radio">
                                        <div class="check_box_one">
                                            <div class="radio_one"> <label><input type="radio" name="radio"
                                                        checked=""><i></i>Syndicate Bank</label> </div>
                                        </div>
                                        <div class="check_box_one">
                                            <div class="radio_one"> <label><input type="radio"
                                                        name="radio"><i></i>Bank of Baroda</label> </div>
                                        </div>
                                        <div class="check_box_one">
                                            <div class="radio_one"> <label><input type="radio"
                                                        name="radio"><i></i>Canara Bank</label> </div>
                                        </div>
                                        <div class="check_box_one">
                                            <div class="radio_one"> <label><input type="radio"
                                                        name="radio"><i></i>ICICI Bank</label> </div>
                                        </div>
                                        <div class="check_box_one">
                                            <div class="radio_one"> <label><input type="radio"
                                                        name="radio"><i></i>State Bank Of India</label> </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <h5>Or SELECT OTHER BANK</h5>
                                    <div class="section_room_pay">
                                        <select class="year">
                                            <option value="">=== Other Banks ===</option>
                                            <option value="ALB-NA">Allahabad Bank NetBanking</option>
                                            <option value="ADB-NA">Andhra Bank</option>
                                            <option value="BBK-NA">Bank of Bahrain and Kuwait NetBanking</option>
                                            <option value="BBC-NA">Bank of Baroda Corporate NetBanking</option>
                                            <option value="BBR-NA">Bank of Baroda Retail NetBanking</option>
                                            <option value="BOI-NA">Bank of India NetBanking</option>
                                            <option value="BOM-NA">Bank of Maharashtra NetBanking</option>
                                            <option value="CSB-NA">Catholic Syrian Bank NetBanking</option>
                                            <option value="CBI-NA">Central Bank of India</option>
                                            <option value="CUB-NA">City Union Bank NetBanking</option>
                                            <option value="CRP-NA">Corporation Bank</option>
                                            <option value="DBK-NA">Deutsche Bank NetBanking</option>
                                            <option value="DCB-NA">Development Credit Bank</option>
                                            <option value="DC2-NA">Development Credit Bank - Corporate</option>
                                            <option value="DLB-NA">Dhanlaxmi Bank NetBanking</option>
                                            <option value="FBK-NA">Federal Bank NetBanking</option>
                                            <option value="IDS-NA">Indusind Bank NetBanking</option>
                                            <option value="IOB-NA">Indian Overseas Bank</option>
                                            <option value="ING-NA">ING Vysya Bank (now Kotak)</option>
                                            <option value="JKB-NA">Jammu and Kashmir NetBanking</option>
                                            <option value="JSB-NA">Janata Sahakari Bank Limited</option>
                                            <option value="KBL-NA">Karnataka Bank NetBanking</option>
                                            <option value="KVB-NA">Karur Vysya Bank NetBanking</option>
                                            <option value="LVR-NA">Lakshmi Vilas Bank NetBanking</option>
                                            <option value="OBC-NA">Oriental Bank of Commerce NetBanking</option>
                                            <option value="CPN-NA">PNB Corporate NetBanking</option>
                                            <option value="PNB-NA">PNB NetBanking</option>
                                            <option value="RSD-DIRECT">Rajasthan State Co-operative Bank-Debit Card
                                            </option>
                                            <option value="RBS-NA">RBS (The Royal Bank of Scotland)</option>
                                            <option value="SWB-NA">Saraswat Bank NetBanking</option>
                                            <option value="SBJ-NA">SB Bikaner and Jaipur NetBanking</option>
                                            <option value="SBH-NA">SB Hyderabad NetBanking</option>
                                            <option value="SBM-NA">SB Mysore NetBanking</option>
                                            <option value="SBT-NA">SB Travancore NetBanking</option>
                                            <option value="SVC-NA">Shamrao Vitthal Co-operative Bank</option>
                                            <option value="SIB-NA">South Indian Bank NetBanking</option>
                                            <option value="SBP-NA">State Bank of Patiala NetBanking</option>
                                            <option value="SYD-NA">Syndicate Bank NetBanking</option>
                                            <option value="TNC-NA">Tamil Nadu State Co-operative Bank NetBanking
                                            </option>
                                            <option value="UCO-NA">UCO Bank NetBanking</option>
                                            <option value="UBI-NA">Union Bank NetBanking</option>
                                            <option value="UNI-NA">United Bank of India NetBanking</option>
                                            <option value="VJB-NA">Vijaya Bank NetBanking</option>
                                        </select>
                                    </div>
                                    <input type="submit" value="PAY NOW">
                                </form>
                            </div>
                        </div>
                        <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-3"
                            style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);"><span
                                class="resp-arrow"></span>Paypal Account</h2>
                        <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-3"
                            style="border-color: rgb(193, 193, 193);">
                            <div id="tab4" class="tab-grid" style="display: block;">
                                <div class="row">
                                    <div class="col-md-6">

                                        <p>Important: You will be redirected to PayPal's website to securely
                                            complete your payment.</p>
                                        @include('front/Paypal')

                                    </div>
                                    <div class="col-md-6">
                                        <h3>Complete order</h3>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>


                </div>

                <!--Plug-in Initialisation-->

                <!-- // Pay -->

            </div>

        </div>
        <!-- //payment -->
    </div>
    <div class="clearfix"></div>




    <script src=" {{ 'tema/payments_styles/js/jquery-1.11.1.min.js' }}"></script>
    <!-- easy-responsive-tabs -->
    <link rel="stylesheet" type="text/css" href="{{ 'tema/payments_styles/css/easy-responsive-tabs.css' }} " />
    <script src="{{ 'tema/payments_styles/js/easyResponsiveTabs.js' }}"></script>
    <!-- //easy-responsive-tabs -->
    <script type="text/javascript">
        $(document).ready(function() {
            //Horizontal Tab
            $('#parentHorizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                tabidentify: 'hor_1', // The tab groups identifier
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
        });
    </script>
    <!-- credit-card -->
    {{-- <script type="text/javascript" src="js/creditly.js"></script>
        <link rel="stylesheet" href="css/payments_styles/creditly.css" type="text/css" media="all" /> --}}

    {{-- <script type="text/javascript">
			$(function() {
			  var creditly = Creditly.initialize(
				  '.creditly-wrapper .expiration-month-and-year',
				  '.creditly-wrapper .credit-card-number',
				  '.creditly-wrapper .security-code',
				  '.creditly-wrapper .card-type');

			  $(".creditly-card-form .submit").click(function(e) {
				e.preventDefault();
				var output = creditly.validate();
				if (output) {
				  // Your validated credit card output
				  console.log(output);
				}
			  });
			});
		</script> --}}
    <!-- //credit-card -->

    <!-- //js -->
    <!-- script-for sticky-nav -->
    <script>
        $(document).ready(function() {
            var navoffeset = $(".agileits_header").offset().top;
            $(window).scroll(function() {
                var scrollpos = $(window).scrollTop();
                if (scrollpos >= navoffeset) {
                    $(".agileits_header").addClass("fixed");
                } else {
                    $(".agileits_header").removeClass("fixed");
                }
            });

        });
    </script>
    <!-- //script-for sticky-nav -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{ 'tema/payments_styles/js/move-top.js' }}"></script>
    <script type="text/javascript" src="{{ 'tema/payments_styles/js/easing.js' }}"></script>
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
    <!-- start-smoth-scrolling -->
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ 'tema/payments_styles/js/bootstrap.min.js' }}"></script>
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
@endsection
