@extends('front/layout')
@section('content')
    <div class="container">

        @include('front.menu')
        {{-- include('Class/Messaggi.php');
$messaggio= new Messaggi();

if (isset($_SESSION['testo'])){

    $messaggio->messaggio();
} --}}


        <div id="footer">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-6  col-md-offset-3" style="margin-top:2%">
                        <div class="form-box">
                            <h1 style="color:white">REGISTRATI</h1>
                            <h4 id="register" style="color:white;">Tutti i campi sono obbligatori</h4>

                            <form action="/registraUtente" method="post">
                                @csrf
                                <!-- Campo per il nome -->
                                <div class="form-group">
                                    <div id="emailError" class="sr-only" role="alert"></div>
                                    <label for="form-email-field" class="sr-only">Nome</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                                        <input type="text" class="form-control" id="name_reg" value=""
                                            placeholder="your name" name="name_reg">
                                    </div>
                                </div>
                                <!-- name field -->
                                <div class="form-group">
                                    <div id="nameError" class="sr-only" role="alert"></div>
                                    <label for="form-name-field" class="sr-only">email</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                        </div>
                                        <input type="text" class="form-control" id="email_reg" value=""
                                            placeholder="email" name="email_reg" required>

                                    </div>
                                </div>
                                <!-- email field -->
                                <div class="form-group">
                                    <div id="emailError" class="sr-only" role="alert"></div>
                                    <label for="form-email-field" class="sr-only">Password</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                                        <input type="password" class="form-control" id="psw_reg" value=""
                                            placeholder="password" name="psw_reg">
                                    </div>
                                </div>
                                <div class="checkbox">
                                    <label id="label">
                                        <input type="checkbox" id="checkbox-form" onclick="showPassword()">Mostra Password
                                    </label>
                                </div>




                                <div class="checkbox">
                                    <label id="label">
                                        <input type="checkbox" id="checkbox-form" value="si"
                                            name="checkbox-form">accetto le regole privacy </label>
                                </div>
                                <button type="submit" class="btn btn-success btn-block">Invia</button>
                            </form>
                            <div class="text-center">
                                <h2><a href="{{ url('/') }}" style="color:white !important;">accedi</a></h2>
                                <br>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection

<script>
    function showPassword() {
        var x = document.getElementById("psw_reg");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
