<?php
require ('db.php');
    $phone = $_POST['phone'];

    $query = "INSERT INTO `phones` (phone)
    VALUES ('$phone')";
    $stmt= $pdo->prepare($query);
    $stmt->execute(array($phone));
    header('Refresh: 5; url=index3.html');
    echo "Jesteś w kolejce oczekujących na rozmowę, 
    za 5 sekund przekierujemy Cie na stronę powrotną";
?>