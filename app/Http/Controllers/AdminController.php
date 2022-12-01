<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Service;
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
    


    public function dashboard()
        {
            if (Session::has('amministratore')){
                return view('ammne.dashboard');
            } else {
                return redirect('/admin')->with('status', 'You should login as Admin!');  
            }
            // return view('ammne.dashboard');
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
        return view('ammne.editCustomer')->with('customer', $customer);
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
        $customer->nome=$request->input('nameUpdate');
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
        $customer->name=$request->name_utente;
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



    public function createServices()
    {
        if (Session::has('amministratore')){
            return view('ammne.createServices');
        } else {
            return redirect('/admin')->with('status', 'You should login as Admin!');  
        }
        
    }

    public function saveService(Request $request)
    {
      //
        $fileName= $request->file('uploadfile')->getClientOriginalName();

        //test che immagine abbia il nome corretto e categoria il numero
        //indicato in categoria
        // $fileName = cipolla.png
        //  print($fileName);
        //   print($request->input('categoria'));

        /*   se ho caricato un file che al suo interno contiene
         name="uploadfile"  */
        if ($request->hasFile('uploadfile')) {
            //ho caricato il file

//
            $path=$request->file('uploadfile')->storeAs('public/img_service', $fileName);
            //$path= public/img_prodotto/cipolla.png
            // print($path);

            $file = $request->file('uploadfile');
            // print($file);
            $path = public_path().'/tema/images';
            $uplaod = $file->move($path,$fileName);
        } else {
            $fileName ='nessuna Immagine';
        }

        $service = new Service();
        $service->name = $request->input('nome');
        $service->description = $request->input('editor1');
        $service->price= $request->input('prezzo');
        $service->discount= $request->input('sconto');
        $service->category = $request->input('categoria');
        $service->image= 'images/'.$fileName;
        $service ->save();

       
        Session::put('success', 'Service saved');
        return back();
        // print($fileName);

    }
    public function listServices()
    {
        if (Session::has('amministratore')){
            $services = Service::paginate(10);
            return view('ammne.listServices')->with('services', $services );
        } else {
            return redirect('/admin')->with('status', 'You must login as Admin!');  
        }
       
    }
  
    public function editService($id)
    {
        if (Session::has('amministratore')){
            $service = Service::find($id);
            return view('ammne.editService')->with('service', $service);
        } else {
            return redirect('/admin')->with('status', 'You must login as Admin!');  
        }
        
    }

    public function updateService(Request $request)
    {
        //deve catturare le info id, email aggiornata
        //deve eseguire una query update nel DB
        // deve tornare a listaUtenti che esehuirà una query sul DB dove il record è stato aggiornato
        // mette in una sessione che ha nome sucess il valore: Utente aggiornato

        //catturano il dato
        $service = Service::find($request->input('id'));
        $service->name=$request->input('nomeUpdate');
        $service->description=$request->input('descUpdate');
        //esegue update nel BD
        $service->update();
        // mette in una sessione chiamata success il valore utente aggiornato
        // questo valore viene visualizzato in listaUtenti
        //NB usare use Session;
        Session::put('success', 'Service updated');
        //ritorna alla lista utenti dove viene eseguita la query
        //con i dati aqggiornati
        return redirect('/listServices');
    }

    public function deleteservice($id)
    {
        $service =  Service::find($id);
        $service->delete();
        Session::put('success', 'Service deleted');
        return redirect('/listServices');
    }
    public function ordini()
    {
        $orders = Order::paginate(3);
        //trasformo info da seriale json ad un array, 
        //su cui posso applicare foreach
        //dove $key=unserialize($order->cart)
        $orders->transform(function ($order, $key) {
            $order->cart = unserialize($order->cart);

            return $order;
        });
        return view('ammne.ordini')->with('orders', $orders);
    }
    

}
