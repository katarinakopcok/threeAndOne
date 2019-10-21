<?php $title = "Three and one design / ask us";
include("head.php") ?>
    <body id="ask">
<?php include("header.php") ?>
    <!-- Contact form START -->
    <div class="row">
        <div id="ask-us" class="col-xs-12 col-sm-offset-3 col-sm-8 col-md-8 col-md-offset-3 col-lg-8 col-lg-offset-3">
            <section id="contact">
                <div class="container-fluid contact">
                    <h2 class="style2">We love to work with awesome people!</h2>
                    <h3 class="style3">Getting in touch is easy</h3>

                    <!-- Message -->
                    <div class="alert alert-success" style="display: none;">

                        <strong>Thank you, message has been successfully sent! We will contact you asap!</strong>
                    </div>
                    <!-- Contact form -->
                    <div class="col-lg-8 col-lg-offset-2">
                        <form action="_send-email.php" method="post" id="contact-form">
                            <div class="form-group text-center">
                                <label for="SenderName">Name</label>
                                <input type="text" name="SenderName" class="form-control" id="SenderName" required>
                            </div>
                            <div class="form-group text-center">
                                <label for="SenderEmail">E-mail</label>
                                <input type="email" name="SenderEmail" class="form-control" id="SenderEmail" required>
                            </div>
                            <div class="form-group text-center">
                                <label for="SenderMessage">Message</label>
                                <textarea name="SenderMessage" id="SenderMessage" class="form-control"
                                          required></textarea>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary">Send</button>
                            </div>
                        </form>


                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Contact Section END -->
<?php include("footer.php") ?>