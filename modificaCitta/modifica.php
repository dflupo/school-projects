<?php

    // DB CONNECTION
    $servername = "loclhost";
    $username = "root";
    $password = "root";
    $db = "db5f";

    $conn = mysqli_connect($servername, $username, $password, $db) 
    or die ("Error connecting to database");
    echo "Database connected - " . $db;

    // LOGIC
    $utente = $POST["utente"];
    $citta = $POST["citta"];
    $sql = "UPDATE utenti SET citta='$citta' WHERE id"
?>