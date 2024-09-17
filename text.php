<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Submission Test</title>
</head>

<body>
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
    <?php //This works with the input submit button
        if (isset($_POST['user-name'], $_POST['user-email'])){
            $name = $_POST['user-name'];
            $email = $_POST['user-email'];
            echo $name . '<br>'; 
            echo $email; 
            }
    ?>
</body>