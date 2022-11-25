

<div class="container">

<div class="contact-form">

    <!-- Form -->
    <form role="form" id="contact-us" action="mail_invio.php" method="post" onsubmit="return checkForm_mail(this);">
        <!-- Left Inputs -->

        <div class="row">
            <div class="form-group col-md-6" style="text-align:center;">
                <!-- Name -->
                <div class="form-group row">
                    <label for="Name" class="col-md-2 col-form-label">Name</label>
                    <input type="text" name="nome" id="nome" class="form-control col-md-10"
                        placeholder="Type your name" value="" />
                </div>
                <!-- Email -->
                <div class="form-group row">

                    <label for="Email" class="col-md-2 col-form-label">Email</label>
                    <input type="text" name="email" id="email" class="form-control col-md-10"
                        placeholder="Type your email" value="" />
                </div>
                <!-- Subject -->
                <div class="form-group row">
                    <label for="Subject" class="col-md-2 col-form-label">Subject</label>
                    <input type="text" name="oggetto" id="oggetto" class="form-control col-md-10"
                        placeholder="What is your message about" value="" />
                </div>
            </div><!-- End Left Inputs -->

            <!-- Right Inputs -->
            <div class="form-group col-md-6">
                <!-- Message -->
                <label for="Message" class="col-md-12 col-form-label">Write your message here</label>
                <textarea name="testo" id="testo" class="form-control" placeholder="Write your message here" value=""></textarea>

            </div><!-- End Right Inputs -->



            <div class="row">
                <div class="relative col-12">
                    <!-- Send Button -->
                    <button type="submit" id="submit" name="submit" class="btn btn-block btn-success">Send
                        message</button>
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
                    <br><br>
                </div>
            </div>

            <div class="clear"></div>
        </div>
    </form>

    <div class="relative col-12 " style="text-align: center;">
        <a href="esci.php">
            <button type="reset" id="reset" name="submit" class="form-btn semibold btn-block">reinserisci
                email smtp <br> </button>
        </a>
    </div>
    <br>


</div>
</div>
