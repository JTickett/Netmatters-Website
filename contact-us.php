<!DOCTYPE html>
<html lang="en">

<?php
    include('src/head.php');
?>

<body>

    <?php
        include('src/cookies.php');
        include('src/sidebar.php');
    ?>

    <div id="page-wrapper">

    <?php
        include('src/header.php');
    ?>

        <!-- Main Section -->
        <main id="page-main" class="">

        <div class="breadcrumb">
            <div class="reusable-container">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>Our Offices</li>
                </ul>
            </div>
        </div>

        <section id="offices" class="">
            <div id="offices-header">
                <h1 class="reusable-container">Our Offices</h1>
            </div>

            <div class="offices-container reusable-container">

                <div class="officer-card-wrapper">
                    <div class="office-card">
                        <a class="office-image" href="#"><img src="images/cambridge.jpg" alt="Cambridge Office"></a>
                        <div class="office-content">
                            <h3 class="office-title"><a href="#">Cambridge Office</a></h3>
                            <p class="office-address">
                                Unit 1.31,
                                <br>St John's Innovation Centre,
                                <br>Cowley Road, Milton,
                                <br>Cambridge,
                                <br>CB4 0WS
                            </p>
                            <div class="office-phone">
                                <a href="tel:01223375772">01223 37 57 72</a>
                            </div>
                            <div class="office-button">
                                <a class="button service-color-webdesign" href="#">View More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="officer-card-wrapper">
                    <div class="office-card">
                        <a class="office-image" href="#"><img src="images/wymondham.jpg" alt="Wymondham Office"></a>
                        <div class="office-content">
                            <h3 class="office-title"><a href="#">Wymondham Office</a></h3>
                            <p class="office-address">
                                Unit 15,
                                <br>Penfold Drive,
                                <br>Gateway 11 Business Park,
                                <br>Wymondham, Norfolk,
                                <br>NR18 0WZ
                            </p>
                            <div class="office-phone">
                                <a href="tel:01603704020">01603 70 40 20</a>
                            </div>
                            <div class="office-button">
                                <a class="button service-color-webdesign" href="#">View More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="officer-card-wrapper">
                    <div class="office-card">
                        <a class="office-image" href="#"><img src="images/yarmouth-2.jpg" alt="Yarmouth Office"></a>
                        <div class="office-content">
                            <h3 class="office-title"><a href="#">Yarmouth Office</a></h3>
                            <p class="office-address">
                                Suite F23,
                                <br>Beacon Innovation Centre,
                                <br>Beacon Park, Gorleston,
                                <br>Great Yarmouth, Norfolk,
                                <br>NR31 7RA
                            </p>
                            <div class="office-phone">
                                <a href="tel:01493603204">01493 60 32 04</a>
                            </div>
                            <div class="office-button">
                                <a class="button service-color-webdesign" href="#">View More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </section>

        <section id="contact" class="reusable-container">
            <div class="contact-details">
                <p><strong>Email us on:</strong></p>

                <p>
                    <a href="mailto:sales@netmatters.com">sales@netmatters.com</a>
                </p>

                <p><strong>Business hours:</strong></p>

                <p><strong>Monday - Friday 07:00 - 18:00</strong></p>


                <details>
                    <summary>Out of Hours IT Support</summary>

                    <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>

                    <p>
                        <strong>Monday - Friday 18:00 - 22:00</strong>
                        <br>
                        <strong>Saturday 08:00 - 16:00</strong>
                        <br>
                        <strong>Sunday 10:00 - 18:00</strong>
                    </p>

                    <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours  voicemail. A technician will contact you on the number provided within 45 minutes of your call.</p>
                </details>
            </div>

            <div class="contact-form section">
                <form id="email-form" method="post" action="">

                    <div class="form-flex-container">
                        <div class="form-group">
                            <label class="required-field" for="name">Your Name</label>
                            <input class="form-control" type="text" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="company">Company Name</label>
                            <input class="form-control" type="text" name="company" placeholder="Company">
                        </div>
                        <div class="form-group">
                            <label class="required-field" for="email">Your Email</label>
                            <input class="form-control" type="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label class="required-field" for="phone">Your Telephone Number</label>
                            <input class="form-control" type="tel" name="phone" placeholder="Phone">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="contact-message" class="form-control" name="message" placeholder="Message">Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?</textarea>
                    </div>

                    <!-- Checkbox and Privacy Policy -->
                    <div class="form-group">
                        <label id="email_checkbox_label" class="form-checkbox" for="email_checkbox">
                            <input type="checkbox" id="email_checkbox" name="marketing">
                            <span id="visible_checkbox" class="email-form__checkbox-box"></span>
                            <span>
                                Please tick this box if you wish to receive marketing information from us. Please
                                see our
                                <a href="#"> Privacy Policy</a>
                                 for more information on how we keep your data safe.
                            </span>
                        </label>
                    </div>

                    <div class="form-group">
                        <span id="recaptcha-text">
                        This site is protected by reCAPTCHA and the Google 
                        <a href=""><u>Privacy Policy</u></a>
                         and 
                        <a href=""><u>Terms of Service</u></a>
                         apply.
                        </span>
                    </div>

                    <div class="form-button">
                        <button class="button" type="submit">Send Enquiry</button>
                        <small id="required-fields-label">Fields Required</small>
                    </div>
                </form>
            </div>

        </section>

        </main>

        <?php
            include('src/footer.php');
        ?>


    <!-- Javascript Stuff relocated from the HEAD -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/slick/slick.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/stickyhead.js"></script>
    <script src="js/cookie.js"></script>
    <script src="js/contact.js"></script>


</body>

</html>