<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>login facebook</title>
        <html xmlns:fb="http://ogp.me/ns/fb#">
    </head>
    <body>
        <div id="fb-root"></div>
        <script src="http://connect.facebook.net/es_LA/all.js"></script>
        <script type="text/javascript">
            FB.init({appId: '#', status: true, cookie: true, xfbml: true});
        </script>
        <fb:login-button show-faces="true" width="200" max-rows="1" perms="email"></fb:login-button>
        <fb:login-button autologoutlink="true" perms="email"></fb:login-button>
        <script type="text/javascript">
            FB.getLoginStatus(function(response) { get_fb_user_data(response); });

            FB.Event.subscribe('auth.login', function(response) { get_fb_user_data(response); });
        </script>
        <script type="text/javascript"> 
        function get_fb_user_data(response){ 
            if (response.session) { 
                // logged in and connected user, someone you know 
                var uid = response.session.uid; 

                FB.api(uid, function(response) { 
                    set_fb(document.forms.WBForm.Name, response.first_name); 
                    set_fb(document.forms.WBForm.Surname, response.last_name); 
                    set_fb(document.forms.WBForm.Email, response.email); 
                }); 
            } 
            else 
            { 
                // no user session available, someone you dont know 
            } 
        } 


        function set_fb(elem, fb_elem){ 
            if (elem){ 
                    if (elem.value == '' || (elem.value == '01/01/0001')){ 
                        elem.value = get_fb(fb_elem); 
                    } 
            } 
        } 

        function get_fb(elem){ 
            if (elem){ 
                if (typeof(elem) != 'undefined'){ 
                    if (elem != 'undefined') { 
                    return elem; 
                    } 
                } 
            } 

            return ''; 
        } 
        </script>
        
    </body>
</html>
