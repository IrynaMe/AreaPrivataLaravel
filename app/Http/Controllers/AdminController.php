<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loginAmmre(Request $request)
    {
        //test di funzionamento
        // dd($request);
        // test che in $request ci sono i dati inseriti nel form (con gli input di nome 'email_log' e 'psw_log'
        // $this->email = $request->input('email_log');
        // echo ($this->email);
        // $this->email = $request->input('psw_log');
        // echo ($this->email);
        $this->validate($request, ['email' => 'email|required',
                                   'password' => 'required' ]);

        $Amministratore  = Amministratore::where('email', $request->input('email'))->first();

        if ($Amministratore) {
            $password=md5($request->input('password'));
            echo $password."<br>";
            $passwordDB= ($Amministratore->password);
            echo $passwordDB;
            if ($password == $passwordDB) {
                Session::put('amministratore', $Amministratore);
                // echo 'passo da qui';
       
                return redirect('/dashboard');
            
            } else {
                return back()->with('status', 'Email o password non corretta');
            }
        } else {
            return back()->with('status', 'Non hai un account con questa email');
        }
    }
}
