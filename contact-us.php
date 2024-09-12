<!DOCTYPE html>
<html lang="en">
    <head>  
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <link href="css/normalize.css" rel="stylesheet">
        <link href="css/slick.css" rel="stylesheet">
        <link href="css/slick-theme.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <?php
            require_once realpath(__DIR__ . "/vendor/autoload.php");
            use Dotenv\Dotenv;
            $dotenv = Dotenv::createImmutable(__DIR__);
            $dotenv->load();?>
    <title>Full Service Digital Agency | Cambridgeshire &amp; Norfolk | Netmatters</title>
    </head>

    <body>
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
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Our Offices</li>
                    </ul>
                </div>
            </div>
            <h1>Our Offices</h1>
            <div class="office-adresses">
                <div class="office-address-1">
                    <div class="office-img">
                        <img src="img/cambridge.jpg" alt="Cambridge Office">
                    </div>
                    <div class="office-content"></div>
                    <h2>Cambridge Office</h2>
                    <p>
                    Unit 1.31,
                    St John's Innovation Centre,
                    Cowley Road, Milton,
                    Cambridge,
                    CB4 0WS
                    </p>
                    <div class="telephone">01223 37 57 72</div>
                </div> 
                <div class="office-address-2">
                    <div class="office-img">
                        <img src="img/wymondham.jpg" alt="Wymondham Office">
                    </div>
                    <div class="office-content"></div>
                    <h2>Wymondham Office</h2>
                    <p>
                    Unit 15,
                    Penfold Drive,
                    Gateway 11 Business Park,
                    Wymondham, Norfolk,
                    NR18 0WZ
                    </p>
                    <div class="telephone">01603 70 40 20</div>
                </div> 
                <div class="office-address-3">
                    <div class="office-img">
                        <img src="img/yarmouth-2.jpg" alt="Great Yarmouth Office">
                    </div>
                    <div class="office-content"></div>
                    <h2>Great Yarmouth Office</h2>
                    <p>
                    Suite F23,
                    Beacon Innovation Centre,
                    Beacon Park, Gorleston,
                    Great Yarmouth, Norfolk,
                    NR31 7RA
                    </p>
                    <div class="telephone">01493 60 32 04</div>
                </div>
            </div>
        </div>
        
    <form id="form">
        <h1>Email Newsletter Sign-Up</h1>
        <h2>Your Name</h2>
        <input type="text" id="name" name="user-name">
        <h2>Your Email</h2>
        <input type="text" id="email" name="user-email"><br>
        <h2>Company Name</h2>
        <h2>Your Telephone Number</h2>
        <input type="checkbox"id="check" name="user-checkbox">
        <p>Please tick this box if you wish to receive marketing information from us. Please see our <a href="#">Privacy Policy</a>
        for more information on how we keep your data safe. </p>
        <span>This site is protected by reCAPTCHA and the Google <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a> apply.</span>
        <div class="enquiry-field">
            <button>Send Enquiry</button>
            <small>Fields Required</small>
        </div>
    </form> 
    <div>
        <p><strong>Email us on:</strong><br></p>
        <p><a href="#">sales@netmatters.com</a></p>
        <p><strong>Business hours:</strong></p>
        <p><strong>Monday - Friday 07:00 - 18:00&nbsp;</strong></p>
        <p><a href="#">Out Of Hours IT Support</a></p>
    </div>
    <div>
        <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
        <p>
            <strong>Monday - Friday 18:00 - 22:00</strong>
            <strong>Saturday 08:00 - 16:00</strong><br>
            <strong>Sunday 10:00 - 18:00</strong>
        </p>
        <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours&nbsp; voicemail. A technician will contact you on the number provided within 45 minutes of your call.&nbsp;</p>
    </div>
   
   
    


    <?php include "php/menu.php" ?>
    <?php include "php/footer.php" ?>

    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/slick.js"></script> 
    <script src="js/main.js"></script>
    </body>
</html>