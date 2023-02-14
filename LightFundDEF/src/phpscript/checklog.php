<?php 

function is_user_logged_in() {
    // Nome del cookie da verificare
    $cookie_name = "user_login";
  
    // Verificare se il cookie esiste
    if (isset($_COOKIE[$cookie_name])) {
      return true;
    } else {
      return false;
    }
  }


?>