<!-- Witaj użytkowniku:  <?php echo htmlspecialchars($_POST['username']); ?>. <br />
Twój adres to: <?php echo htmlspecialchars($_POST['email']); ?> <br />
Twój komentarz to : <?php echo htmlspecialchars($_POST['desc']); ?>  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require ('db.php');

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    $query = "INSERT INTO `comments` (name, email, comment)
    VALUES ('$username', '$email', '$comment')";
    $stmt= $pdo->prepare($query);
    $stmt->execute([$username, $email, $comment]);

    if($stmt){
        echo "<script>alert('Comment added successfully.')</script>";
    } else{
        echo "<script>alert('Comment does not add.')</script>";
    }
}
?>
</body>
</html>
