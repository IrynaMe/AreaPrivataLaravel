@extends('front/layout')
<div class="header banr">
    <div class="container">
        <div class="header-top">
            @include('front.menu')
        </div>
    </div>
</div>
@section('content')
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
                        <form action="/registraUtente" method="post">
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
                                    <input type="checkbox" id="checkbox-form" onclick="showPassword()">Show Password
                                </label>
                            </div>




                            <div class="checkbox">
                                <label id="label">
                                    <input type="checkbox" id="checkbox-form" value="si" name="checkbox-form">Accept
                                    Privacy Policy</label>
                            </div>
                            <button type="submit" class="btn btn-success btn-block">LOGIN</button>
                        </form>
                        <div class="text-center">
                            <br>
                            <h2><a href="{{ url('/') }}" style="color:rgb(62, 56, 76) !important;">Login if you already
                                    have account</a></h2>
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
