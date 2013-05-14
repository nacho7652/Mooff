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
            'scope' => 'email,user_birthday,user_location,publish_stream,offline_access',
            'redirect_uri' => 'http://localhost/mooff/'
    );
    $loginUrl = $facebook->getLoginUrl($params);
    
if(isset($_GET['logout'])){
        session_destroy();
        $user = null;
        header("location:/mooff/home");
    }

?>
