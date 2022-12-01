@extends('front.layout')
@section('content')
    {{-- <div class="products-breadcrumb">
        <div class="container-fluid">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i>
                    <a href="index.php">Home</a>
                    <span>|</span>
                </li>
                <li>Thank you!</li>
            </ul>
        </div>
    </div> --}}

    {{--     <div class="container" style="text-align:center">
        <img src="{{ 'tema/images/thanks1.png' }}" alt="" width="70%">
        <br>
        <a href="/"><button class="btn btn-success btn-lg" style="margin-top:20px;margin-bottom:20px">Return to
                homepage</button></a>
        <br>
    </div> --}}

    <div class="thank">

    </div>
    <div class="bg-text-thank">
        <h2 style="font-size:50px">Thank you!</h2>
        <br>


        <h3>Check your email to see the order details</h3>
        <br>
        <p>Have a good time!</p>
        <div>

        </div>
    </div>
    <a class="bg-button-thank" href="/"><button class="btn btn-success btn-lg"
            style="margin-top:20px;margin-bottom:20px">Return to
            homepage</button></a>
@endsection
