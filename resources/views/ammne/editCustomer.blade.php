@extends('ammne/layout')
@section('content')
    <div class="container-fluid" style="margin-top:50px">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                @include('ammne/dashboard')

            </div>
            <div class="col-md-9 col-sm-12" style="text-align: center">
                <h3>Modify User's name/email</h3>
                <hr>
                <form action="{{ '/aggiornaCustomer' }}" method="post">
                    @csrf
                    <p>
                        <input type="text" value="{{ $customer->email }}" name="emailUpdate" id="emailUpdate">
                        <input type="hidden" name="id" value="{{ $customer->id }}">
                    </p>
                    <p>
                        <input type="text" value="{{ $customer->nome }}" name="nameUpdate" id="nameUpdate">
                        <input type="hidden" name="id" value="{{ $customer->id }}">
                    </p>


                    <input type="submit" value="Submit changes" class="btn btn-success">
                </form>

            </div>
        </div>
    @endsection
