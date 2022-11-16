@extends('ammne/layout')
@section('content')
    <div class="container-fluid" style="margin:50px auto; text-align:center;">
        <div class="row">

            <div class="col-md-8 offset-md-1">
                <div class="alert alert-primary" role="alert">
                    @if (Session::has('success'))
                        {{ Session::get('success') }}
                        {{ Session::put('success', null) }}
                    @endif
                </div>
                <br>
                <br>
                <div class="col-8 offset-2">
                    <table class="table table-responsive table-hover table-striped table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">Email</th>
                                <th scope="col">Modifica</th>
                                <th scope="col">Cancella</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                                <tr class="text-center">
                                    <td scope="col">{{ $customer->email }}</td>

                                    <td scope="col">
                                        <a href="/editCustomer/{{ $customer->id }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>

                                    <td scope="col">
                                        <a href="/delete/{{ $customer->id }}">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>

                                </tr>
                            @endforeach
                            <div class="d-flex justify-content-center">
                                {{ $customers->links() }}
                            </div>
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-center">
                    {!! $customers->links() !!}

                </div>
            </div>
        @endsection
