@extends('front.layout')
@section('content')
    <div class="products-breadcrumb">
        <div class="container-fluid">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i>
                    <a href="index.php">Home</a>
                    <span>|</span>
                </li>
                <li>Thank you!</li>
            </ul>
        </div>
    </div>

    <div class="container" style="text-align:center">
        <img src="{{ 'tema/images/thanks1.png' }}" alt="" width=40%">
        <br>
        <a href="/"><button class="btn btn-success btn-lg" style="margin-top:20px;margin-bottom:20px">Return to
                homepage</button></a>
        <br>
    </div>
@endsection
