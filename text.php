<!DOCTYPE html>
<?php require "php/function.php" ?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Submission Test</title>
</head>

<body>
<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){ 
        //Filters the contents of the input fields with the name 'user-name', 'message' etc to prevent SQL injection 
        $name = trim(filter_input(INPUT_POST,'user-name',FILTER_SANITIZE_STRING));  
        $company = trim(filter_input(INPUT_POST,'user-company',FILTER_SANITIZE_STRING));
        $telephone = trim(filter_input(INPUT_POST,'user-telephone',FILTER_SANITIZE_STRING));
        $email = trim(filter_input(INPUT_POST,'user-email',FILTER_SANITIZE_STRING));
        $message =trim(filter_input(INPUT_POST,'message',FILTER_SANITIZE_STRING));
        if (empty($name) || empty($telephone) || empty($email) || empty($message)){
            //If one of these input fields is empty, the error message is assigned 
            //and is ready to be output in the relevant part of the HTML
            $error_message = 'Please fill in the required fields: name, telephone, email and message';
        }
        else{ 
            echo " name = $name<br>";
            echo " telephone = $telephone<br>";
            echo " email = $email<br>";
            echo " message = $message<br>";
            add_enquiry($name,$company,$telephone,$email,$message);
        }
    }
    ?>
    <?php if (isset($error_message)){
        echo "<p class='message'>$error_message</p>";
    }
    ?>
    <form id="form" method="post" action="text.php">
        <div>
            <div class="flex-form">
                <div class="form-section">
                    <label for="name">Your Name<span class="red-asterix"> *</span></label>
                    <input type="text" id="name" name="user-name">
                </div>
                <div class="form-section">
                    <label for="company">Company Name</label>
                    <input type="text" id="company" name="user-company">
                </div>
                <div class="form-section">
                    <label for="email">Your Email<span class="red-asterix"> *</span></label>
                    <input type="text" id="email" name="user-email">
                </div>
                <div class="form-section">
                    <label for="telephone">Your Telephone Number<span class="red-asterix"> *</span></label>
                    <input type="text" id="telephone" name="user-telephone"><br>
                </div>
                <button class="btn" id="send-enquiry">Send Enquiry</button>
            </div>
            <div class="form-section">
                <label for="message">Message<span class="red-asterix"> *</span></label>
                <textarea id="message" name="message">Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?
                </textarea>
            </div>
            <div class="form-section">
                <label class="flexbox-checkbox">
                    <!-- <input type="checkbox"id="checkbox" name="user-checkbox"> -->
                    <span class="checkbox button"></span>
                    <span class="checkbox-msg">Please tick this box if you wish to receive marketing information from us. Please see our <a href="#" class="perma-underline">Privacy Policy</a>
                    for more information on how we keep your data safe.</span>
                </label>
            </div>
            <div class="form-section">
                <span class="reCAPTCHA">This site is protected by reCAPTCHA and the Google <a href="#" class="perma-underline">Privacy Policy</a> and <a href="#" class="perma-underline">Terms of Service</a> apply.</span>
            </div>
            <div class="enquiry-field">
                <a class="btn" id="send-enquiry">Send Enquiry</a>
                <small><span class="red-asterix"> *</span>Fields Required</small>
            </div>
        </div>
    </form> 
    <?php include "php/connection.php" ?>
</body>
<div class="article article-1">
                    <a href="#" class="article-link"></a>
                    <?php $careers="<a href='#' class='btn green-btn img-btn'>Case Studies</a>"; echo $careers;?>
                    <?php $image="<a href='#' class='img-news'><img src='img/ams-news.webp' alt='Abel's Moving Service'></a>"; echo $image;?>
                    <div class="innards">
                    <?php $title="<h3 class='green-text news-title'>Moving Forward: Proactive Digital Marketing with Abel's Moving Service</h3>"; echo $title ?>
                    <?php $description="<div class='article-info'>
                            <p>Who are abels moving Service? Abel's Moving Services is a high-end removal company with a rich hist...</p>
                            <a href='#' class='btn green-btn read-btn'>Read More</a>
                        </div>"; echo $description ?>
                        <div class="article-footer">
                            <?php $authorImage="<div class='img-footer'><img src='img/nm.png' alt='netmatters-logo'></div>"; echo $authorImage;?>
                            <div class ="text-footer">
                                <?php $author ="<strong class='light-black'>Posted By Netmatters</strong>"; echo $author ?>
                                <?php $date="<br>22nd May 2024"; echo $date; ?>
                            </div>
                        </div>
                    </div>
                </div>
<div class="article article-2">
    <a href="#" class="article-link"></a>
    <?php $careers="<a href='#' class='btn dred-btn img-btn'>Careers</a>"; echo $careers;?>
    <?php $image="<a href='#' class='img-news'><img src='img/jtt-news.webp' alt='Junior Telecoms Technician'></a>"; echo $image;?>
    <div class="article-contents">
        <div class="innards">
            <?php $title="<h3 class='red-text news-title'>Junior Telecoms Technician</h3>"; echo $title ?>
            <?php $description="<div class='article-info'>
                <p>Salary Range £25000 - £28000 per annum Hours 40 hours per week, Monday - Friday Location Wymondham...</p>
                <a href='#' class='btn dred-btn read-btn'>Read More</a>
            </div>"; echo $description ?>
            <div class="article-footer">
            <?php $authorImage="<div class='img-footer'><img src='img/bs.png' alt='netmatters-logo'></div>"; echo $authorImage;?>
                <div class ="text-footer">
                    <?php $author ="<strong class='light-black'>Posted By Bethany Shakespeare</strong>"; echo $author ?>
                    <?php $date="<br>16th May 2024"; echo $date; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="article article-3">
    <a href="#" class="article-link"></a>
    <?php $careers="<a href='#' class='btn blue-btn img-btn' type='category-tag'>Careers</a>"; echo $careers;?>
    <?php $image="<a href='#' class='img-news'><img src='img/slt-news.webp' alt='2nd Line Technician'></a>"; echo $image;?>
    <div class="innards">
    <?php $title="<div class='article-title news-title'><h3 class='blue-text'>2nd Line Technician</h3><span class='read-time'>- 4 Minute Read</span></div>"; echo $title ?>
        <?php $description="<div class='article-info'>
                <p>Salary Range £28k-£36k + Bonuses + Pension Hours 40 hours per week, Monday - Friday Location Wymondh...</p>
                <a href='#' class='btn blue-btn read-btn'>Read More</a>
            </div>"; echo $description ?>
        <div class="article-footer">
            <?php $authorImage="<div class='img-footer'><img src='img/rm.png' alt='rm-photo'></div>"; echo $authorImage;?>
            <div class ="text-footer">
            <?php $author ="<strong class='light-black'>Posted By Rebecca Moore</strong>"; echo $author ?>
                <?php $date="<br>9th May 2024"; echo $date; ?>
            </div>
        </div>
    </div>
</div>