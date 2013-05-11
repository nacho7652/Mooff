<?php

require 'facebook.php';

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
  'appId'  => '140716036112606',
  'secret' => '84c0b27458593755ca928a045b7632c3',
));

// Get User ID
$user = $facebook->getUser();

if ($user) {
  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}

// Login or logout url will be needed depending on current user state.
	$params = array(
		'scope' => 'email,id,name,first_name,last_name,link,username,gender,locale,age_range,phone',
		'redirect_uri' => 'http://localhost/mooff/conectar.php'
	);
  $loginUrl = $facebook->getLoginUrl($params);

?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
         
         <div>
        Login using OAuth 2.0 handled by the PHP SDK:
        <a href="<?php echo $loginUrl; ?>">Login with Facebook</a>
      </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
