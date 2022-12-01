@extends('ammne/layout')
@section('content')
    <div class="container-fluid" style="margin-top:50px">
        <div class="row">
            <div class="col-md-3">
                @include('ammne/dashboard')

            </div>
            <div class="col-md-9 " style="text-align: center">
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
                <br>
                <table class="table table-responsive table-hover table-striped table-bordered ">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Service ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>


                            <th scope="col">Immage</th>
                            <th scope="col">Modify</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                            <tr class="text-center">
                                <td scope="col">{{ $service->id }}</td>
                                <td scope="col">{{ $service->name }}</td>
                                <td scope="col">{{ $service->description }}</td>
                                <td scope="col">{{ $service->price }}</td>

                                {{-- <td scope="col">{{ $service->image}}</td> --}}
                                <td>
                                    <img style="width:100px;" src="tema/{{ $service->image }}" alt="{{ $service->name }}">
                                </td>

                                <td scope="col">
                                    <a href="/editService/{{ $service->id }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>

                                <td scope="col">
                                    <a href="/deleteService/{{ $service->id }}">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>

                            </tr>
                        @endforeach
                        <div class="d-flex justify-content-center">
                            {{ $services->links() }}
                        </div>



            </div>

            </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {!! $services->links() !!}

            </div>
        </div>
    @endsection
