<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
    <input type="hidden" name="cmd" value="_xclick">
    {{-- dove value = "XR7VVKVHE72VQ" e collegato con il mio account ID paypal business --}}
    <input type="hidden" name="hosted_button_id" value="VF6W4QBRP6UKL">


    <input type="hidden" name="business" value="irinam7a@gmail.com">
    <input type="hidden" name="quantity" value="1">
    <input type="hidden" name="amount" value="{{ Session('cart')->totalPrice }}">
    <input type="hidden" name="email" value="{{ Session('Customer')->email }}">
    <input type="hidden" name="address1" value="{{ Session('Aggiorna')->indirizzo }}">
    <input type="hidden" name="city" value="{{ Session('Aggiorna')->citta }}">
    <input type="hidden" name="country" value="IT">
    <input type="hidden" name="currency_code" value="EUR">
    <input type="hidden" name="return" value="https://travel.netsons.org/grazie">

    <input type="image" src="https://www.sandbox.paypal.com/en_US/IT/i/btn/btn_buynowCC_LG.gif" border="0"
        name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1"
        height="1">
</form>
