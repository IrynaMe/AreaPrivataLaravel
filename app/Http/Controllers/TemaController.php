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

                return redirect('/areaUtenti')->with('status', 'Utente loggato correttamente');
                
            } else {
                return back()->with('status', 'Email o password non corretta');
            }
        } else {
            return back()->with('status', 'Non hai un account con questa email');
        }
    }
}
