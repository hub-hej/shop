<?php
require ('db.php');
    $phone = $_POST['phone'];

    $query = "INSERT INTO `phones` (phone)
    VALUES ('$phone')";
    $stmt= $pdo->prepare($query);
    $stmt->execute(array($phone));
    header('location:index3.html');
?>