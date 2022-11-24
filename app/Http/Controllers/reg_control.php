public function registraUtente(Request $request)
        {   $validName=$this->validate($request, [
            'name' => 'required|min:3|max:50',]);
            $validEmail=$this->validate($request, [
            'email' => 'email|required',]);
            $validPassword=$this->validate($request, [
            'password' => 'password|required|min:6',
        ]);
            if ($validName) {
if ($validEmail) {
    if ($validPassword) {
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
    } else {
        return back()->with('status', 'Il password deve contenere almeno 6 caratteri');
    }
}
                else {
                    return back()->with('status', 'Email deve essere coretto');
            }
            else {
                return back()->with('status', 'Il nome deve contenere 3-50 caratteri');
            }
            
            
    
            // return view('amministrazione.salvaUtenti');
        }