@extends('front.layout')
<div class="header banr">
    <div class="container">
        <div class="header-top">
            @include('front.menu')
        </div>
    </div>
</div>
@section('content')
    @if (Session::has('status'))
        <div class="alert alert-primary" role="alert">
            <h3> {{ Session::get('status') }}</h3>

            {{ Session::put('status', null) }}
        </div>
    @endif
    <!-- about -->
    <div class="privacy about">
        <h3>Chec<span>kout</span></h3>

        <div class="checkout-right">
            <h4>Your shopping cart contains: <span>
                    {{ Session::has('cart') ? Session::get('cart')->totalQty : 0 }}

                    services
                </span></h4>
            <table class="timetable_sub">
                <thead>
                    <tr>
                        <th>SL No.</th>
                        <th>service</th>
                        <th>Quantity</th>
                        <th>service Name</th>

                        <th>Price</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>

                    @if (Session::has('cart'))
                        @foreach ($services as $service)
                            <tr class="rem1">
                                <td class="invert">1</td>
                                <td class="invert-image">

                                    <a href="#"><img src="/tema/{{ $service['service_image'] }}" alt=" "
                                            class="img-responsive"></a>
                                </td>
                                {{-- <td class="invert">
                                    <div class="quantity">
                                        <div class="quantity-select">
                                            <div class="entry value-minus">&nbsp;</div>
                                            <div class="entry value"><span>1</span></div>
                                            <div class="entry value-plus active">&nbsp;</div>
                                        </div>
                                    </div>
                                </td> --}}

                                <form action="{{ url('/update_qty/' . $service['service_id']) }}" method="POST">
                                    {{ csrf_field() }}
                                    <td class="quantity">
                                        <div class="input-group ">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="number" name="quantity"
                                                        class="quantity form-control input-number"
                                                        value="{{ $service['qty'] }}" min="1" max="80">
                                                </div>

                                                <div class="col-md-6">

                                                    <input type="submit" class="btn btn-success" value="Aggiorna Qta"
                                                        min="1" max="80">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </form>
                                <td class="invert">{{ $service['service_name'] }}</td>

                                <td class="invert">
                                    @if ($service['service_discount'] > 0)
                                        {{ $service['service_discount'] }}
                                        </h4>
                                    @else
                                        {{ $service['service_price'] }}
                                    @endif

                                </td>
                                <td class="invert">
                                    <div class="rem">
                                        <a href="{{ url('/remove/' . $service['service_id']) }}">
                                            <div class="close1"> </div>
                                        </a>
                                    </div>

                                </td>
                            </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>
        </div>
        <div class="checkout-left">
            <div class="col-md-4 checkout-left-basket">
                <h4>Continue to basket</h4>
                <ul>
                    @if (Session::has('cart'))
                        <table class="table text-center">
                            <th class="text-center">Nome </th>
                            <th>Quantità</th>

                            <th>Valore Totale</th>
                            @foreach ($services as $service)
                                <tr>
                                    <td>{{ $service['service_name'] }}</td>



                                    <td>{{ $service['qty'] }}</td>

                                    <?php
                                    if ($service['service_discount'] > 0) {
                                        $price = $service['service_discount'];
                                    } else {
                                        $price = $service['service_price'];
                                    }
                                    
                                    ?>
                                    <td class="total">{{ $service['qty'] * $price }}
                                        <?php
                                        $total = $service['qty'] * $price;
                                        
                                        ?>

                                    </td>

                                </tr>
                            @endforeach
                            {{-- <tr>

                                <span>{{ Session::has('cart') ? Session::get('cart')->totalPrice : null }}</span>
                            </tr> --}}

                            <tr>
                                <td>
                                    <span class="total">Prezzo Totale </span>
                                </td>
                                <td></td>
                                <td>
                                    <span class="total">
                                        {{ Session::get('cart')->totalPrice }}
                                    </span>
                                </td>
                            </tr>
                        </table>
                    @endif
                </ul>


            </div>



            <div class="col-md-8 address_form_agile">
                @if (Session::has('Customer'))
                    @php
                        //Session::get('Customer');
                        //print Session('Customer');
                    @endphp
                    <h4>Completa i tuoi dati</h4>
                    <form action="/completaDati/{{ Session('Customer')->id }}" method="post"
                        class="creditly-card-form agileinfo_form">
                        @csrf
                        <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                            <div class="information-wrapper">
                                <div class="first-row form-group">
                                    <div class="controls">
                                        <label class="control-label">Nome </label>
                                        <input class="billing-address-name form-control" type="text" name="nome"
                                            placeholder="Nome" name="nome" value="{{ Session('Customer')->nome }}">
                                    </div>
                                    <div class="w3_agileits_card_number_grids">
                                        <div class="w3_agileits_card_number_grid_left">
                                            <div class="controls">
                                                <label class="control-label">Cognome</label>
                                                <input class="form-control" type="text" placeholder="Cognome"
                                                    name="cognome" value="{{ Session('Customer')->cognome }}">
                                            </div>
                                        </div>
                                        <div class="w3_agileits_card_number_grid_right">
                                            <div class="controls">
                                                <label class="control-label">Indirizzo</label>
                                                <input class="form-control" type="text" placeholder="Indirizzo"
                                                    name="indirizzo" value="{{ Session('Customer')->indirizzo }}">
                                            </div>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                    <div class="controls">
                                        <label class="control-label">Citta' </label>
                                        <input class="form-control" type="text" placeholder="Citta' " name="citta"
                                            value="{{ Session('Customer')->citta }}">
                                    </div>
                                    <div class="controls">
                                        <label class="control-label">Nazione</label>
                                        <input class="form-control" type="text" placeholder="nazione' " name="nazione"
                                            value="{{ Session('Customer')->nazione }}">
                                    </div>
                                </div>
                                <button class="submit check_out">Delivery to this Address</button>
                            </div>
                        </section>
                    </form>
                    @if (Session::has('Aggiorna'))
                        @php
                            // print Session('Order');
                        @endphp
                        @if (Session::has('cart'))
                            <div class="checkout-right-basket">
                                <a href="/ProcediOrdine">Vai al pagamento <span class="glyphicon glyphicon-chevron-right"
                                        aria-hidden="true"></span></a>

                            </div>
                        @endif
                    @endif
                @else
                    <div class="col-md-4"></div>

                    <a href="/login" class="offset-md-4">
                        <button class="btn btn-success">Per continuare aquisto esegui LogIn</button>
                    </a>
                @endif
            </div>

            <div class="clearfix"> </div>

        </div>

    </div>
    <!-- //about -->
    </div>
    <div class="clearfix"></div>
    </div>
    <!-- //banner -->

@endsection