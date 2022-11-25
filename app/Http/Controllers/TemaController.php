<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Service;
use Illuminate\Support\Facades\Validator;
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
            $inputs = [
                'email'=>$request->email_reg,
                'password' => md5($request->psw_reg),
                'nome'=>$request->name_reg
            ]; 
            /* $rules= [
                'nome' => [
                    'required' => 'We need to know your name!',
                    'min:2'=> 'Name must contain at least 2 characters!'
                ],
                'email' => [
                    'required' => 'We need to know your email address!',
                    'email' => 'Your email shoul be written correctly!'
                ],
                    'password' => [
                        'required' => 'Password is required!',
                        'min:6'=> 'Password must contain at least 6 characters!',
                        'regex:/[a-z]/' => 'Password must contain at least one lowercase letter ',
                        'regex:/[A-Z]/' => 'Password must contain at least one uppercase letter ',
                        'regex:/[0-9]/' => 'Password must contain at least one number ',
                        'regex:/[@$!%*#?&]/' => 'Password must contain at least one special character ',
                    ],
            ]; */
            $rules = [
                'name' => [
                    'required',
                    'min:2'
                ],    
                'email'    => 'required|email',
                'password' => [
                    'required',
                    'min:6',             // must be at least 6 characters in length
                    'regex:/[a-z]/',      // must contain at least one lowercase letter
                    'regex:/[A-Z]/',      // must contain at least one uppercase letter
                    'regex:/[0-9]/',      // must contain at least one digit
                    'regex:/[@$!%*#?&]/', // must contain a special character
                ],
            ];

            $validation = Validator::make( $inputs, $rules)->validate();

            if ( $validation->fails() ) {
                print_r( $validation->errors()->all() );
            }

            else{
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
            }

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

    public function logoutUser()
    {
        Session::forget('Customer');
        Session::forget('customerName');

        return redirect('/');

    }

    //----------------------------------------CART

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
