<?php $currentPage="Home"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=8;IE=9;IE=10;IE=11;IE=Edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>West Coast | <?php if ($currentPage) echo $currentPage; ?></title>
    <link rel="icon" href="../images/fav.png">
    <link rel="stylesheet" href="../css/screen.css">
</head>
<body id="body" class="home" lang="en">
<div id="page">
    <div id="content">
        <div class="wrapper">
            <section class="top-section">
                <img src="../images/logo.png">
                <h2>We would love to help!</h2>
            </section>
            <section class="contact-section">
                <div class="top-contact">
                    <h1>Contact Us</h1>
                    <p>You can get in touch with us by telephone, fax, email<br> or directly from this webpage</p>
                </div>
                <div class="bottom-contact">
                    <div class="wrap">
                        <div class="left">
                            <h2>Address</h2>
                            <ul>
                                <li>West Coast Caterers</li>
                                <li>2 Afton Tor Cottages</li>
                                <li>Berry Pomeroy</li>
                                <li>Totnes</li>
                                <li>TQ9 6NH</li>
                            </ul>
                            <h2>Contact</h2>
                            <ul class="contact-part">
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+01803814000" target="_blank">01803 814 000</a></li>
                                <li><i class="fa fa-mobile" aria-hidden="true"></i><a href="tel:+0000000000" target="_blank">0123 234 000</a></li>
                                <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:andjelasumanski203@gmail.com" target="_blank">andjelasumanski203@gmail.com</a></li>
                            </ul>
                        </div>
                        <div class="right">
                            <form id="form" action="src/form/form.php">
                                <div class="wrap">
                                    <div class="sub-left">
                                        <div class="input-group">
                                            <label for="first_name">Your Name</label>
                                            <input type="text" name="name" id="first_name" required />
                                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="input-group">
                                            <label for="email">Your E-Mail Address</label><br>
                                            <input type="email" name="email" id="email" required />
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </div>
                                        <div class="input-group">
                                            <label for="subject">Subject</label><br>
                                            <input type="text" name="subject" id="subject"/>
                                            <i class="fa fa-flag-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="sub-right">
                                        <div class="icon-message">
                                            <label for="textarea">Your Message</label>
                                            <textarea name="message" id="textarea" cols="18" rows="9" required></textarea>
                                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="icon-btn">
                                            <input type="submit" id="button" value="SEND"/>
                                            <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div id="contact-response"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<script src="../js/jquery-3.1.1.min.js"></script>
<script src="../js/script.js"></script>
<script src="../js/c.js"></script>
</body>
</html>
