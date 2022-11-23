{{-- if (!isset($_SESSION['email'])) {
    header('location:index.php');
}
 --}}



<h1 style="text-align:center" id="title">Write your message here</h1>
<br>
<!-- Form Area -->



<div class="contact-form">

    <!-- Form -->
    <form role="form" id="contact-us" action="mail_invio.php" method="post" onsubmit="return checkForm_mail(this);">
        <!-- Left Inputs -->
        <div class="container">
            <div class="row">
                <div class="col-6" style="text-align:center;">
                    <!-- Name -->

                    <input type="text" name="nome" id="nome" class="form" placeholder="Name"
                        value="" />

                    <!-- Email -->
                    <input type="text" name="email" id="email" class="form" placeholder="Email"
                        value="" />
                    <!-- Subject -->
                    <input type="text" name="oggetto" id="oggetto" class="form" placeholder="Subject"
                        value="" />
                </div><!-- End Left Inputs -->
                <!-- Right Inputs -->
                <div class="col-6 ">
                    <!-- Message -->

                    <textarea name="testo" id="testo" class="form textarea" placeholder="Write your message here" value=""></textarea>

                </div><!-- End Right Inputs -->

            </div>

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
    </form>

    <div class="relative col-12 " style="text-align: center;">
        <a href="esci.php">
            <button type="reset" id="reset" name="submit" class="form-btn semibold btn-block">reinserisci
                email smtp <br> </button>
        </a>
    </div>
    <br>


</div><!-- End Contact Form Area -->
