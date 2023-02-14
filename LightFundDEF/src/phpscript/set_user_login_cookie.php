<?php

function set_user_login_cookie($user_id) {
 
  $cookie_name = "user_login";
  $cookie_value = $user_id; 
  $cookie_expiration = time() + (86400 * 7); 
  $cookie_path = "/";


  setcookie($cookie_name, $cookie_value, $cookie_expiration, $cookie_path);
}

?>
