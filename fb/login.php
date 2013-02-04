<?php $thisPage="login"; ?>
<?php
session_start();
/*
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 1) {
	header("Location: admin.php");
}

/*
 * Set up constant to ensure include files cannot be called on their own
*/
define ( "MY_APP", 1 );
/*
 * Set up a constant to your main application path
 */
define ( "APPLICATION_PATH", "application" );
define ( "TEMPLATE_PATH", APPLICATION_PATH . "/view" );
/*
 * Include the config.inc.php file
 */
include (APPLICATION_PATH . "/inc/config.inc.php");
include (APPLICATION_PATH . "/inc/db.inc.php");
include (APPLICATION_PATH . "/inc/functions.inc.php");

include (TEMPLATE_PATH . "/public/header.html");
?>

<?php

// Enter the app id and secret below
define('YOUR_APP_ID', '383982501693360');
define('YOUR_APP_SECRET', 'f9112d2627a992f8733018f08396d436');

require 'php-sdk/facebook.php';

$facebook = new Facebook(array(
  'appId'  => YOUR_APP_ID,
  'secret' => YOUR_APP_SECRET,
));

// Clear the login session and cookie if the user clicked the logout link
if (1 == $_GET['logout']) {
  $facebook->destroySession();
  setcookie('fbsr_' . YOUR_APP_ID, $_COOKIE['fbsr_' . YOUR_APP_ID], time() - 3600, '/', '.'.$_SERVER['SERVER_NAME']);
} else {
  $userId = $facebook->getUser();
}

?>
<html>
  <head>
    <script type="text/javascript">
      function facebookLogout() {
        FB.init({ 
          appId : <?php print YOUR_APP_ID; ?>,
          cookie: true,
          status: true, 
          xfbml : true,
          oauth : true,
        });
        FB.getLoginStatus(function(response) {
          if (response.authResponse) {
            FB.logout(function() {
              window.location = document.URL + "?logout=1";
			<?php $_SESSION["loggedIn"]=2; ?>
			  window.location = "http://www.redfinchmedia.com/logout.php";

            });
            return false;
          } else {
            window.location = document.URL + "?logout=1";
			<?php $_SESSION["loggedIn"]=2; ?>
			window.location = "http://www.redfinchmedia.com/logout.php";

            return false;
          }
        });
      }
    </script>
  </head>
  <body>
  
  <div class="container">
<div class="loginWrapper">
<h1>Login with Facebook</h1>
    <div id="fb-root"></div>
    
    <?php if ($userId) { 
	$_SESSION["loggedIn"]=1;
      $userInfo = $facebook->api('/' + $userId); ?>
	<div class="row">
      	<div class="span6">
    		<div class="loginText">
     			 Welcome <?= $userInfo['name'] ?> you are now logged in. Please proceed using the buttons below!<br/>
      		</div>
      </div>
   </div>
   
   <div class="row">
   
   <div class="loginBtn">
      <div class="span3">
      	<form action="admin.php">
      		<button class="btn btn-primary">Continue</button>
		</form>
      </div>
      <div class="span3">
      	<form action="javascript:facebookLogout();">
      		<button class="btn btn-danger">Logout</button>
    	</form>
		</div>
        </div>
   </div>
    <?php } else { ?>
    <fb:login-button>Login in with Facebook</fb:login-button>
    <?php } ?>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId : <?php print YOUR_APP_ID?>,
          status: true, 
          cookie: true,
          xfbml : true,
          oauth : true,
        });

        FB.Event.subscribe('auth.login', function(response) {
			window.location.reload();

          
		  //window.location = "http://www.redfinchmedia.com/admin.php";

        });
      };

      (function(d){
        var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
        js = d.createElement('script'); js.id = id; js.async = true;
        js.src = "//connect.facebook.net/en_US/all.js";
        d.getElementsByTagName('head')[0].appendChild(js);
      }(document));
    </script>
    </div>
    </div>
    
    
<?php include (TEMPLATE_PATH . "/public/footer.html"); ?>