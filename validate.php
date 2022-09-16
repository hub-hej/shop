<?php
 
include_once('db.php');
  
function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);
    $stmt = $pdo->prepare("SELECT * FROM adminlogin");
    $stmt->execute();
    $users = $stmt->fetchAll();
     
    foreach($users as $user) {
         
        if(($user['email'] == $email) &&
            ($user['password'] == $password)) {
                header("location: admin_panel.php");
        }
        else {
            echo "Złe hasło lub email";
            header("location: admin_login.html");
            die();
        }
    }
}
 
?>