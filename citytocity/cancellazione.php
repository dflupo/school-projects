<?php
$servername="localhost";
$user="root";
$password="";
$conn= mysqli_connect($servername,$user,$password) or die ("Errore di connessione");
  $db = $_POST["nomedb2"];
  $sql_c="drop database" .$db;
  mysqli_query($conn,$sql_c) or die ("Errore di creazione del Database");
  echo "Creazione database riuscita"
  mysqli_close($conn);
  ?>
