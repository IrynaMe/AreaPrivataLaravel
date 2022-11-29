@extends('ammne/layout')
{{-- <div class="header banr">
    <div class="container">
        <div class="header-top">
            @include('front.menu')
        </div>
    </div>
</div>
@section('content')
    <div class="container" style="margin-top:40px;text-align:center;">
        <div class="row">
            <div class="col-6 offset-3">
                <h2>Welcome, Admin!!</h2>
            </div>
        </div>
    </div> --}}
@section('content')
    {{--     <div class="row">
        <div class="col-6 offset-3" style="margin:20px auto; text-align:center;">
            <a href="/logout">
                <button type="button" class="btn btn-warning">Logout</button>
            </a>
        </div>
    </div> --}}


    <div class="container" style="margin-top:40px;text-align:center;">
        <div class="col-md-3">
            <h2>Admin dashboard</h2>
            <br>
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"
                style="font-size:15px! important">
                <a class="nav-link bck" id="v-pills-profile-tab" href="/" aria-selected="false" role="tab"
                    aria-controls="v-pills-messages">
                    Go back to website
                </a>
                <br>
                <a class="nav-link nav-pills bck " id="v-pills-profile-tab" href="/creaUtenti">Create Users</a>
                <br>
                <a class="nav-link nav-pills bck" id="v-pills-profile-tab" href={{ '/listaUtenti' }}>
                    Users list
                </a>
                <br>
                <a class="nav-link nav-pills bck" id="v-pills-profile-tab" href={{ '/ordini' }}>Orders list</a>
                <br>
                <a class="nav-link nav-pills bck" id="v-pills-profile-tab" href={{ '/logout' }}>Logout</a>
            </div>
        </div>


    </div>


    {{-- @endsection --}}
