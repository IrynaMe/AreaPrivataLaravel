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

    <br>
    <div class="global-container">
        <div class="card login-form" style="text-align:center; margin: 0 auto; width:40%;">
            <div class="card-body">
                <div class="service w3layouts-agileits">
                    <h3 style="text-align:center;">Login as admin</h3>
                </div>
                {{--                 <h3 class="card-title text-center">
                    Login as Admin</h3> --}}

                <div class="card-text">
                    <form action="/loginAmmre" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email_log">Email</label>
                            <input type="email" class="form-control form-control-sm" id="email_log" name="email">
                        </div>
                        <div class="form-group">
                            <label for="psw_log">Password</label>

                            <input type="password" class="form-control form-control-sm" id="psw_log" name="password">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" onclick="showPassword()">
                            <label class="form-check-label" for="exampleCheck1">
                                Show Password</label>
                        </div>
                        <button type="submit" class="btn btn-info btn-block">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>



    <script>
        function showPassword() {
            var x = document.getElementById("psw_log");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
