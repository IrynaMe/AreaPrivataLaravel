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

    @if (Session::has('status'))
        <div class="alert alert-warning" role="alert">
            {{ Session::get('status') }}
            {{ Session::put('status', null) }}
        </div>
    @endif
    <div id="footer">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-6  col-md-offset-3" style="margin-top:2%">
                    <div class="form-box">
                        <br>
                        <h1 style="color:rgb(62, 56, 76); text-align:center;">Register a new account</h1>
                        <br>
                        <h4 id="register" style="color:rgb(62, 56, 76); text-align:center;">All fields are mandatory</h4>
                        <br>
                        <form role="form" onsubmit="return checkForm_reg(this);" action="/registraUtente" method="post">
                            @csrf
                            <!-- Campo per il nome -->
                            <div class="form-group">
                                <div id="emailError" class="sr-only" role="alert"></div>
                                <label for="form-email-field" class="sr-only">Name</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-sunglasses"
                                            style="width:15px;height:15px;"></span></div>
                                    <input type="text" class="form-control" id="name_reg" value=""
                                        placeholder="your name" name="name_reg">
                                </div>
                            </div>
                            <!-- email field -->
                            <div class="form-group">
                                <div id="nameError" class="sr-only" role="alert"></div>
                                <label for="form-name-field" class="sr-only">email</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input type="text" class="form-control" id="email_reg" value=""
                                        placeholder="your email" name="email_reg">

                                </div>
                            </div>
                            <!-- password field -->
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
                                    <input type="checkbox" id="checkbox-form" onclick="showPassword()">Show Password
                                </label>
                            </div>




                            <div class="checkbox">
                                <label id="label">
                                    <input type="checkbox" id="checkbox-form-pp" value="si" name="checkbox-form"
                                        required>Accept
                                    Privacy Policy</label>
                            </div>

                            <button type="submit" class="btn btn-success btn-block">REGISTER</button>
                        </form>
                        <div class="text-center">
                            <br>
                            <h2><a href="{{ url('/') }}" style="color:rgb(62, 56, 76) !important;">Login if you
                                    already have an account</a></h2>
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


    function checkForm_reg(form) {
        if (form.email_reg.value == "") {
            alert("Errore: la email non puo' essere bianca!");

            return false;
        }

        re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

        if (!re.test(form.email_reg.value)) {
            alert("Error: la email deve essere scritta correttamente!");

            return false;
        }

        if (form.psw_reg.value != "") {
            if (form.psw_reg.value.length < 6) {
                alert("Error: la password deve contenere almeno sei caratteri!");

                return false;
            }

            re = /[0-9]/;
            if (!re.test(form.psw_reg.value)) {
                alert("Errore: la password deve contenere almeno un numero (0-9)!");

                return false;
            }
            re = /[a-z]/;
            if (!re.test(form.psw_reg.value)) {
                alert("Errore: password deve contenere almeno una lettera!");
                form.psw_reg.focus();
                return false;
            }
            re = /[A-Z]/;
            if (!re.test(form.psw_reg.value)) {
                alert("Errore: password deve contenere almeno una lettera maiuscola (A-Z)!");

                return false;
            }
        } else {
            alert("Errore: Controlla se hai inserito una password valida!");

            return false;
        }

        // checkbox
        var checkBox = document.getElementById("checkbox-form-pp");
        // checkbox è checked?
        if (checkBox.checked !== true) {
            alert("Errore: Devi accettare la privacy!");

            return false;
        }

        alert("hai inserito una password valida: " + form.psw_reg.value);
        return true;
    }
</script>
