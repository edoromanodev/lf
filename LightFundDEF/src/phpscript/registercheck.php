<?php

require_once "./config.php";

// Prendi i dati dell'utente da POST
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$country = mysqli_real_escape_string($conn, $_POST['country']);
$password = mysqli_real_escape_string($conn, $_POST['password']);


// Crea la query di inserimento
$sql = "INSERT INTO users (fname, lname, email, password, country)
VALUES ('$fname', '$lname', '$email', '$password', '$country')";

// Esegui la query di inserimento
if (mysqli_query($conn, $sql)) {
    $user_id = mysqli_insert_id($conn);
    
    require_once "./set_user_login_cookie.php";
    set_user_login_cookie($user_id);
    
    header('Location: ../app/dashboard.php');
    exit;
} else {
    mysqli_close($conn);
    header('Location: ./404.html');
    exit;
}

?>
