@extends('ammne/layout')
@section('content')
    <div class="container-fluid" style="margin-top:50px">
        <div class="row">
            <div class="col-md-3">
                @include('ammne/dashboard')

            </div>
            <div class="col-md-9 col-sm-12" style="text-align: center">
                <div class="alert alert-success" role="alert">
                    @if (Session::has('success'))
                        {{ Session::get('success') }}
                        {{ Session::put('success', null) }}
                    @endif
                </div>
                <div class="alert alert-warning" role="alert">
                    @if (Session::has('status'))
                        {{ Session::get('status') }}
                        {{ Session::now('status', null) }}
                    @endif
                </div>
                <br>
                <h3>Modify Service</h3>
                <hr>
                <form action="{{ url('/updateService') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <input type="submit" value="Submit changes" class="btn btn-success">
            </div>
            </form>

        </div>
    </div>
@endsection
