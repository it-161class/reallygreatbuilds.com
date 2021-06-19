<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Really Great Builds </title>
        <meta name="robots" content="noindex,nofollow" />
        <meta name="viewport" content="width=device-width" />
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/styles.css"/>
    </head>
    <body>
        <main id="top" class="wrapper">
        <header>
            <div class="banner">
            <a href="#top"><img src="images/ReallyGreatBuildsfinal1.png" alt="sample"></a>
            </div>
            <nav>
            <a href="gallery.html"><img src='images/Gallery.png' alt='gallery button'></a>
            <a href="contact.php"><img src="images/Contact_RGB.png" alt=""></a>
            </nav>
        </header>
            <div class="centered">
                <?php
                /*
                * Below are 2 different forms to be re-used       
                * 
                * Only use one at a time, comment out the other!       
                *
                */

                include 'includes/contact_include.php'; #site keys & code here
            
                $toAddress = "emilydewing01@gmail.com";  //place your/your client's email address here
                $toName = "Emily Ewing"; //place your client's name here
                $website = "reallygreatbuilds";  //place NAME of your client's website

                echo loadContact('simple.php');#demonstrates a simple contact form
                //echo loadContact('multiple.php');#demonstrates multiple form elements
                ?>
            </div>
        </main>
        <footer>
            <p><small>&copy; 2021 by <a href="contact.php">Joshua Zimmerschied</a>, All Rights Reserved ~ <a href="https://validator.w3.org/nu/?doc=https://web-students.net/site48/it161/index.html" target="_blank">Valid HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
        </footer>
    </body>