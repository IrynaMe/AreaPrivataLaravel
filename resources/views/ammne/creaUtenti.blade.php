@extends('ammne/layout')
@section('content')
    <div class="container-fluid" style="margin-top:50px">
        <div class="row">
            <div class="col-3">
                @include('ammne/dashboard')
            </div>
            <div class="col-9">
                @include('ammne/form_user')
            </div>
        </div>

    </div>
    </div>
@endsection
