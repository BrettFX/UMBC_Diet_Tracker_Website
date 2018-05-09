<?php
   include('session.php');
?>
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="./css/DT_style.css" />
    <link rel="stylesheet" type="text/css" href="./css/DT_ContactUs.css" />
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


        <div class="ncontainer">
            <form class="contact" action="">
                <p>
                    <label for="fname">First Name</label>
                    <input class="contact" type="text" id="fname" name="firstname" />
                </p>
                <p>
                    <label for="lname">Last Name</label>
                    <input class="contact" type="text" id="lname" name="lastname" />
                </p>
                <p>
                    <label for="uname">Username</label>
                    <input class="contact" type="text" id="uname" name="username" />
                </p>
                <p>
                    <label for="mail">Email</label>
                    <input class="contact" type="text" id="mail" name="mail" />
                </p>
                <p>
                    <label for="num">Phone Number</label>
                    <input class="contact" type="text" id="num" name="phonenumber" />
                </p>
                <p>
                    <label for="country">Country</label>
                    <select class="contact" id="country" name="country">

	<option value="USA">United States</option>
	<option value="AFG">Afghanistan</option>
	<option value="ALB">Albania</option>
	<option value="DZA">Algeria</option>
	<option value="ARG">Argentina</option>
	<option value="AUS">Australia</option>
	<option value="BRA">Brazil</option>
	<option value="KHM">Cambodia</option>
	<option value="CAN">Canada</option>
	<option value="TCD">Chad</option>
	<option value="CHL">Chile</option>
	<option value="CHN">China</option>
	<option value="COL">Colombia</option>
	<option value="COG">Congo</option>
	<option value="CRI">Costa Rica</option>
	<option value="CUB">Cuba</option>
	<option value="DNK">Denmark</option>
	<option value="ECU">Ecuador</option>
	<option value="EGY">Egypt</option>
	<option value="SLV">El Salvador</option>
	<option value="ERI">Eritrea</option>
	<option value="EST">Estonia</option>
	<option value="ETH">Ethiopia</option>
	<option value="FJI">Fiji</option>
	<option value="FIN">Finland</option>
	<option value="FRA">France</option>
	<option value="GAB">Gabon</option>
	<option value="GMB">Gambia</option>
	<option value="GEO">Georgia</option>
	<option value="DEU">Germany</option>
	<option value="HND">Honduras</option>
	<option value="HKG">Hong Kong</option>
	<option value="HUN">Hungary</option>
	<option value="ISL">Iceland</option>
	<option value="IND">India</option>
	<option value="IDN">Indonesia</option>
	<option value="MDG">Madagascar</option>
	<option value="MEX">Mexico</option>
	<option value="MCO">Monaco</option>
	<option value="MNG">Mongolia</option>
	<option value="NPL">Nepal</option>
	<option value="PER">Peru</option>
	<option value="PHL">Philippines</option>
	<option value="PRT">Portugal</option>
	<option value="PRI">Puerto Rico</option>
	<option value="SGP">Singapore</option>
	<option value="ZAF">South Africa</option>
	<option value="SSD">South Sudan</option>
	<option value="ESP">Spain</option>
	<option value="SWZ">Swaziland</option>
	<option value="SWE">Sweden</option>
	<option value="GBR">United Kingdom</option>
	
      </select>
                </p>
                <p>
                    <label for="sub">Subject</label>
                </p>
                <p>
                    <textarea class="subj" id="sub" name="subject" rows="1" cols="1"></textarea></p>
                <p>
                    <input class="button" type="submit" value="Submit" />
                    <input class="redbutton" type="reset" value="Reset" />
                </p>
            </form>

        </div>
        <iframe
    width="350"
    height="430"
    src="https://console.dialogflow.com/api-client/demo/embedded/29eb0162-09a4-4993-bfdc-470fc7128654">
</iframe>


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
