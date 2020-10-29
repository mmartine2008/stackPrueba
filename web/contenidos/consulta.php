<?php
    $servername = 'mysqldb';
    $dbname = "prueba";
    $username = "root";
    $password = "root";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
    $stmt->execute();

    print_r($stmt->fetchAll());
?>