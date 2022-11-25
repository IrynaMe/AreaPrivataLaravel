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
                        @if (Session::has('Customer'))
                            <li><a href={{ '/logoutUser' }}>Logout</a></li>
                        @else
                            <li><a href={{ '/areaUtenti' }}>Login</a></li>
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
