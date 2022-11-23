@extends('front.layout')
<div class="header banr">
    <div class="container">
        <div class="header-top">
            @include('front.menu')
        </div>
    </div>
</div>
@section('content')
    <div class="content w3layouts-agileits">
        <div class="about-section w3ls-agileits">
            <div class="container">
                <h2>Who We Are</h2>
                <div class="about-info">
                    <h5>ALIQUAM DAPIBUS TINCIDUNT METUS. PRAESENT JUSTO DOLOR, LOBORTIS QUIS, LOBORTIS DIGNISSIM, PULVINAR
                        AC, LOREM. VESTIBULUM SED ANTE. DONEC SAGITTIS EUISMOD PURUS. MAURIS FERMENTUM DICTUM MAGNA. </h5>
                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                        placeat facere possimus, omnis voluptas assumenda est, omnis epellendus. Temporibus autem quibusdam
                        et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et
                        molestiae non recusandae.Itaque earum rerum hic tenetur Fusce suscipit varius mi. Cum sociis natoque
                        penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce feugiat malesuada odio.
                        Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem dis
                        parturient montes. Duis ultricies pharetra magna.</p>
                    <p>lorem Ipsum is simply dummy text of the printing and typesetting industry., Lorem Ipsum dummy text
                        ever since dummy text of the printing and usings 1500s,Duis aute irure dolor in reprehenderit in
                        voluptate velit esse when an,Lorem Ipsum has been the industry's standard dummy text ever since
                        dummy text of the printing and usings 1500s,</p>
                </div>
                <div class="about-imgs">
                    <div class="col-md-4 about-img">
                        <img src={{ 'tema/images/a1.jpg' }} class="img-responsive" alt="/">
                    </div>
                    <div class="col-md-4 about-img">
                        <img src={{ 'tema/images/a2.jpg' }} class="img-responsive" alt="/">
                    </div>
                    <div class="col-md-4 about-img">
                        <img src={{ 'tema/images/a3.jpg' }} class="img-responsive" alt="/">
                    </div>
                    <div class="clerafix"></div>
                </div>
            </div>
        </div>
        <!--why-choose-->
        <div class="why-choose w3ls-agileits">
            <div class="container">
                <h3>Why choose us</h3>
                <div class="choose-grids">
                    <div class="col-md-3 choose-grid">
                        <h4>1. Vestibulum iaculis</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing ellente ssed dololiquam congu fermentum nisl.
                            Mauris asan nulla vel diam. Sed in lacus ut enim adipiscing aliquetulla venenat.</p>

                    </div>
                    <div class="col-md-3 choose-grid">
                        <h4>2. Mauris asan nulla</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing ellente ssed dololiquam congu fermentum nisl.
                            Mauris asan nulla vel diam. Sed in lacus ut enim adipiscing aliquetulla venenat.</p>

                    </div>
                    <div class="col-md-3 choose-grid">
                        <h4>3. faucibus risus</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing ellente ssed dololiquam congu fermentum nisl.
                            Mauris asan nulla vel diam. Sed in lacus ut enim adipiscing aliquetulla venenat.</p>

                    </div>
                    <div class="col-md-3 choose-grid">
                        <h4>4. faucibus risus</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing ellente ssed dololiquam congu fermentum nisl.
                            Mauris asan nulla vel diam. Sed in lacus ut enim adipiscing aliquetulla venenat.</p>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--why choose-->
        <div class="new-course w3layouts-agileits">
            <div class="container">
                <h3>Certification Programs</h3>
                <div class="new-course-grids">
                    <div class="col-md-6 new-course-grid">
                        <img src={{ 'tema/images/p7.jpg' }} class="img-responsive" alt="" />
                        <div class="course-info">
                            <h4>Encididunt Ut</h4>
                            <p>Mauris fermentum tortor non enim aliquet condimentum nam aliquam pretium feugiat duis sem est
                                viverra eu interdum ac.</p>
                        </div>
                    </div>
                    <div class="col-md-6 new-course-grid">
                        <img src={{ 'tema/images/p8.jpg' }} class="img-responsive" alt="" />
                        <div class="course-info">
                            <h4>Magna Aliqua</h4>
                            <p>Mauris fermentum tortor non enim aliquet condimentum nam aliquam pretium feugiat duis sem est
                                viverra eu interdum ac.</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--team-->
        <div class="team w3layouts-agileits">
            <div class="container">
                <h3>Qualified Guides</h3>
                <ul class="ch-grid">
                    <li>
                        <div class="ch-item">
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-1"></div>
                                <div class="ch-info-back">
                                    <h4>Guide</h4>
                                    <p>by Alexander Shumihin <a href="#">View on Dribbble</a></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item">
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-2"></div>
                                <div class="ch-info-back">
                                    <h4>Guide</h4>
                                    <p>by Zoe Ingram <a href="#">View on Dribbble</a></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item">
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-3"></div>
                                <div class="ch-info-back">
                                    <h4>Guide</h4>
                                    <p>by Eileen Tjan <a href="#">View on Dribbble</a></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item">
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-4"></div>
                                <div class="ch-info-back">
                                    <h4>Guide</h4>
                                    <p>by Eileen Tjan <a href="#">View on Dribbble</a></p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
        <!--/team-->
    </div>
@endsection
