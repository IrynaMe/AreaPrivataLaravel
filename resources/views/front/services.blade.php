@extends('front.layout')
<div class="header banr">
    <div class="container">
        <div class="header-top">
            @include('front.menu')
        </div>
    </div>
</div>
@section('content')
    <div class="service w3layouts-agileits">
        <h3 style="text-align:center;">What we offer</h3>
        <div class="student-grids w3ls-agileits">
            <div class="container" style="text-align:center !important;">
                <div class="d-sm-flex justify-content-center">
                    {{ $services->links('pagination::bootstrap-4') }}

                </div>
            </div>
            @foreach ($services as $service)
                <div class="col-md-4 student-grid">

                    <figure>
                        <div class="snipcart-item block">
                            <div class="snipcart-thumb">
                                {{-- <a href="single/{{ $service->id }}"> --}}
                                <a href="single/{{ $service->id }}">

                                    <h4 style="margin:20px 0 25px 0;"> {{ $service->name }}</h4>
                                    <div style="height:150px;">
                                        <img title=" {{ $service->image }}" alt=" {{ $service->image }}"
                                            src="tema/{{ $service->image }}" style="max-height:150px;" />
                                    </div>
                                </a>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <b> Price:
                                            {{ $service->price }}. €;</b>

                                    </div>
                                </div>

                            </div>
                            <div class="snipcart-details top_brand_home_details">
                                <form action="{{ url('/addcart/' . $service->id) }}" method="post">
                                    @csrf
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="{{ $service->name }}" />
                                        <input type="hidden" name="amount" value="{{ $service->price }}" />
                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                        <input type="hidden" name="service_id" value="{{ $service->id }}">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </figure>

                </div>
            @endforeach


            {{--             <div class="col-md-4 student-grid">
                <img src={{"tema/images/p5.jpg"}} class="img-responsive" alt="">
                <h4>Tour 2</h4>
                <p>Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque
                    purus, sollic alitudin non ante ac, malesuada. condimentum libero.</p>
            </div>
            <div class="col-md-4 student-grid">
                <img src={{"tema/images/p6.jpg"}} class="img-responsive" alt="">
                <h4>Tour 3</h4>
                <p>Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque
                    purus, sollic alitudin non ante ac, malesuada. condimentum libero.</p>
            </div> --}}
            <div class="clearfix"></div>
        </div>
    </div>


    <div class="container" style="text-align:center !important;">
        <div class="d-sm-flex justify-content-center">
            {!! $services->links('pagination::bootstrap-4') !!}

        </div>
    </div>
@endsection
