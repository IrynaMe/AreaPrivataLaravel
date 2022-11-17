<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

use Session;


class TemaController extends Controller
{
    public function home()
        {
            return view('front.home');
        }
    public function areaUtenti()
        {
            return view('front.areaUtenti');
        }
    public function contatti()
        {
            return view('front.contatti');
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
            Session::put('success', 'Utente creato');
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
            echo $password."<br>";
            $passwordDB= ($Customer->password);
            echo $passwordDB;
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
}
