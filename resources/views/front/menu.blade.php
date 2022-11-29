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
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <div class="col-9">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="active"><a href={{ '/' }}>Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li><a href={{ '/about' }}>About</a></li>
                        <li><a href={{ '/services' }}>Services</a></li>
                        <li><a href={{ '/cart' }}>Cart <span
                                    style="margin: 15px 0 0 -5px; padding:5px 10px;background-color:orange; color:white; 
                        border-radius:50%">
                                    {{ Session::has('cart') ? Session::get('cart')->totalQty : 0 }}</span></a></li>

                        {{--                         <li class="dropdown profile_details_drop">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Account <i class="fa fa-user"
                                    aria-hidden="true"></i><span class="caret"></span></a>
                            <ul class="dropdown-menu"> --}}
                        <li><a href={{ '/contatti' }}>Contatti</a></li>
                        @if (Session::has('Customer'))
                            <li><a href={{ '/logoutUser' }}>Logout</a></li>
                        @else
                            {{--   <li><a href={{ '/loginUser' }}>Login</a></li> --}}
                            <li><a class="modalLogin" style="cursor: pointer" data-toggle="modal"
                                    data-target="#modalLogin">Login</a> </li>
                        @endif
                        {{--                             </ul>
                        </li> --}}

                    </ul>
                </div>
                <div class="col-3">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href={{ '/login' }}>Admin </a>
                        </li>
                    </ul>
                </div>


            </div><!-- /.navbar-collapse -->
        </div>
    </div><!-- /.container-fluid -->
</nav>





{{-- ---------------------Login Modal----------------- --}}

<div id="modalLogin" name="modalLogin" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login if you already have an account or register a new account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

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
                        <h4> {{ Session::get('status') }}</h4>
                        {{ Session::now('status', null) }}
                    </div>
                @endif
                <div class="container">
                    <div class="row ">
                        <div class="col-md-6 " style="margin-top:2%">
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
                                            <div class="input-group-addon"><span
                                                    class="glyphicon glyphicon-envelope"></span>
                                            </div>
                                            <input type="email" class="form-control" id="email_log" value=""
                                                placeholder="email" name="email">
                                        </div>
                                    </div>
                                    <!-- email field -->
                                    <div class="form-group">
                                        <div id="emailError" class="sr-only" role="alert"></div>
                                        <label for="form-email-field" class="sr-only">Password</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><span
                                                    class="glyphicon glyphicon-lock"></span></div>
                                            <input type="password" class="form-control" id="password" value=""
                                                placeholder="your password" name="password">
                                        </div>
                                    </div>

                                    <div class="checkbox">
                                        <label id="label">
                                            <input type="checkbox" id="checkbox-form" onclick="showPassword()">Show
                                            password
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
                                    <h2><a class="modalReg" style="cursor: pointer" data-toggle="modal"
                                            data-target="#modalReg">Register a
                                            new account</a>
                                        {{--                                         <a href={{ '/registrati' }}
                                            style="color:rgb(62, 56, 76); text-align:center; !important;">Register a
                                            new account</a> --}}
                                    </h2>


                                    <br>
                                </div>



                                <br>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
            {{--             <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div> --}}
        </div>
    </div>
</div>



{{-- ----------------modal register--------- --}}
<div id="modalReg" name="modalReg"class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
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
                                    <h4 id="register" style="color:rgb(62, 56, 76); text-align:center;">All fields
                                        are mandatory</h4>
                                    <br>
                                    <form role="form" onsubmit="return checkForm_reg(this);"
                                        action="/registraUtente" method="post">
                                        @csrf
                                        <!-- Campo per il nome -->
                                        <div class="form-group">
                                            <div id="emailError" class="sr-only" role="alert"></div>
                                            <label for="form-email-field" class="sr-only">Name</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><span
                                                        class="glyphicon glyphicon-sunglasses"
                                                        style="width:15px;height:15px;"></span></div>
                                                <input type="text" class="form-control" id="name_reg"
                                                    value="" placeholder="your name" name="name_reg">
                                            </div>
                                        </div>
                                        <!-- email field -->
                                        <div class="form-group">
                                            <div id="nameError" class="sr-only" role="alert"></div>
                                            <label for="form-name-field" class="sr-only">email</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><span
                                                        class="glyphicon glyphicon-envelope"></span>
                                                </div>
                                                <input type="text" class="form-control" id="email_reg"
                                                    value="" placeholder="your email" name="email_reg">

                                            </div>
                                        </div>
                                        <!-- password field -->
                                        <div class="form-group">
                                            <div id="emailError" class="sr-only" role="alert"></div>
                                            <label for="form-email-field" class="sr-only">Password</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><span
                                                        class="glyphicon glyphicon-lock"></span></div>
                                                <input type="password" class="form-control" id="psw_reg"
                                                    value="" placeholder="password" name="psw_reg">
                                            </div>
                                        </div>
                                        <div class="checkbox">
                                            <label id="label">
                                                <input type="checkbox" id="checkbox-form"
                                                    onclick="showPassword()">Show Password
                                            </label>
                                        </div>




                                        <div class="checkbox">
                                            <label id="label">
                                                <input type="checkbox" id="checkbox-form-pp" value="si"
                                                    name="checkbox-form" required>Accept
                                                Privacy Policy</label>
                                        </div>

                                        <button type="submit" class="btn btn-success btn-block">REGISTER</button>
                                    </form>
                                    <div class="text-center">
                                        <br>
                                        <h2><a href="{{ url('/') }}"
                                                style="color:rgb(62, 56, 76) !important;">Login if you
                                                already have an account</a></h2>
                                        <br>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{--         <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div> --}}
    </div>
</div>
</div>
