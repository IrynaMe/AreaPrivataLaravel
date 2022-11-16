@if (Session::has('Customer'))

    @extends('front/layout')
    @section('content')
        @if (Session::has('status'))
            <div class="alert alert-success" role="alert" style="margin:20px auto; text-align:center;">
                <h3> {{ Session::get('status') }}</h3>
                {{ Session::put('status', null) }}
            </div>
        @endif
        <div class="container" style="margin-top:40px;text-align:center;">
            <div class="row">

                <div class="col-6 offset-3">
                    <h2>Welcome, Customer!!</h2>
                </div>

            </div>
            <div class="row">
                <div class="col-6 offset-3" style="margin:20px auto; text-align:center;">
                    <a href="/logout">
                        <button type="button" class="btn btn-warning">Logout</button>
                    </a>
                </div>
            </div>
        </div>
    @endsection
@else
    <div class="container" style="margin-top:40px;text-align:center;">
        <div class="row">

            <div class="col-6 offset-3">
                <h2>Accedi in account o registrati </h2>
            </div>

        </div>
    </div>

@endif
