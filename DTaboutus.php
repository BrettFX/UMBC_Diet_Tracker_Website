<?php
   include('session.php');
?>
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>About Us</title>
    <link rel="stylesheet" type="text/css" href="./css/DT_style.css" />
    <link rel="stylesheet" type="text/css" href="css/DT_ContactUs.css" />
    <script type="text/javascript" src="./js/DTsearch.js"></script>
</head>

<body>
    <div class="container">
        <div class="header">
            <p><img src="res/diettrackerbanner.png" width="100%" height="225" alt="banner" /></p>
        </div>
        <div id="nav">
            <ul>
                <li><a href="DTprofile.php" title="Signed In">Hi, <?php echo $login_fname; ?></a></li>
                <li><a href="index.php" title="homepage">Home</a></li>
                <li><a href="DTcontactus.php" title="contact us page">Contact Us</a></li>
                <li><a href="DTaboutus.php" title="About us page">About Us</a></li>
                <li><a href ="logout.php">Sign Out</a></li>
                <li class="float-right"><div class="autocomplete">
                  <input id="DTsearch" class="search" type="text" name="search" />  
                </div></li>
            </ul>
        </div>
        <h2>About Us</h2>

        <div class="about">
        <h1>Welcome to the <span class="umbc"> UMBC </span> <span class="diet"> Diet </span> <span class="tracker"> Tracker </span>!</h1>

        <p>
            <br/> We recognize that many students are too busy with their school work, socializing, and other priorities to ensure they are maintaining a healthy diet. Which is why we have created a resource for anyone in UMBC to eat healthier and better.
            <br/>
            <br/> Through our website, we will help you achieve your weight goals.
            <br/>
            <br/> Here are just several benefits of creating a healither diet:
        </p>
        <ul>
            <li>Provide energy to stay active for those long nights studying</li>
            <li>Reduce risk of diet-related illnesses</li>
            <li>Improve your mood</li>
            <li>Feel in control of your own weight</li>
            <li>And much more just through intake of proper nutrients</li>
        </ul>
        <p>

            You can use the diet tracker to keep track of your meals throughout campus and calculate calories and nutrition.
            <br/>
            <br/> Upon creating your profile, we will simply ask for your age, gender, weight, and height and provide information on the amount of calories you need to gain, maintain, or lose weight, it’s that simple!
            <br/>
            <br/> There's no need to walk to every food vendor in UMBC just to see if they have the right food for you, we have a map of all locations and nutritional facts ready for you to use.
            <br/>
            <br/> Every week you can weigh yourself and evaluate your progress over time and adjust your dietary intake as needed.
            <br/>
            <br/> The UMBC Diet Tracker team has their goal set to impact lives through maintainance of a healthy diet. Now, what's your weight goal?
        </p>

      </div>
    </div>

    <div class="footer">Copyright &copy;&nbsp;AlphaTech.com
        <div class="toolbar2">
            <p>
                <a href="index.html" title="homepage">Home</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                <a href="DTtermsofuse.html" title="terms of use">Terms of Use</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                <a href ="DTaboutus.html" title ="About us">About Us</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="DTcontactus.html" title="contact us page">Contact Us</a>
            </p>
            
            <a href="http://www.facebook.com/sharer.php?u=https://simplesharebuttons.com">
                <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
            </a>
            <a href="https://twitter.com/share?url=https://simplesharebuttons.com&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons">
                <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
            </a>
            <a href="https://plus.google.com/share?url=https://simplesharebuttons.com">
                <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
            </a>
            
        </div>
    </div>

</body>
</html>