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
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
                
            </header>
            <h1>Our Offices</h1>
            <div class="office-adresses">
                <div class="office-address-1">
                    <div class="office-img"></div>
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
                    <div class="office-img"></div>
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
                    <div class="office-img"></div>
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
            <?php include "php/sticky-header.php" ?>
            

        Form Seems to have disappeared from page...
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
        <button class="sub-btn"><a href='#'>Subscribe</a></button>
    </form> 
   
   
    


    <?php include "php/menu.php" ?>
    <?php include "php/footer.php" ?>

    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/slick.js"></script> 
    <script src="js/main.js"></script>
    </body>
</html>