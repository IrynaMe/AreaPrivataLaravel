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
                        <li><a href={{ '/cart' }}>Cart</a></li>
                        <li><a href={{ '/areaUtenti' }}>Account</a></li>

                        {{--                        <li class="dropdown">
                            <a href="gallery.html" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="codes.html">Codes</a></li>
                                <li><a href="icons.html">Font Icons</a></li>
                            </ul>
                        </li> 

                        <li><a href="contact.html">Contact</a></li> --}}
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
