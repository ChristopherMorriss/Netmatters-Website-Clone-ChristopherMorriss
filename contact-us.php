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
            
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
            
        </header>
    
            

    <!--     Form Seems to have disappeared from page...
    <form id="form">
        <h1>Email Newsletter Sign-Up</h1>
        <h2>Your Name:</h2>
        <input type="text" id="name" name="user-name">
        <h2>Your Email:</h2>
        <input type="text" id="email" name="user-email"><br>
        <input type="checkbox"id="check" name="user-checkbox">
        <p>Please tick this box if you wish to receive marketing information from us. Please see our <a href="#">Privacy Policy</a>
        for more information on how we keep your data safe. </p>
        <button class="sub-btn"><a href='#'>Subscribe</a></button>
    </form> 
    -->
   
    




    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/slick.js"></script> 
    <script src="js/main.js"></script>
    </body>
</html>