<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "db5f";
    $conn = mysqli_connect($servername, $username, $password, $db) or die ("Errore di connessione");

    $id = $_POST['id'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM Utenti WHERE id_utente = '$id' "
    $ris = mysqli_query($conn, $sql) or die ("Query Error");
    $nrighe = mysqli_num_rows();

    if($nrighe == 1) {
        $riga = mysqli_fetch_array($ris);
        $nome = $riga['nome'];
        $cognome = $riga['cognome'];
        $id = $riga['id_utente'];
        if($pass == $riga['password'] ){
            echo "Benvenuto $nome!";
            session_start();
            $SESSION['ID'] = $id;
            $SESSION['NOME'] = $nome;
            $SESSION['COGNOME'] = $cognome;
        } else {
            echo "Password Errata";
            header(" refresh: 3; url='login.html' ");
        }
    } else {
        echo "Utente non esistente";
        header(" refresh: 3; url='login.html' ");
    }

    mysqli_close($conn);
?>