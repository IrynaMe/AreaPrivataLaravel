<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Service;
use App\Cart;
use Session;


class TemaController extends Controller
{
    public function home()
        {
            return view('front.home');
        }
        public function services()
        {
          
            $services= Service::paginate(3);
            return view('front.services')->with('services', $services);
        }
    public function about()
        {
            return view('front.about');
        }
    public function areaUtenti()
        {
            return view('front.areaUtenti');
        }
    public function contatti()
        {
            if (Session::has('Customer')){
                return view('front.contatti');
            } else {
                return redirect('/areaUtenti')->with('status', 'You should login o register!');  
            }
            // return view('front.contatti');
        }
    
    public function registrati()
        {
            return view('front.registrati');
        }
    
    public function registraUtente(Request $request)
        {
            $customer = new Customer();
            $customer->email=$request->email_reg;
            $customer->password = md5($request->psw_reg);
            $customer->nome=$request->name_reg;
            $customer->save();
            $customerName=($customer->nome);
            Session::put('success', 'Account creato con sucesso!');
            Session::put('Customer', $customer);
            
            Session::put('customerName', $customerName);
    
            return redirect('/contatti');
    
            // return view('amministrazione.salvaUtenti');
        }

    public function accesso(Request $request)
    {
        $this->validate($request, ['email' => 'email|required',
        'password' => 'required' ]);

        $Customer  = Customer::where('email', $request->input('email'))->first();
       

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
            return redirect('/contatti')->with('status', 'Utente loggato correttamente');
                
            } else {
                return back()->with('status', 'Email o password non corretta');
            }
        } else {
            return back()->with('status', 'Non hai un account con questa email');
        }
    }

    public function logout()
    {
        Session::forget('Customer');
        return redirect('/');
    }

    public function cart()
    {
        if (!Session::has('cart')) {
            return view('front.cart');
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
    public function update_qty(Request $request, $id)
        {
            $oldCart = Session::has('cart')? Session::get('cart'):null;
            $cart = new Cart($oldCart);
            
            $cart->updateQty($id, $request->quantity);
            
            Session::put('cart', $cart);
    
            // dd(Session::get('cart'));
            return back();
        }
}
