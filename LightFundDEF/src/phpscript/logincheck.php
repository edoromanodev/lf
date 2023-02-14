<?php

// richiedere il file di configurazione
require_once './config.php';

// ottenere le credenziali dalla richiesta POST e sfuggire alle stringhe
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);





$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($query);

if ($result->num_rows > 0) {

    header('Location: fff.html');
    exit;
} else {

    $conn->close();
    header('Location: error.php');
    exit;
}

?>
