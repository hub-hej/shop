<?php
require ('db.php');
    $email = $_POST['email'];

    $query = "INSERT INTO `emails` (email)
    VALUES ('$email')";
    $stmt= $pdo->prepare($query);
    $stmt->execute(array($email));
    header('Refresh: 5; url=index3.html');
    echo "Dziękujemy za złożenie zamówienia. Odezwiemy się jak najszybciej. Powrócisz na stronę wyjściową po 5 sekundach";
?>