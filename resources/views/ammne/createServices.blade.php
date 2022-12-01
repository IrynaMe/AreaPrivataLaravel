@extends('ammne/layout')
@section('content')
    <div class="alert alert-success" role="alert">
        @if (Session::has('success'))
            {{ Session::get('success') }}
            {{ Session::now('success', null) }}
        @endif
    </div>
    <div class="alert alert-warning" role="alert">
        @if (Session::has('status'))
            {{ Session::get('status') }}
            {{ Session::now('status', null) }}
        @endif
    </div>
    <div class="container-fluid" style="margin-top:50px">
        <div class="row">
            <div class="col-3">
                @include('ammne/dashboard')
            </div>
            <div class="col-9">
                @include('ammne/form_service')
            </div>
        </div>
    @endsection
