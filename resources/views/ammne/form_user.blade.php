{{-- <h3 style="text-align:center">Nuovo Utente</h3> --}}
<div class="col">
    <div class="col-8">
        <h3 class="card-title text-center">Create a new user </h3>
        <div class="card-text">
            <!--
   <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
            <form onsubmit="return checkForm_utente(this);" action="/salvaUtenti" method="post">
                @csrf
                <!-- to error: add class "has-danger" -->
                <div class="form-group">
                    <label for="email_utente">Name</label>
                    <input type="text" class="form-control form-control-sm" id="name_utente" name="name_utente">
                </div>
                <div class="form-group">
                    <label for="email_utente">Email</label>
                    <input type="text" class="form-control form-control-sm" id="email_utente" name="email_utente">
                </div>
                <div class="form-group">
                    <label for="psw_utente">Password</label>

                    <input type="password" class="form-control form-control-sm" id="psw_utente" name="psw_utente">
                    <br>
                </div>
                <div class="form-group">
                    <label for="psw_utente">Confirm password</label>
                    <input type="password" class="form-control form-control-sm" id="psw_utente_conferma"
                        name="psw_utente_conferma">
                </div>
                {{--                 <div class="form-check">
                    <input type="checkbox" class="form-check-input" onclick="mostraPsw()">
                    <label class="form-check-label" for="exampleCheck1">Mostra Password</label>
                </div> --}}
                <br>
                <div class="form-group" style="font-size:20px; font-weight:bold">

                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary" name="CreaUtente">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
