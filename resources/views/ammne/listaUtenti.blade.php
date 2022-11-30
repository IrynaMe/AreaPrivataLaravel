@extends('ammne/layout')
@section('content')
    <div class="container-fluid" style="margin-top:50px">
        <div class="row">
            <div class="col-md-3">
                @include('ammne/dashboard')

            </div>
            <div class="col-md-9 " style="text-align: center">
                <br>
                <table class="table table-responsive table-hover table-striped table-bordered ">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Modify</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                            <tr class="text-center">
                                <td scope="col">{{ $customer->nome }}</td>
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
                        <div class="d-sm-flex justify-content-center my-5">
                            {{-- {{ $customers->links() }} --}}
                            {{ $customers->links('pagination::bootstrap-4') }}
                        </div>
                        {{--                         <div class="d-flex justify-content-center">
                            {{ $customers->links() }}
                        </div> --}}

                    </tbody>
                </table>
                <div class="d-sm-flex justify-content-center">
                    {!! $customers->links('pagination::bootstrap-4') !!}

                </div>

            </div>


        </div>
    </div>
@endsection



{{-- <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>
  </nav> --}}
