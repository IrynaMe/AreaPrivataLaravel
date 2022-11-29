@extends('front/layout')
<div class="header banr">
    <div class="container">
        <div class="header-top">
            @include('front.menu')
        </div>
    </div>
</div>
@section('content')
    @if (Session::has('status'))
        <div class="alert alert-primary" role="alert">
            <h3> {{ Session::get('status') }}</h3>

            {{ Session::now('status') }}
        </div>
    @endif
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            <h4> {{ Session::get('success') }}</h4>
            {{-- {{ Session::now('success', null) }} --}}
        </div>
    @endif
    {{--   
    @if (Session::has('customerName'))
        <div class="alert alert-success" role="alert">
            <h4>Welcome,{{ Session::get('customerName') }}!</h4>
            {{ Session::now('customerName', null) }}
        </div>
    @endif --}}
    {{--     <div class="row">
        <div class="col-6 offset-3" style="margin:5px auto; text-align:center;">
            <a href="/logoutUser">
                <button type="button" class="btn btn-warning">Logout</button>
            </a>
        </div>
    </div> --}}


    @include('front.form')


    {{-- </div> --}}
@endsection
