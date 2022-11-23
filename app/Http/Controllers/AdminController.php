<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Amministratore;
use App\Models\Customer;
use Session;

class AdminController extends Controller
{
    public function login()
        {
            return view('ammne.login');
        }
    public function dashboard()
        {
            if (Session::has('amministratore')){
                return view('ammne.dashboard');
            } else {
                return redirect('/admin')->with('status', 'You should login as Admin!');  
            }
            // return view('ammne.dashboard');
        }
    public function loginAmmre(Request $request)
    {

        $this->validate($request, ['email' => 'email|required',
                                   'password' => 'required' ]);

        $Amministratore  = Amministratore::where('email', $request->input('email'))->first();

        if ($Amministratore) {
            $password=md5($request->input('password'));
            //echo $password."<br>";
            $passwordDB= ($Amministratore->password);
            //echo $passwordDB;
            if ($password == $passwordDB) {
                Session::put('amministratore', $Amministratore);
                // echo 'passo da qui';
       
                return redirect('/dashboard')->with('status', 'Admin loggato correttamente');
            
            } else {
                return back()->with('status', 'Email o password non corretta');
            }
        } else {
            return back()->with('status', 'Non hai un account con questa email');
        }
    }

    public function logout()
        {
            Session::forget('amministratore');
            return redirect('/');
        }

    public function creaUtenti()
    {
        return view('ammne.creaUtenti');
    }

    public function listaUtenti()
    {
        // return view('amministrazione.listaUtenti');

        //torna il risiultato della query organizzato per pagina
        //1 = un record per ogni pagination
        //equivale PHP a
        $customers = Customer::paginate(4);
        //ritorna la vista aggiungendo il risultato della query $customer
        return view('ammne.listaUtenti')->with('customers', $customers);
    }

    public function editCustomer($id)
    {
        //trovare tutte le info (email e id) del record che ha id =$id (quello che ho passato)
        //ritorna queste info a una pagina che si chiama amministrazione/editCustomer.blade.php
        //In amministrazione.editCustomer ci sarà il campo di di input

        $customer = Customer::find($id);
        return view('amministrazione.editCustomer')->with('customer', $customer);
    }

    public function aggiornaCustomer(Request $request)
    {
        //deve catturare le info id, email aggiornata
        //deve eseguire una query update nel DB
        // deve tornare a listaUtenti che esehuirà una query sul DB dove il record è stato aggiornato
        // mette in una sessione che ha nome sucess il valore: Utente aggiornato

        //catturano il dato
        $customer = Customer::find($request->input('id'));
        $customer->email=$request->input('emailUpdate');

        //esegue update nel BD
        $customer->update();

        // mette in una sessione chiamata success il valore utente aggiornato
        // questo valore viene visualizzato in listaUtenti
        //NB usare use Session;

        Session::put('success', 'Utente aggiornato');

        //ritorna alla lista utenti dove viene eseguita la query
        //con i dati aqggiornati
        return redirect('/listaUtenti');
    }

    public function salvaUtenti(Request $request)
    {
        $customer = new Customer();
        $customer->email=$request->email_utente;
        $customer->password = md5($request->psw_utente);
        $customer->save();

        Session::put('success', 'Utente creato');

        return redirect('/creaUtenti');

        // return view('amministrazione.salvaUtenti');
    }

    public function delete($id)
    {
        $customer = Customer::find($id);

        $customer->delete();
        Session::put('success', 'Utente Cancellato');
        return redirect('/listaUtenti');
    }
}
