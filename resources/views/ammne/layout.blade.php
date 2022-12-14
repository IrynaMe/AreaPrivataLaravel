<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TEST SMTP</title>

    <link rel="stylesheet" href="{{ url('tema/css/bootstrap.min.css') }}">
    <!-- Latest compiled and minified CSS -->

    {{-- <link rel="stylesheet" href="tema/css/style.css"> --}}
    <link rel="stylesheet" href="{{ url('/tema/css/style.css') }}">

    <link rel="stylesheet" href="{{ url('tema/css/style_contatti.css') }}">
    <link rel="stylesheet" href="{{ url('tema/css/style_menu.css') }}">
    <link rel="stylesheet" href="{{ url('tema/css/style_log.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

    <!--plug in di fancybox e flexslider-->
    <!--
<link rel="stylesheet" href="plugin/flexslider/css/flexslider.css" type="text/css">
<link rel="stylesheet" href="plugin/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->




    <script src="{{ url('tema/js/jquery-2.1.1.js') }}"></script>
    <script src="{{ url('tema/js/bootstrap.min.js') }}"></script>



</head>

<body>
    <br>
    <div class="container">
        <div class="row">

        </div>
    </div>
    <br>

    @yield('content')


    <div class="container">

        <br>
        <div class="col-md-12">
            <div class="col-md-4 col-xs-6 col-sm-4">


                <img src="{{ url('tema/img/logo/logo1.jpg') }}" width="60" height="70" alt=""
                    style="float: left;margin-right: 30px;" class="thumbnail">

                <p>Imparare<br><a href="#">Web</a></p>
                <a href="mailto:bollinilivio@gmail.com">Contattaci</a>
            </div>

            <div class="col-md-4 hidden-xs col-sm-4">

                <p style="margin-left: 40px;">Menu</p>


            </div>
            <div class="col-md-4 col-xs-6 col-sm-4 text-left">
                <br>
                <img src="{{ url('tema/img/logo/web.jpg') }}" width="70" height="60" alt=""
                    style="float: left;margin-right: 30px;" class="thumbnail">
                sito realizzato da <br>
                <a href="">web per il marketing
                </a> <br>
                <br>
                ?? Copyright.
                Tutti i diritti riervati


            </div>

        </div>

    </div>

    </div>



</body>



<!--flexslider per fotografia -->
<!--
<script src="plugin/flexslider/js/jquery.flexslider.js"></script>
<script src="js/flex.js"></script>
-->

<!--carosello foto-->
<!--
<script src="plugin/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script src="js/fancy.js"></script>
-->
<script src="{{ url('tema/js/jquery-2.1.1.js') }}"></script>
<script src="{{ url('tema/js/control_reg.js') }}"></script>
<script src="{{ url('tema/js/control_log.js') }}"></script>
<script src="{{ url('tema/js/control_mail.js') }}"></script>

<!-- film di Ajax https://www.youtube.com/watch?v=RmibuT2JsnM-->
{{-- <script type="text/javascript">
    $("#psw_log,#email_log").on("keyup", verificata);

    function verificata() {

        var contenuto = $("#psw_log").val();
        var email_log = $("#email_log").val();

        $.ajax({
            type: "GET",
            cache: false, // disabilita caching ajax       
            url: "signup/psw_usr.php",
            //data: "psw_log=" + contenuto
            data: {
                "psw_log": contenuto,
                "email_log": email_log
            },
            success: mostra

        });

    }

    function mostra(ritorno) {

        if (ritorno == "true") {

            $("#mostra").html(
                "<h4 style='color:white; text-align:center;font-size:25px;text-shadow:3px 3px 3px black'>utente e password  validi</h4>"
            );



        }
        if (ritorno == "non true") {

            $("#mostra").html(
                "<h5 style='color:white; text-align:center;font-size:19px;text-shadow:13px 13px 13px black'>utente e/o password non validi</h5>"
            );






        }
    }
</script> --}}


</html>
