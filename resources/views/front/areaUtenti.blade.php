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
    <div class="container">
        <div class="row ">
            <div class="col-md-6  col-md-offset-3" style="margin-top:2%">
                <div class="form-box">
                    <h1 style="color:rgb(62, 56, 76); text-align:center;" id="log">Login</h1>
                    <br>


                    <form role="form" id="contact-form" action="/accesso" method="post">
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
                                <input type="checkbox" id="checkbox-form">Accept Privacy Policy </label>
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
</script>
