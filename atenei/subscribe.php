<?php
    $host = 'localhost';
    $username = 'root';
    $password = 'root';
    $db_name = 'Atenei';

    $conn = new mysqli($host, $username, $password, $db_name);

    if ($conn->conncetion_error) {
        die("Connection Failed: " . $conn->connect_error);
    } 
?>

<?php 
    $name = $_POST['name'];
    $last_name = $_POST['last-name'];
    $sex = $_POST['sex'];
    $ateneo = $_POST['ateneo'];
    $cap = $_POST['cap'];
    $straniero = $_POST['straniero'];
    $lavoratore = $_POST['lavoratore'];

    var_dump($_POST);
?>

<?php 
    $query_insert = "INSERT INTO Studenti (name, last_name, sex, ateneo, cap, straniero, lavoratore, descrizione) VALUES ('$name', '$last_name', '$sex', '$ateneo', '$cap', '$straniero', '$lavoratore', '')";
    if ($conn->query($query_insert) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $query_insert . "<br>" . $conn->error;
      }
?>