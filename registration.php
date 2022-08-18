<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Rejestracja</title>
</head>
<body>
<?php
session_start();
require_once('db.php');

if(isset($_POST['submit']))
{
    if(isset($_POST['first_name'],$_POST['last_name'],$_POST['email'],$_POST['password']) && !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        $firstName = trim($_POST['first_name']);
        $lastName = trim($_POST['last_name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        
        $options = array("cost"=>4);
        $hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
        $date = date('Y-m-d H:i:s');

        if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
            $sql = 'select * from members where email = :email';
            $stmt = $pdo->prepare($sql);
            $p = ['email'=>$email];
            $stmt->execute($p);
            
            if($stmt->rowCount() == 0)
            {
                $sql = "insert into members (first_name, last_name, email, `password`) values(:fname,:lname,:email,:pass)";
            
                try{
                    $handle = $pdo->prepare($sql);
                    $params = [
                        ':fname'=>$firstName,
                        ':lname'=>$lastName,
                        ':email'=>$email,
                        ':pass'=>$hashPassword,
                    ];
                    
                    $handle->execute($params);
                    
                    $success = 'User has been created successfully';
                    
                }
                catch(PDOException $e){
                    $errors[] = $e->getMessage();
                }
            }
            else
            {
                $valFirstName = $firstName;
                $valLastName = $lastName;
                $valEmail = '';
                $valPassword = $password;

                $errors[] = 'Email address already registered';
            }
        }
        else
        {
            $errors[] = "Email address is not valid";
        }
    }
    else
    {
        if(!isset($_POST['first_name']) || empty($_POST['first_name']))
        {
            $errors[] = 'First name is required';
        }
        else
        {
            $valFirstName = $_POST['first_name'];
        }
        if(!isset($_POST['last_name']) || empty($_POST['last_name']))
        {
            $errors[] = 'Last name is required';
        }
        else
        {
            $valLastName = $_POST['last_name'];
        }

        if(!isset($_POST['email']) || empty($_POST['email']))
        {
            $errors[] = 'Email is required';
        }
        else
        {
            $valEmail = $_POST['email'];
        }

        if(!isset($_POST['password']) || empty($_POST['password']))
        {
            $errors[] = 'Password is required';
        }
        else
        {
            $valPassword = $_POST['password'];
        }
        
    }

}
?>
<div class="full-page">
        <div class="main">
            <div class="menu">
                <div class="upper-menu">
                    <div class="logo">
                        <img src="logos/logo.png" alt="Logo ElHurtPlus" />
                    </div>
                    <div class="three-information">
                        <div class="upper-headers">
                            <a href="#">
                                <img src="icons/icon_01.png" alt="Pionek - Kontakt" />
                                <p>KONTAKT</p>
                            </a>
                        </div>
                        <div class="upper-headers">
                            <a href="#">
                                <img src="icons/icon_02.png" alt="Gwiazda - Ulubione" />
                                <p>ULUBIONE</p>
                            </a>
                        </div>
                        <div class="upper-headers">
                                <div class="dropdown">
                                    <a href="login.php">
                                        <img src="icons/icon_03.png" alt="Telefon - Moje Konto" />
                                        <p>MOJE KONTO</p>
                                        <div class="dropdown-content">
                                            <div class="log-reg-user">
                                                <div class="login-user">
                                                    <a href="login.php" class="login login-user">
                                                        <p>Zaloguj się</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        <div class="cart-family">
                            <div class="cart">
                                <div class="cart-brother">
                                    <div class="text-on-cart">
                                        <p class="number-orders">342</p>
                                    </div>
                                    <img src="icons/icon_06.png" alt="Koszyk" />
                                </div>

                                <div class="text-cart">
                                    <p class="first-text-cart">TWÓJ KOSZYK</p>
                                    <p class="second-text-cart">3456,00zł</p>
                                </div>
                            </div>
                            <div class="arrow-cart">
                                <a href="#" class="activity">
                                    <img src="icons/prawa-strzalka.png" alt="Strzałka" />
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="headers"><a href="index2.html">
                    <p>ŹRÓDŁA ŚWIATŁA</p>
                </a></div>
            <div class="headers"><a href="#">
                    <p>OŚWIETLENIE WEWNĘTRZNE</p>
                </a>
            </div>
            <div class="headers"><a href="#">
                    <p>GNIAZDKA, WYŁACZNIKI</p>
                </a>
            </div>
            <div class="headers"><a href="#">
                    <p>AUTOMATYKA, STEROWANIE</p>
                </a>
            </div>
            <div class="headers"><a href="#">
                    <p>ROZDZIELANIE I APARATURA</p>
                </a>
            </div>
            <div class="headers"><a href="#">
                    <p>MATERIALY INSTALACYJNE</p>
                </a>
            </div>
        </div>
<div class="container">
    <div class="registration">
	    <div class="row">
			<h1>Rejestracja</h1>
        </div>
			<?php 
				if(isset($errors) && count($errors) > 0)
				{
					foreach($errors as $error_msg)
					{
						echo '<div class="alert alert-danger">'.$error_msg.'</div>';
					}
                }
                
                if(isset($success))
                {
                    
                    echo '<div class="alert alert-success">'.$success.'</div>';
                }
			?>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" autocomplete="off" class="formsy">
                <div class="form-group">
					<input type="text" name="first_name" placeholder="Wpisz swoje imie*" class="form-control" value="<?php echo ($valFirstName??'')?>" required>
				</div>
                <div class="form-group">
					<input type="text" name="last_name" placeholder="Wpisz swoje nazwisko*" class="form-control" value="<?php echo ($valLastName??'')?>" required>
				</div>

                <div class="form-group">
					<input type="text" name="email" placeholder="Wpisz adres email*" class="form-control" value="<?php echo ($valEmail??'')?>" required>
				</div>
				<div class="form-group">
					<input type="password" name="password" placeholder="Wpisz hasło*" class="form-control" value="<?php echo ($valPassword??'')?>" required>
				</div>

                <div class="regulations">
                <label class="checkbox-button">
                        <input type="checkbox" class="checkbox-button__input" class="choice1-1"
                                name="choice1" required>
                        <span class="checkbox-button__control"></span>
                        <span class="checkbox-button__label">Zapoznałem się z regulaminem oraz moim prawem do odstąpienia od umowy i rękojmi*</span>
                </label>
                <label class="checkbox-button">
                        <input type="checkbox" class="checkbox-button__input" class="choice1-1"
                                name="choice1" required>
                        <span class="checkbox-button__control"></span>
                        <span class="checkbox-button__label">Wyrażam zgodę na otrzymywanie informacji na temat nowości oraz zmian w ofercie sklepu</span>
                </label>
                </div>

                <div class="submit-login">
				<button type="submit" name="submit" class="btn btn-primary">ZAŁÓŻ KONTO</button>
				<p>*Pola wymagane</p>
				</div>
			</form>
            </div>
</div>
        <div class="under-footer">

            <div class="footer-information">
                <h3>INFORMACJE</h3>
                <ul>
                    <li>Informacje o sklepie</li>
                    <li>Porady</li>
                    <li>Blog</li>
                    <li>Galeria inspiracji</li>
                    <li>Kontakt</li>
                    <li>Informacje o sklepie</li>
                </ul>
            </div>

            <div class="footer-information">
                <h3>INFORMACJE</h3>
                <ul>
                    <li>Czas realizacji</li>
                    <li>Koszty przesyłki</li>
                    <li>Zamów próbkę</li>
                    <li>Szycie na wymiar</li>
                    <li>Czas realizacji</li>
                    <li>Koszty przesyłki</li>
                </ul>
            </div>

            <div class="footer-information">
                <h3>MOJE KONTO</h3>
                <ul>
                    <li>Logowanie</li>
                    <li>Rejestracja</li>
                    <li>Zamowienia</li>
                    <li>Ustawienia konta</li>
                    <li>Zmiana hasla</li>
                    <li>Schowek</li>
                </ul>
            </div>

            <div class="footer-information">
                <h3>INFORMACJE</h3>
                <ul>
                    <li>Informacje o sklepie</li>
                    <li>Porady</li>
                    <li>Blog</li>
                    <li>Galeria inspiracji</li>
                    <li>Kontakt</li>
                    <li>Informacje o sklepie</li>
                </ul>
            </div>
            </div>

        <div class="footer">
            <div class="left-part">Coppyright 2022. Wszystkie prawa zastrzeżone</div>
            <div class="right-part">Agencja Interaktywna [ti] Powered By 2ClickShop</div>
        </div>
    </div>
    <!-- // $data = $pdo->query("SELECT * FROM users")->fetchAll();
    // // and somewhere later:
    // foreach ($data as $row) {
    //     echo $row['username']."<br />\n";
    //     echo $row['password']."<br />\n";
    // }

    // $data = [
    //     ['John','Doe', 22],
    //     ['Jane','Roe', 19],
    // ];

    // $stmt = $pdo->prepare("INSERT INTO loginusers (username, email, password) VALUES (?,?,?)");
    // try {
    //     $pdo->beginTransaction();
    //     foreach ($data as $row)
    //     {
    //         $stmt->execute($row);
    //     }
    //     $pdo->commit();
    // }catch (Exception $e){
    //     $pdo->rollback();
    //     throw $e;
    // }

//     $sql= "DELETE FROM loginusers";
//     $stmt= $pdo->prepare($sql);
//     if($stmt->execute()) {
//     echo "Post deleted successfully!";
//   } -->
</body>
</html>