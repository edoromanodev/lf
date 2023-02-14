<?php
// Connessione al database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lightfund";

// Crea la connessione
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica la connessione
if (!$conn) {
    die("Connessione al database fallita: " . mysqli_connect_error());
}


?>