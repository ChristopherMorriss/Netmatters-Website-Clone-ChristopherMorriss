<!DOCTYPE html>
<?php require "php/function.php" ?>
<html lang="en">
    <head>  
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <link href="css/normalize.css" rel="stylesheet">
        <link href="css/slick.css" rel="stylesheet">
        <link href="css/slick-theme.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <?php include "php/phpenv.php" ?>
    <title>Full Service Digital Agency | Cambridgeshire &amp; Norfolk | Netmatters</title>
    </head>

    <body class="contact-page">
    <?php require "php/validation.php" ?>
        <div id="container">
            <header>
                <?php include "php/header.php" ?>
                <?php include "php/sticky-header.php" ?>
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
                
            </header>
            <div class="shadow-start">
                <div class="container">
                    <ul class="one-line"> 
                        <li><a href="#" class="black-link" id="bold-link">Home</a></li>
                        <li>Our Offices</li>
                    </ul>
                </div>
            </div>
            <div class="section our-offices-bg">
                <div class="container">
                    <h1 class="our-offices">Our Offices</h1>
                </div>
            </div>
            <div class="office-addresses container">
                <div class="infor">
                    <div class="office-address-1 office-box">
                        <div class="office-img">
                            <a href="#"><img src="img/cambridge.jpg" alt="Cambridge Office"></a>
                        </div>
                        <div class="office-content">
                            <h2>Cambridge Office</h2>
                            <p class="address">
                                Unit 1.31,<br>
                                St John's Innovation Centre,<br>
                                Cowley Road, Milton,<br>
                                Cambridge,<br>
                                CB4 0WS<br>
                            </p>
                            <div class="telephone"><a href="#">01223 37 57 72</a></div>
                            <a href="#" class="btn purple-btn">View More</a>
                        </div>
                    </div> 
                </div>
                <div class="infor">
                    <div class="office-address-2 office-box">
                        <div class="office-img">
                            <a href="#"><img src="img/wymondham.jpg" alt="Wymondham Office"></a>
                        </div>
                        <div class="office-content">
                            <h2>Wymondham Office</h2>
                            <p class="address">
                                Unit 15,<br>
                                Penfold Drive,<br>
                                Gateway 11 Business Park,<br>
                                Wymondham, Norfolk,<br>
                                NR18 0WZ<br>
                            </p>
                            <div class="telephone"><a href="#">01603 70 40 20</a></div>
                            <a href="#" class="btn purple-btn">View More</a>
                        </div>
                    </div> 
                </div>
                <div class="infor">
                    <div class="office-address-3 office-box">
                        <div class="office-img">
                            <a href="#"><img src="img/yarmouth-2.jpg" alt="Great Yarmouth Office"></a>
                        </div>
                        <div class="office-content">
                            <h2>Great Yarmouth Office</h2>
                            <p class="address">
                                Suite F23,<br>
                                Beacon Innovation Centre,<br>
                                Beacon Park, Gorleston,<br>
                                Great Yarmouth, Norfolk,<br>
                                NR31 7RA<br>
                            </p>
                            <div class="telephone"><a href="#">01493 60 32 04</a></div>
                            <a href="#" class="btn purple-btn">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        <div class="container section form_for_contact">
            <div class="flex-enquiry">
                <div id="active-hours">
                    <div class="bold-contacts">
                        <p><strong>Email us on:</strong><br></p>
                        <p><a href="#" class="h3" id="sales-email">sales@netmatters.com</a></p>
                        <p><strong>Business hours:</strong></p>
                        <p><strong>Monday - Friday 07:00 - 18:00&nbsp;</strong></p>
                    </div>
                    <div class="container out-of-hours">
                        <h4 class="accordion">Out Of Hours IT Support<span class="ticon-chevron-down"></span></h4>
                        <div class="hidden-accordion">
                            <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                            <p>
                                <strong>Monday - Friday 18:00 - 22:00</strong><br>
                                <strong>Saturday 08:00 - 16:00</strong><br>
                                <strong>Sunday 10:00 - 18:00</strong>
                            </p>
                            <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours&nbsp; voicemail. A technician will contact you on the number provided within 45 minutes of your call.&nbsp;</p>
                        </div>
                    </div>
                </div>
                <?php
                    if (isset($error_message)){
                        echo "<p class='message'>$error_message</p>";
                    }
                ?>

                <form id="form" method="post" action="contact-us.php" target="frame">  
                    <!-- onclick="return false" -->
                    <div>
                        <div class="flex-form">
                            <div class="error-box">
                                <div class="error-validation validation-box" id="wait">
                                    Please wait until submitting the form again
                                    <button class="close" onclick="deleteWaitMessage()">×</button>
                                </div>
                                <div class="error-validation validation-box" id="tele-format">
                                    The telephone format is incorrect.
                                    <button class="close" onclick="deleteTelephoneMessage()">×</button>
                                </div>
                                <div class="success-validation validation-box" id="sent-msg">
                                    Your message has been sent!
                                    <button class="close" onclick="deleteSuccessMessage()">×</button>
                                </div>
                                <div class="error-validation validation-box" id="characters">
                                The message must be at least 5 characters.
                                    <button class="close" onclick="deleteCharactersMessage()">×</button>
                                </div>
                            </div>
                            <div class="form-section">
                                <label for="name">Your Name<span class="red-asterix"> *</span></label>
                                <input type="text" id="name" name="user-name" oninput="validInput()">
                            </div>
                            <div class="form-section">
                                <label for="company">Company Name</label>
                                <input type="text" id="company" name="user-company">
                            </div>
                            <div class="form-section">
                                <label for="email">Your Email<span class="red-asterix"> *</span></label>
                                <input type="text" id="email" name="user-email" oninput="validInput()">
                            </div>
                            <div class="form-section">
                                <label for="telephone">Your Telephone Number<span class="red-asterix"> *</span></label>
                                <input type="text" id="telephone" name="user-telephone" oninput="validInput()"><br>
                            </div>
                        </div>
                        <div class="form-section">
                            <label for="message">Message<span class="red-asterix"> *</span></label>
                            <textarea id="message" name="message" oninput="validInput()">Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?
                            </textarea>
                        </div>
                        <div class="form-section">
                            <label class="flexbox-checkbox">
                                <span class="checkbox button" id="custom-checkbox">
                                    <input name="checkbox" type="checkbox" class="invisible-box" value="0">
                                    <span class="ticon-checkmark" id="invisible-tick"></span>
                                </span>
                                <span class="checkbox-msg">
                                    Please tick this box if you wish to receive marketing information from us. Please see our <a href="#" class="perma-underline">Privacy Policy</a>
                                    for more information on how we keep your data safe.
                                </span>
                            </label>
                        </div>
                        <div class="form-section captcha">
                            <span class="reCAPTCHA">This site is protected by reCAPTCHA and the Google <a href="#" class="perma-underline">Privacy Policy</a> and <a href="#" class="perma-underline">Terms of Service</a> apply.</span>
                        </div>
                        <div class="enquiry-field">
                            <button class="btn" id="send-enquiry">Send Enquiry</button>
                            <small class="required-note"><span class="red-asterix"> *</span> Fields Required</small>
                        </div>
                    </div>
                </form>              
            </div>
        </div>
   
    

    <?php include "php/cookie.php" ?>
    <?php include "php/menu.php" ?>
    <?php include "php/footer.php" ?>
    </div>
    <iframe name="frame"></iframe>
    <!-- Iframe stops the page from reloading without preventing the default behaviour -->
    <!-- Preventing the default behaviour stops the "X" on the error/success message from working -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/slick.js"></script> 
    <script src="js/main.js"></script>
    </body>
</html>