@extends('ammne/layout')
@section('content')
    @if (Session::has('status'))
        <div class="alert alert-warning" role="alert">
            {{ Session::get('status') }}
            {{ Session::put('status', null) }}
        </div>
    @endif
    <div class="container-fluid" style="margin-top:50px">
        <div class="row">
            <div class="col-3">
                @include('ammne/dashboard')
            </div>
            <div class="col-9">

                <br>
                <table class="table table-responsive table-hover table-striped table-bordered ">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">OrderID</th>
                            <th scope="col">Created</th>
                            <th scope="col">Total price</th>
                            <th scope="col">State</th>
                            <th scope="col">Delivery address</th>
                            <th scope="col">City</th>
                            <th scope="col">Customer's email </th>
                            <th scope="col">Details</th>
                            <th scope="col">Modify</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            @php
                                $creato = $order->created_at;
                                $timestamp = strtotime($creato);
                                $creato = date('d-m-Y', $timestamp);
                            @endphp
                            <tr>

                                <td scope="col">{{ $order->id }}</td>
                                <td scope="col">{{ $creato }}</td>
                                <td scope="col">{{ $order->prezzo }}</td>
                                <td scope="col">{{ $order->stato }}</td>
                                <td scope="col">{{ $order->indirizzo }}</td>
                                <td scope="col">{{ $order->citta }}</td>
                                <td scope="col">{{ $order->nome }}</td>

                                <td>
                                    <i class="fas fa-info-circle " data-bs-toggle="modal"
                                        data-bs-target="{{ '#ordine_' . $order->id }}">
                                    </i>
                                </td>

                                <td scope="col">
                                    <a href="#" style="color:black;">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>

                                <td scope="col">
                                    <a href="#" style="color:black;">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            {{-- inizio modal --}}
                            <div class="modal fade" id="{{ 'ordine_' . $order->id }}" tabindex="-1"
                                aria-labelledby="{{ 'ordine_' . $order->id }}Label" aria-hidden="true">

                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Dettaglio ordine</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        {{-- modal body --}}
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-3"><b>Immagine</b></div>
                                                    <div class="col-md-3"><b>Prezzo €</b></div>
                                                    <div class="col-md-3"><b>Nome</b></div>
                                                    <div class="col-md-3"><b>Quantita'</b></div>
                                                    <hr>
                                                </div>
                                                {{-- mostro i dettagli dell'ordine --}}
                                                @foreach ($order->cart->items as $item)
                                                    <div class="row">

                                                        <div class="col-md-3">
                                                            <img src="{{ url('public/tema/' . $item['service_image']) }}"
                                                                alt="" style="width:30px;height:30px">
                                                        </div>
                                                        <div class="col-md-3">{{ $item['service_price'] }}</div>
                                                        <div class="col-md-3">{{ $item['service_name'] }}</div>
                                                        <div class="col-md-3" style="text-align:center">
                                                            {{ $item['qty'] }}</div>

                                                    </div>
                                                    <br>
                                                    <hr>
                                                @endforeach


                                            </div>

                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            {{-- fine modale --}}
                            <div class="modal fade" id="{{ 'ordine_' . $order->id }}" tabindex="-1"
                                aria-labelledby="{{ 'ordine_' . $order->id }}Label" aria-hidden="true">

                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Dettaglio ordine</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        {{-- modal body --}}
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-3"><b>Immagine</b></div>
                                                    <div class="col-md-3"><b>Prezzo €</b></div>
                                                    <div class="col-md-3"><b>Nome</b></div>
                                                    <div class="col-md-3"><b>Quantita'</b></div>
                                                    <hr>
                                                </div>
                                                {{-- mostro i dettagli dell'ordine --}}
                                                @foreach ($order->cart->items as $item)
                                                    <div class="row">

                                                        <div class="col-md-3">
                                                            <img src="{{ url('public/tema/' . $item['service_image']) }}"
                                                                alt="" style="width:30px;height:30px">
                                                        </div>
                                                        <div class="col-md-3">{{ $item['service_price'] }}</div>
                                                        <div class="col-md-3">{{ $item['service_name'] }}</div>
                                                        <div class="col-md-3" style="text-align:center">
                                                            {{ $item['qty'] }}</div>

                                                    </div>
                                                    <br>
                                                    <hr>
                                                @endforeach


                                            </div>

                                        </div>

                                        <?php
                                        
                                        ?>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            {{-- fine modale --}}
                            {{-- fine modal --}}
                        @endforeach
                        <div class="d-sm-flex justify-content-center my-5">
                            {{-- {{ $customers->links() }} --}}
                            {{ $orders->links('pagination::bootstrap-4') }}
                        </div>

                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {!! $orders->links('pagination::bootstrap-4') !!}
                </div>
            </div>
        </div>
    </div>

    <style>
        .fas:hover {
            color: rgb(6, 84, 209);
        }
    </style>
@endsection
