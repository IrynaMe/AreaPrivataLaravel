@if (Session::has('Customer'))
    @extends('front/layout')
    @section('content')
        <div class="container">

            @include('front.menu')
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

            <br>
            <br>
            @include('front.form')

            <br>
            <br>

        </div>
    @endsection
@else
    <a href={{ url('/') }}>Accedi nel tuo account o registrati</a>
@endif
