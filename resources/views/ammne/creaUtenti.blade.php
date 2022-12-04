@extends('ammne/layout')
@section('content')
    <div class="container-fluid" style="margin-top:50px">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                @include('ammne/dashboard')
            </div>
            <div class="col-md-9 col-sm-12">
                @include('ammne/form_user')
            </div>
        </div>

    </div>
    </div>
@endsection
