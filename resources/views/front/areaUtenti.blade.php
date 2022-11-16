@if (Session::has('status'))
    <div class="alert alert-primary" role="alert">
        <h3> {{ Session::get('status') }}</h3>

        {{ Session::put('status', null) }}
    </div>
@endif
@extends('front.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <h1>Welcome to AreaUtenti!</h1>
            </div>
        </div>
    </div>
@endsection
