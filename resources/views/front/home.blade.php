@extends('front.layout')
@section('content')

    <body>

        <!--header-->
        <div class="header" style="background:url(tema/images/banner_10.jpg) no-repeat 0px 0px">
            <div class="container">
                <div class="header-top">
                    @include('front.menu')
                    {{-- Navbar moved to menu --}}

                </div>

                {{--                 <div class="slider">
                    <div class="callbacks_container">
                        <ul class="rslides" id="slider">
                            <li>
                                <div class="caption">
                                    <h3>Adventure is <span>worthwhile</span> </h3>
                                </div>
                            </li>
                            <li>
                                <div class="caption">
                                    <h3>Take Your <span>Dream</span> </h3>
                                </div>
                            </li>
                            <li>
                                <div class="caption">
                                    <h3>Adventure is <span>worthwhile</span> </h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
        <!--header-->

        <!--about-->
        <div class="content w3layouts-agileinfo">
            <div class="about wthree-agile">
                <div class="container">
                    <div class="header-bottom">
                        <div class="header-grids w3ls-agileits">
                            <div class="col-md-4 header-grid">
                                <div class="header-bg">
                                    <img src={{ 'tema/images/p1.jpg' }} class="img-responsive" alt="">
                                    <h4>Beautiful places </h4>
                                    {{--                                     <p>Cras consequat iaculis lorem, id vehicula erat mattis quis. Vivamus laoreet velit
                                        justo, in ven e natis purus.</p> --}}
                                </div>
                            </div>
                            <div class="col-md-4 header-grid">
                                <div class="header-bg">
                                    <img src={{ 'tema/images/p2.jpg' }} class="img-responsive" alt="">
                                    <h4>Comfortable hotels</h4>
                                    {{--                                     <p>Cras consequat iaculis lorem, id vehicula erat mattis quis. Vivamus laoreet velit
                                        justo, in ven e natis purus.</p> --}}
                                </div>
                            </div>
                            <div class="col-md-4 header-grid">
                                <div class="header-bg">
                                    <img src={{ 'tema/images/p3.jpg' }} class="img-responsive" alt="">
                                    <h4>Good services</h4>
                                    {{--                                     <p>Cras consequat iaculis lorem, id vehicula erat mattis quis. Vivamus laoreet velit
                                        justo, in ven e natis purus.</p> --}}
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <h2>About</h2>
                    <div class="about-grids">
                        <div class="col-md-6 about-grid">
                            <div class="about-grid-left">
                                <h4>Mark Johnson </h4>
                                <p>Adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
                                    magnam aliquam quaerat voluptatem</p>
                            </div>
                            <div class="about-grid-right">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="col-md-6 about-grid">
                            <div class="about-grid-right aliquam">
                                <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
                            </div>
                            <div class="about-grid-left non">
                                <h4>Olivia Grosh </h4>
                                <p>Adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
                                    magnam aliquam quaerat voluptatem</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="about-grids w3layouts-agileinfo">
                        <div class="col-md-6 about-grid">
                            <div class="about-grid-left">
                                <h4>Caroline Beek</h4>
                                <p>Adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
                                    magnam aliquam quaerat voluptatem</p>
                            </div>
                            <div class="about-grid-right">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="col-md-6 about-grid">
                            <div class="about-grid-right aliquam">
                                <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                            </div>
                            <div class="about-grid-left non">
                                <h4>Sam Kromstain</h4>
                                <p>Adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
                                    magnam aliquam quaerat voluptatem</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <!--about-->
            <div class="student w3layouts-agileinfo">
                <div class="container">
                    <h3>Best Promotions</h3>
                    <div class="student-grids w3ls-agileits">
                        <div class="col-md-4 student-grid">
                            <img src="tema/images/p4.jpg" class="img-responsive" alt="">
                            <h4>Tour 1</h4>
                            <p>Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque
                                purus, sollic alitudin non ante ac, malesuada. condimentum libero.</p>
                        </div>
                        <div class="col-md-4 student-grid">
                            <img src="tema/images/p5.jpg" class="img-responsive" alt="">
                            <h4>Tour 2</h4>
                            <p>Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque
                                purus, sollic alitudin non ante ac, malesuada. condimentum libero.</p>
                        </div>
                        <div class="col-md-4 student-grid">
                            <img src="tema/images/p6.jpg" class="img-responsive" alt="">
                            <h4>Tour 3</h4>
                            <p>Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque
                                purus, sollic alitudin non ante ac, malesuada. condimentum libero.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!--services-->
            <div class="new-course w3layouts-agileinfo">
                <div class="container">
                    <h3>Top Destinations</h3>
                    <div class="new-course-grids">
                        <div class="col-md-6 new-course-grid">
                            <img src="tema/images/p7.jpg" class="img-responsive" alt="" />
                            <div class="course-info">
                                <h4>Encididunt Ut</h4>
                                <p>Mauris fermentum tortor non enim aliquet condimentum nam aliquam pretium feugiat duis sem
                                    est viverra eu interdum ac.</p>
                            </div>
                        </div>
                        <div class="col-md-6 new-course-grid">
                            <img src="tema/images/p8.jpg" class="img-responsive" alt="" />
                            <div class="course-info">
                                <h4>Condimentum</h4>
                                <p>Mauris fermentum tortor non enim aliquet condimentum nam aliquam pretium feugiat duis sem
                                    est viverra eu interdum ac.</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="new-course-grids1">
                        <div class="col-md-6 new-course-grid">
                            <img src="tema/images/p9.jpg" class="img-responsive" alt="" />
                            <div class="course-info">
                                <h4>Encididunt Ut</h4>
                                <p>Mauris fermentum tortor non enim aliquet condimentum nam aliquam pretium feugiat duis sem
                                    est viverra eu interdum ac.</p>
                            </div>
                        </div>
                        <div class="col-md-6 new-course-grid">
                            <img src="tema/images/p10.jpg" class="img-responsive" alt="" />
                            <div class="course-info">
                                <h4>Magna Aliqua</h4>
                                <p>Mauris fermentum tortor non enim aliquet condimentum nam aliquam pretium feugiat duis sem
                                    est viverra eu interdum ac.</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!--services-->
            <div class="testimonial w3layouts-agileinfo">
                <div class="container">
                    <div class="testimonial-grids w3ls-agileits">
                        <div class="col-md-4 testimonial-grid">
                            <h3>Testimonials</h3>
                            <div class="testimonial-info">
                                <p><span>"</span> Quisque varius, nibh ac feugiat interdum, libero massa laoreet tellus, nec
                                    congue lorem arcu a nunc. Praesent quis felis eget</p>
                                <h5>EMMA S.</h5>
                            </div>
                            <div class="testimonial-info">
                                <p><span>" </span> Vestibulum et consequat justo. Maecenas ultrices malesuada leo porta
                                    venenatis. Sed sit amet diam facilisis, interdum tellus nec</p>
                                <h5>JOHN D.</h5>
                            </div>
                            <div class="testimonial-info">
                                <p><span>" </span> Cras elementum sed mi sit amet ullamcorper. Cras sed felis a enim rutrum
                                    lobortis a eu nisi. Curabitur justo libero, hendrerit at</p>
                                <h5>EMMA S.</h5>
                            </div>
                        </div>
                        <div class="col-md-8 testimonial-grid-right">
                            <h3>Latest Offers</h3>
                            <div class="Works-grids">
                                <div class="col-md-4 Works-grid">
                                    <img src="tema/images/e1.jpg" class="img-responsive" alt="" />
                                    <p>Kasertas lertyasea deeraeser miasera lertasa ritise doloert ferdas caplicabo nerafaes
                                        asety u lasec vaserat.</p>
                                </div>
                                <div class="col-md-4 Works-grid">
                                    <img src="tema/images/e2.jpg" class="img-responsive" alt="" />
                                    <p>Kasertas lertyasea deeraeser miasera lertasa ritise doloert ferdas caplicabo nerafaes
                                        asety u lasec vaserat.</p>
                                </div>
                                <div class="col-md-4 Works-grid">
                                    <img src="tema/images/e3.jpg" class="img-responsive" alt="" />
                                    <p>Kasertas lertyasea deeraeser miasera lertasa ritise doloert ferdas caplicabo nerafaes
                                        asety u lasec vaserat.</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
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
