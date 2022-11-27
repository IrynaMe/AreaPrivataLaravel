@extends('front/layout')
<div class="header banr">
    <div class="container">
        <div class="header-top">
            @include('front.menu')
        </div>
    </div>
</div>
@section('content')
    @if ($errors->any())
        <div class="alert alert-warning" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    @endif

    @if (Session::has('url'))
        {{--         {{ Session::get('url') }} --}}
        {{ Session::get('url') }}

        <input type="hidden" value="/{{ Session('url') }}" name="url_name" id="url_name">

        {{--  <input type="text" value="{{ Session('url') }}" name="url_name" id="url_name">
        {{ Session::get('url') }} --}}
        {{ Session::put('url'), null }}
    @endif
    @if (Session::has('status'))
        <div class="alert alert-warning" role="alert">
            <h4> {{ Session::get('status') }}</h4>
            {{ Session::now('status', null) }}
        </div>
    @endif
    <div class="container">
        <div class="row ">
            <div class="col-md-6  col-md-offset-3" style="margin-top:2%">
                <div class="form-box">
                    <h1 style="color:rgb(62, 56, 76); text-align:center;" id="log">Login</h1>
                    <br>


                    <form role="form" id="contact-form" action="/accesso" method="post"
                        onsubmit="return checkForm_log(this)">
                        @csrf

                        <!-- name field -->
                        <div class="form-group">
                            <div id="nameError" class="sr-only" role="alert"></div>
                            <label for="form-name-field" class="sr-only">Email</label>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </div>
                                <input type="email" class="form-control" id="email_log" value="" placeholder="email"
                                    name="email">
                            </div>
                        </div>
                        <!-- email field -->
                        <div class="form-group">
                            <div id="emailError" class="sr-only" role="alert"></div>
                            <label for="form-email-field" class="sr-only">Password</label>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                                <input type="password" class="form-control" id="password" value=""
                                    placeholder="your password" name="password">
                            </div>
                        </div>

                        <div class="checkbox">
                            <label id="label">
                                <input type="checkbox" id="checkbox-form" onclick="showPassword()">Show password
                            </label>
                        </div>

                        <div class="checkbox">
                            <label id="label">
                                <input type="checkbox" id="checkbox-form-pp">Accept Privacy Policy </label>
                        </div>
                        <br>

                        <br>
                        <button type="submit" class="btn btn-success btn-block">Submit</button>

                    </form>

                    <div class="text-center">
                        <h2><a href={{ '/registrati' }}
                                style="color:rgb(62, 56, 76); text-align:center; !important;">Register a
                                new account</a>
                        </h2>
                        <br>
                    </div>



                    <br>
                </div>
            </div>

        </div>
    </div>
@endsection
<script>
    function showPassword() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }


    function checkForm_log(form) {
        /*  if (form.email.value == "") {
            alert("Errore: la email non puo' essere bianca!");

            return false;
        }

        re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        //    re = /^\w+$/;
        if (!re.test(form.email.value)) {
            alert("Error: la email deve essere scritta correttamente!");

            return false;
        }

        if (form.password.value != "") {
            if (form.psw_log.value.length < 6) {
                alert("Error: la password deve contenere almeno sei caratteri!");

                return false;
            }

            //      re = /[0-9]/;
            //      if(!re.test(form.psw_log.value)) {
            //        alert("Errore: la password deve contenere almeno un numero (0-9)!");
            //
            //        return false;
            //      }
            re = /[a-z]/;
            if (!re.test(form.password.value)) {
                alert("Errore: password deve contenere almeno una lettera minuscola!");

                return false;
            }
            re = /[A-Z]/;
            if (!re.test(form.password.value)) {
                alert("Errore: password deve contenere almeno una lettera maiuscola (A-Z)!");

                return false;
            }
        } else {
            alert("Errore: Controlla se hai inserito una password valida!");

            return false;
        }
 */
        // checkbox
        var checkBox = document.getElementById("checkbox-form-pp");
        // checkbox è checked?
        if (checkBox.checked !== true) {
            alert("Error: You must accept the Privacy Policy!");

            return false;
        }
    }
</script>
