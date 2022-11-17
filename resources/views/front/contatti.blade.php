@if (Session::has('Customer'))
    @extends('front/layout')
    @section('content')
        <div class="container">

            @include('front.menu')


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
