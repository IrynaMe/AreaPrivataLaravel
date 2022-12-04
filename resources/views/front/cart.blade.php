@extends('front/layout')
<div class="header banr">
    <div class="container">
        <div class="header-top">
            @include('front.menu')
        </div>
    </div>
</div>
@section('content')
    {{-- {{ Session::get('url') }} --}}
    {{-- {{ Session::put('url') }} --}}
    @if (Session::has('status'))
        <div class="alert alert-success" role="alert">
            <h3> {{ Session::get('status') }}</h3>

            {{ Session::put('status', null) }}
        </div>
    @endif
    <!-- about -->
    {{-- <div class="privacy about"> --}}

    <div class="container my-3" style="padding:10px;text-align: center;">
        <div class="row">
            <div class="service w3layouts-agileits">
                <h3 style="text-align:center;">Checkout</h3>
            </div>
            {{-- <h3><span>Checkout</span></h3> --}}

            <div class="checkout-right">
                <h4 style="padding:10px;">Your shopping cart contains: <span>
                        {{ Session::has('cart') ? Session::get('cart')->totalQty : 0 }}

                        <span>item(s)</span>
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
                                <tr class="rem">
                                    <td class="invert">1</td>
                                    <td class="invert-image">

                                        <a href="#"><img src="/public/tema/{{ $service['service_image'] }}"
                                                alt=" " class="img-responsive"
                                                style="height: 50px; width: auto;"></a>
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
                                        @csrf
                                        <td class="quantity">
                                            <div class="input-group ">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="number" name="quantity"
                                                            class="quantity form-control input-number"
                                                            value="{{ $service['qty'] }}" min="1" max="5">
                                                    </div>

                                                    <div class="col-md-6">

                                                        <input type="submit" class="btn btn-info" value="Update Qty"
                                                            min="1" max="80">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </form>
                                    <td class="invert">{{ $service['service_name'] }}</td>

                                    <td class="invert">
                                        {{ $service['service_price'] }}
                                        {{-- @if ($service['service_discount'] > 0)
                                            {{ $service['service_discount'] }}
                                            
                                        @else
                                            {{ $service['service_price'] }}
                                        @endif --}}

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
                <div class="col-md-4 ">
                    <a style="text-decoration: none !important;" href={{ '/services' }}>
                        <h4 class="btn btn-block btn-info ">Continue choosing services</h4>
                    </a>
                    <ul>
                        @if (Session::has('cart'))
                            <table class="table text-center">
                                <th class="text-center">Name </th>
                                <th>Quantity</th>

                                <th>Price</th>
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
                                <tr style="border:1px solid grey;">
                                    <td>
                                        <span class="total">Total value </span>
                                    </td>

                                    <td>
                                        <span class="total">
                                            {{ Session::get('cart')->totalQty }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="total" style="color: red;">
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
                        <h4>Fill in your details</h4>
                        <form action="/completaDati/{{ Session('Customer')->id }}" method="post"
                            class="creditly-card-form agileinfo_form">
                            @csrf
                            <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                                <div class="information-wrapper">
                                    <div class="first-row form-group">
                                        <div class="controls">
                                            <label class="control-label">First name </label>
                                            <input class="billing-address-name form-control" type="text" name="nome"
                                                placeholder="Nome" name="nome" value="{{ Session('Customer')->nome }}">
                                        </div>
                                        <div class="w3_agileits_card_number_grids">
                                            <div class="w3_agileits_card_number_grid_left">
                                                <div class="controls">
                                                    <label class="control-label">Last name</label>
                                                    <input class="form-control" type="text" placeholder="Cognome"
                                                        name="cognome" value="{{ Session('Customer')->cognome }}">
                                                </div>
                                            </div>
                                            <div class="w3_agileits_card_number_grid_right">
                                                <div class="controls">
                                                    <label class="control-label">Address</label>
                                                    <input class="form-control" type="text" placeholder="Indirizzo"
                                                        name="indirizzo" value="{{ Session('Customer')->indirizzo }}">
                                                </div>
                                            </div>
                                            <div class="clear"> </div>
                                        </div>
                                        <div class="controls">
                                            <label class="control-label">City </label>
                                            <input class="form-control" type="text" placeholder="Citta' " name="citta"
                                                value="{{ Session('Customer')->citta }}">
                                        </div>
                                        <div class="controls">
                                            <label class="control-label">Nationality</label>
                                            <input class="form-control" type="text" placeholder="nazione' "
                                                name="nazione" value="{{ Session('Customer')->nazione }}">
                                        </div>
                                    </div>
                                    <button class="submit check_out btn btn-info">Delivery to this address</button>
                                </div>
                            </section>
                        </form>

                        @if (Session::has('Aggiorna'))
                            @php
                                // print Session('Order');
                            @endphp
                            @if (Session::has('cart'))
                                <div class=" btn btn-warning">
                                    <a style="text-decoration:none !important; color:white !important;"
                                        href="/ProcediOrdine">Go to payment <span
                                            class="glyphicon glyphicon-chevron-right" aria-hidden="true"> </span></a>

                                </div>
                            @endif
                        @endif
                    @else
                        <div class="col-md-4"></div>

                        <a href={{ '/loginUser' }} class="offset-md-4">
                            <button class="btn btn-warning">You must login to continue</button>


                        </a>
                    @endif
                </div>

                <div class="clearfix"> </div>

            </div>

        </div>
    </div>
    <!-- //about -->
    </div>
    <div class="clearfix"></div>
    </div>
    <!-- //banner -->

@endsection
