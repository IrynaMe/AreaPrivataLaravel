{{-- -------------header------------ --}}
<!DOCTYPE HTML>
<html>

<head>
    <title>Go Travel a Travel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <link href={{ '../tema/css/bootstrap.css' }} rel="stylesheet" type="text/css" media="all">

    <link href={{ '../tema/css/style.css' }} rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Go Travel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href={{ '../tema/fonts.googleapis.com/css?family=Italiana' }} rel='stylesheet' type='text/css'>
    <script src={{ '../tema/js/jquery-1.11.1.min.js' }}></script>
    <link
        href={{ '../tema/fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' }}
        rel='stylesheet' type='text/css'>
    <link href={{ '../tema/fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300,700' }} rel='stylesheet'
        type='text/css'>
    <link rel="stylesheet" href={{ '../tema/css/font-awesome.min.css' }} />

    <script src={{ '../tema/js/bootstrap.js' }}></script>
    <script src={{ '../tema/js/responsiveslides.min.js' }}></script>
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

<body>


    {{-- ------------- end header------------ --}}


    {{-- -----------------menu-------------- --}}
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
    {{-- ----------------end menu---------------- --}}

    <br>
    <br>
    <br>




    <div class="container">
        <div class="agileinfo_single">

            <div class="col-md-4 agileinfo_single_left">

                <img style="width:450px;" title="{{ $service->name }}" alt="{{ $service->name }}"
                    src="{{ '../tema/' . $service->image }}" class="img-responsive" id="example" />
            </div>
            <div class="col-md-8 agileinfo_single_right">

                <div class="w3agile_description">
                    <h5>{{ $service->name }}</h5>
                    <h4>Descrizione :</h4>
                    <p>{{ $service->description }}</p>
                </div>
                <div class="snipcart-item block">
                    <div class="snipcart-thumb agileinfo_single_right_snipcart">
                        @if ($service->discount > 0)
                            <p><del style="font-size:12px;color:gray;">
                                    {{ $service->price }} €
                                    <br>
                                    <p>
                                        <b>
                                            scontato a:
                                            {{ $service->discount }} €;

                                        </b>
                                    </p>
                                @else
                                    <br>
                                    prezzo:
                                    {{ $service->price }}. €
                        @endif
                    </div>
                    <div class="snipcart-details
                            agileinfo_single_right_details">
                        <form action="#" method="post">
                            <fieldset>
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" />
                                <input type="hidden" name="service_id" value=" {{ $service->id }}">
                                <input type="submit" name="submit" value="Acquista" class="button" />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>





    <br>
    <br>
    <br>

    <!--footer-->
    <div class="footer-section-wthree-agile" style="width:100% !important;">
        <div class="container">
            <div class="social-icons">
                <a href="#"><i class="icon1"></i></a>
                <a href="#"><i class="icon2"></i></a>
                <a href="#"><i class="icon3"></i></a>
                <a href="#"><i class="icon4"></i></a>
            </div>
            <div class="footer-top-w3ls-agileits">
                <p>&copy; 2017 Go Travel. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a>
                </p>
            </div>
        </div>
    </div>
    <!--footer-->
</body>

</html>
