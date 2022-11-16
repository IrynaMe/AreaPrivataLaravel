@extends('ammne/layout')
@section('content')
    <div class="container" style="margin-top:40px;text-align:center;">
        <div class="row">
            <div class="col-md-10">
                <div class="alert alert-success" role="alert">
                    <!-- if exists session with name success put the message and unset -->
                    @if (Session::has('success'))
                        {{ Session::get('success') }}
                        {{ Session::put('success', null) }}
                    @endif
                </div>
                @include('ammne/form_user')
            </div>
        </div>
    </div>
    </div>
    @endsection
