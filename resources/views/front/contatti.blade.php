@extends('front/layout')
<div class="header banr">
    <div class="container">
        <div class="header-top">
            @include('front.menu')
        </div>
    </div>
</div>
@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            <h4>{{ Session::get('success') }}</h4>
        </div>
    @endif
    @if (Session::has('customerName'))
        <div class="alert alert-success" role="alert">
            <h4>Welcome, {{ Session::get('customerName') }} !</h4>
        </div>
    @endif
    <div class="row">
        <div class="col-6 offset-3" style="margin:5px auto; text-align:center;">
            <a href="/logoutUser">
                <button type="button" class="btn btn-warning">Logout</button>
            </a>
        </div>
    </div>
    @include('front.form')
@endsection
