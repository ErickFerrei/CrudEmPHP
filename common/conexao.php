<?php

try {
    $conn = new PDO('mysql:host=localhost;dbname=crud', 'root', '');
} catch (Exception $e) {

    echo $e->getMessage();
}



$query = $conn->prepare("SELECT * FROM pessoa");
$query->execute();
