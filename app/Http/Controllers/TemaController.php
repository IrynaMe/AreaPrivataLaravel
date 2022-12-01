<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Service;
use App\Models\Order;
use Illuminate\Support\Facades\Validator;
use App\Cart;
use Session;
use Illuminate\Validation\Rules\Password;

//use Illuminate\Support\Facades\Redirect;
// use Illuminate\Support\Facades\URL;


class TemaController extends Controller
{
    public function home()
        {
            return view('front.home');
        }
        
    public function about()
        {
            return view('front.about');
        }
    public function loginUser()
        {
            return view('front.loginUser');
        }
    public function contatti()
        {
        //if (Session::has('Customer')){
                return view('front.contatti');
/*             } else {
                return redirect('/loginUser')->with('status', 'You should login o register!');  
            } */
            // return view('front.contatti');
        }
    public function services()
        {
          
        $services= Service::paginate(3);
        return view('front.services')->with('services', $services);
        }


        //single product
    public function single($id)
        {
             $service = Service::find($id);

            return view('front.single')->with('service', $service);
        }

    public function registrati()
        {
        return view('front.registrati');
        }


    public function registraUtente(Request $request)
        {
            $inputs = [
                'email'=>$request->email_reg,
                'password' =>$request->psw_reg,
                'name'=>$request->name_reg
            ]; 
            $rules = [
                'name' => 'required|min:2|string',    
                'email'    => 'required|email',
                'password' => [
                    'required',
                    'string',
                    Password::min(6)
                        ->mixedcase()
                        ->numbers()
                        //->symbols()
                        //->uncompromised()
                ],
            ];

            $validation = Validator::make( $inputs, $rules)->validate();
/* 
            if ( $validation->fails() ) {
                print_r( $validation->errors()->all() );
            }

            else{ */
                $customer = new Customer();
                $customer->email=$request->email_reg;
                $customer->password = md5($request->psw_reg);
                $customer->nome=$request->name_reg;
                $customer->save();
                $customerName=($customer->nome);
                Session::put('success', 'Account created successfully!');
                Session::put('Customer', $customer);
                Session::put('customerName', $customerName);
                return redirect('/contatti');
            // }

}

   
    public function accesso(Request $request)
    {
        $this->validate($request, ['email' => 'email|required',
        'password' => 'required' ]);

        $Customer  = Customer::where('email', $request->input('email'))->first();

  

    //$path=(Session('url'));
    //$path=$request->url_name;
        

        if ($Customer) {
            $password=md5($request->input('password'));
            //echo $password."<br>";
            $passwordDB= ($Customer->password);
            //echo $passwordDB;
            if ($password == $passwordDB) {
            Session::put('Customer', $Customer);
                // echo 'passo da qui';
            $customerName=($Customer->nome);
            Session::put('customerName', $customerName);
               if (Session::has('url')) {
                    // return redirect("$path");
                    return redirect('/cart');
                    (Session::forget('url')); 

                    //return view ("$path");
                }
                    else { 
                        return redirect('/contatti');
                     } 
            } else {
                return back()->with('status', 'Wrong email o password');
            }
        } else {
            return back()->with('status', 'Account with this email does not exist');
        }
    }

    public function logoutUser()
    {
        Session::forget('Customer');
        Session::forget('customerName');

        return redirect('/');

    }

    //----------------------------------------CART------

public function cart(Request $request)
    {
        //$url=URL::full();
        $url =$request->path();
       Session::put('url', $url);

        if (!Session::has('cart')) {
            return view('front.cart');
            // echo ($url);
            
        }

        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);

        return view('front.cart', ['services' => $cart->items]);
        // return view('front.cart');
    }
public function addCart($id)
    {
        $service = Service::find($id);
        
        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($service, $id);
        Session::put('cart', $cart);

        //dd(Session::get('cart'));
        return back();
    }
/* public function url (Request $request)
    {
        $path=$request->url_name;
        
        return redirect("$path");
        //echo $path;
        //
        //return redirect()->route('front'.'url');
        // return redirect ('front.{{$path}}');
       

    }  */

    public function update_qty(Request $request, $id)
        {
            $oldCart = Session::has('cart')? Session::get('cart'):null;
            $cart = new Cart($oldCart);
            
            $cart->updateQty($id, $request->quantity);
            
            Session::put('cart', $cart);
    
            // dd(Session::get('cart'));
            return back();
        }
    

        public function remove($id)
        {
            $oldCart = Session::has('cart')? Session::get('cart'):null;
            $cart = new Cart($oldCart);
            $cart->removeItem($id);
           
            if (count($cart->items) > 0) {
                Session::put('cart', $cart);
            } else {
                Session::forget('cart');
            }
    
            //dd(Session::get('cart'));
            return redirect('/cart');
        }
    
    public function removeItem($id)
        {
            $this->totalQty -= $this->items[$id]['qty'];
            $this->totalPrice -= $this->items[$id]['product_price'] * $this->items[$id]['qty'];
            unset($this->items[$id]);
        }
    
    //aggiorna utente
    public function completaDati(Request $request, $id)
    {
        $aggiorna = Customer::where('id', $id)->first();
        $aggiorna->nome = $request->input('nome');
        $aggiorna->cognome = $request->input('cognome');
        $aggiorna->indirizzo = $request->input('indirizzo');
        $aggiorna->citta = $request->input('citta');
        $aggiorna->nazione = $request->input('nazione');
        
      
        $aggiorna->save();
        //cosi aggiorno la sessione Customer con i dati modificati
        Session::put('Customer', $aggiorna);
              //cosi creo la sessione Aggiorna  con i dati inseriti
        Session::put('Aggiorna', $aggiorna);
        return redirect('/cart')->with('status', 'You have updated info');
    }

    public function ProcediOrdine()
        {
            $oldCart = Session::has('cart')? Session::get('cart'):null;
            $cart = new Cart($oldCart);
            $order= new Order;
            $order->Customer_id= (Session('Customer')->id);
            $order->nome= (Session('Customer')->email);
            $order->indirizzo= (Session('Aggiorna')->indirizzo);
            $order->nome= (Session('Customer')->email);
            $order->citta= (Session('Aggiorna')->citta);
            $order->cart = serialize($cart);

            $order->prezzo= (Session('cart')->totalPrice);
            $order->stato = 1;
            Session::put('Order', $order);
            $order->save();
            
            return redirect('/pagamenti')->with('status', 'ordine aggiornato');
        }

        public function pagamenti()
        {
            return view('front.pagamenti');
        }
        public function grazie()
        {
            if (Session::has('Order')) {
                $id=(Session('Order')->id);
                $order= Order::find($id);
                $order->stato = 2;
                $order->save();
          
                Session::forget('cart');
                Session::forget('Aggiorna');
/*                 Session::forget('Customer');
                Session::flush(); */
            }
            return view('front.grazie');
        }
    

    public function mail(Request $request)
    {
        // $customer->email=$request->email_reg;
$mail_destinatario='inero@mail.ru';
$nome_mittente=$request->nome;
$mail_mittente=$request->email;
$testo=$request->testo;

$oggetto="contact request regading ".$request->oggetto;
$mail_corpo="richiesta di contatto da ".$request->email." che scrive \r\n\n".$testo;
$mail_headers="From: ".$nome_mittente."< ".$mail_mittente." > \r\n";
$mail_headers .="X-mailer:PHP/".phpversion();


//---------------------------------------MAIL------

if(mail($mail_destinatario, $oggetto, $mail_corpo, $mail_headers)) {
    $mail=1;
    Session::put('mail', $mail);
    Session::put('nome', $nome_mittente);
    Session::put('email', $mail_mittente);
    Session::put('oggetto', $oggetto);
    Session::put('testo', $testo);
    return back()->with('status', 'Email was sent successfully! ');
    
}else{
    $mail=0;
    Session::put('mail', $mail);
    return back()->with('status', 'Error! Email was not sent! ');
}
            // session_start();
            //$nome_mittente=$_POST['nome'];
            //$mail_mittente=$_POST['email'];
            //$oggetto=$_POST['oggetto'];
            //$testo=$_POST['testo'];

        }
}
