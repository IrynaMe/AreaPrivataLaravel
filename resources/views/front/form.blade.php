@if ($errors->any())
    <div class="alert alert-warning" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    </div>
@endif
{{-- @if (Session::has('Customer'))
    <h4 id="Customer" style="display: none"> {{ Session::get('Customer') }}</h4>

    </div>
@endif --}}

@if (Session::has('status'))
    <div class="alert alert-success" role="alert">
        <h4> {{ Session::get('status') }} </h4>
        {{ Session::now('status', null) }}
    </div>
@endif
<div class="alert alert-danger" role="alert" name="mustLogin" id="mustLogin" style="display:none;">
    <h4> You must <a style="text-decoration:underline;" href={{ '/loginUser' }}>login </a>before
        writing message</h4>
</div>



<!-- Form Area -->


<div class="container">

    <div class="row">
        <div class="col-md-6">
            <br>
            <h1 style="color:rgb(62, 56, 76); text-align:center;" id="title1">Write your message here</h1>
            <br>
            <br>
            <div class="col-xl-8 offset-xl-2 py-5">


                {{-- action={{ '/mail' }} --}}
                <!-- We're going to place the form here in the next step -->
                <form role="form" id="contact-us" action={{ '/mail' }} method="post"
                    onsubmit="return checkForm_mail(this);" onclick="return mustLogin()">
                    @csrf
                    {{-- <div class="messages"></div> --}}
                    <div class="controls">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Firstname</label>
                                    <input id="nome" type="text" name="nome" class="form-control"
                                        placeholder="Please enter your firstname *" data-error="Firstname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_lastname">Lastname </label>
                                    <input id="form_lastname" type="text" name="surname" class="form-control"
                                        placeholder="Please enter your lastname ">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Email</label>
                                    <input id="email" type="email" name="email" class="form-control"
                                        placeholder="Please enter your email *" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_need">What is your message about </label>
                                    <select id="oggetto" name="oggetto" class="form-control"
                                        data-error="Please specify your need.">
                                        <option value=""></option>
                                        <option value="Request quotation">Services details</option>
                                        <option value="Request order status">Order status</option>
                                        <option value="Request copy of an invoice">Technical issues</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form_message">Message *</label>
                                    <textarea id="testo" name="testo" class="form-control" placeholder="Please write your message" rows="4"
                                        data-error="Please, leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                {{--    <input type="submit" class="btn btn-success btn-send" value="Send message"> --}}
                                <button type="submit" id="submit" name="submit"
                                    class="btn btn-block btn-success">Send
                                    message</button>
                            </div>
                            <div style="text-align:center;" id="invio">

                                <?php
                                if (isset($_SESSION['mail_invio'])) {
                                    //la metto in una variabile
                                    //controllo valore
                                    //se valore=1  echo email e inviata con sucesso
                                    // else if valore=0 email non inviata
                                    $mail = $_SESSION['mail_invio'];
                                    if ($mail == 1) {
                                        echo 'Email inviata con sucesso!';
                                        unset($_SESSION['mail_invio']);
                                    } else {
                                        echo 'Email NON inviata';
                                        unset($_SESSION['mail_invio']);
                                    }
                                }
                                ?>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-muted">
                                    <strong>*</strong> These fields are required
                                </p>
                            </div>
                        </div>
                    </div>

                </form>

            </div>

        </div>
        <div class="col-md-6">
            <br>
            <h1 style="color:rgb(62, 56, 76); text-align:center;" id="title1">Contact us</h1>
            <br>

            {{-- 
            <h4>Address: Nice Square, 1 </h4>
            <h4>London</h4>
            <h4>United Kingdom </h4>
            <br>
            <h4>ZIP 12345</h4>
            <h4>Phone: (987) 123456789 </h4> --}}
            <div class="col-1">
                <div class="google-map" style="margin-left: 50px; !important">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26359195.17562375!2d-113.7156245614499!3d36.2473834534249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1471497559566"
                        frameborder="0" style="border:0;width:450px; height:200px;" allowfullscreen=""></iframe>
                </div>
            </div>
            <div class="col-1">
                <div class="contact-info" style="margin-left: 50px;!important">
                    <div class="contact-grid-w3l-agile ">
                        <h4>Address </h4>
                        <p>9870 St Vincent Place,Glasgow, DC 45 Fr 45..</p>
                        <p>Telephone : +1 800 603 6035</p>
                        <p>Freephone : + 1900 904 5898</p>
                        <p>Email : <a href="mailto:info@example.com"> mail@example.com</a></p>
                    </div>


                    <div class="clearfix"></div>
                </div>
            </div>


        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"
    integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
<script src="contact.js"></script>



<script>
    function mustLogin() {
        var Customer = document.getElementById("Customer");
        if (!Customer) {
            var alert_log = document.getElementById("mustLogin");
            alert_log.style.display = "block";
            // alert("Error: You must login before writting your message!");

            return false;
        }


    }
</script>
{{-- <script>
    function checkForm_mail(form) {

        if (form.nome.value == "") {
            alert("Error: You must write your name!");

            return false;
        }

        if (form.email.value == "") {
            alert("Error: Email field must not be empty!");

            return false;
        }

        re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (!re.test(form.email.value)) {
            alert("Error: email must be valid!");

            return false;
        }

        if (form.oggetto.value == "") {
            alert("Error: Subject is mandatory!");

            return false;
        }
        if (form.testo.value == "") {
            alert("Errore: Message is mandatory!");

            return false;
        }

        alert("All fields are filled correctly");
        return true;
    }
</script>
 --}}
