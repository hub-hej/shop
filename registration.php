<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <title>Rejestracja</title>
</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>
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
        <button type="button" class="button-menu" aria-label="Przycisk na menu">
                    <div class="hamburger">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                </button>
                <div class="nav-items">
                    <div class="headers">
                        <a class="ex1" href="index2.html" target="_blank"><img src="photos/category-1.png" alt="">ŹRÓDŁA
                            ŚWIATŁA</a>
                    </div>

                    <div class="headers">
                        <a href="#" target="_blank"><img src="photos/category-5.png" alt="">OŚWIETLENIE WEWNĘTRZNE</a>
                    </div>

                    <div class="headers">
                        <a href="#" target="_blank"><img src="photos/category-6.png" alt="">GNIAZDKA, WYŁACZNIKI</a>
                    </div>

                    <div class="headers">
                        <a href="#" target="_blank"><img src="photos/category-7.png" alt="">AUTOMATYKA, STEROWANIE</a>
                    </div>

                    <div class="headers">
                        <a href="#" target="_blank"><img src="photos/category-8.png" alt="">ROZDZIELANIE I APARATURA</a>
                    </div>

                    <div class="headers">
                        <a href="#" target="_blank"><img src="photos/category-10.png" alt="">MATERIALY INSTALACYJNE</a>
                    </div>
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
                        <div class="hide-info">
                            <h3>O NAS</h3>
                            <a class="hide" onClick="op('#poka1');"><span
                                    class="arrow-down material-symbols-outlined">keyboard_arrow_down</span></a>
                        </div>
                        <ul id="poka1">
                            <li><a href="#">Informacje o sklepie</a></li>
                            <li><a href="#">Porady</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Galeria inspiracji</a></li>
                            <li><a href="#">Kontakt</a></li>
                            <li><a href="#">Informacje o sklepie</a></li>
                        </ul>
                    </div>

                    <div class="footer-information">
                        <div class="hide-info">
                            <h3>INFORMACJE</h3>
                            <a class="hide" onClick="op('#poka2');"><span
                                    class="arrow-down material-symbols-outlined">keyboard_arrow_down</span></a>
                        </div>
                        <ul id="poka2">
                            <li><a href="#">Czas realizacji</a></li>
                            <li><a href="#">Koszty przesyłki</a></li>
                            <li><a href="#">Zamów próbkę</a></li>
                            <li><a href="#">Szycie na wymiar</a></li>
                            <li><a href="#">Czas realizacji</a></li>
                            <li><a href="#">Koszty przesyłki</a></li>
                        </ul>
                    </div>

                    <div class="footer-information">
                        <div class="hide-info">
                            <h3>MOJE KONTO</h3>
                            <a class="hide" onClick="op('#poka3');"><span
                                    class="arrow-down material-symbols-outlined">keyboard_arrow_down</span></a>
                        </div>
                        <ul id="poka3">
                            <li><a href="#">Logowanie</a></li>
                            <li><a href="#">Rejestracja</a></li>
                            <li><a href="#">Zamowienia</a></li>
                            <li><a href="#">Ustawienia konta</a></li>
                            <li><a href="#">Zmiana hasla</a></li>
                            <li><a href="#">Schowek</a></li>
                        </ul>
                    </div>

                    <div class="footer-information">
                        <h3>MASZ PYTANIE?</h3>
                        <div class="general_module">
                            <div class="module_body">
                                <a href="tel:+48123731050">
                                    <i class="fa-solid fa-phone-volume"></i> +48 18 737 21 67
                                </a>
                            </div>

                            <p class="module_information">
                                Pon.-pt. 7.00-19.00, Sob. 8.00 - 14.00
                            </p>

                            <p class="module_information">
                                <a href="mailto:info@elhurtplus.pl">info@elhurtplus.pl</a>
                            </p>

                            <p class="module_information">
                                ul. Osieczany 585
                                <br>
                                32-400 Myslenice
                            </p>

                            <a href="#" class="formularz">FORMULARZ KONTAKTOWY</a>
                        </div>
                    </div>
            </div>

            <div class="footerDetails">
                <div class="row-up">
                    <div class="galleryTextListFooterPayment">
                        BEZPIECZNE PŁATNOŚCI
                    </div>
                    <div class="galleryFooter">
                        <div class="galleryListFooterPayment">
                            <img src="./photos/fotos-54.png" alt="" />
                        </div>
                        <div class="galleryListFooterPayment">
                            <img src="./photos/fotos-53.png" alt="" />
                        </div>
                        <div class="galleryListFooterPayment">
                            <img src="./photos/fotos-14.png" alt="" />
                        </div>
                    </div>

                    <div class="galleryTextListFooterDelivery">
                        SZYBKA DOSTAWA
                    </div>

                    <div class="galleryFooterDelivery">
                        <div class="galleryListFooterDelivery">
                            <img src="./photos/fotos-41.png" alt="" />
                        </div>
                        <div class="galleryListFooterDelivery">
                            <img src="./photos/fotos-12.png" alt="" />
                        </div>
                        <div class="galleryListFooterDelivery">
                            <img src="./photos/fotos-13.png" alt="" />
                        </div>
                    </div>

                </div>

                <div class="footerSocialMedia">
                    <div class="textSocialMedia">
                        DOŁĄCZ DO NAS
                    </div>
                    <div class="footerSocialMedia__content">
                        <a href="#" target="_blank" alt="facebook">
                            <i class="fa-brands fa-facebook"></i>
                        </a>

                        <a href="#" target="_blank" alt="instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>

                        <a href="#" target="_blank" alt="youtube">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>

                </div>
            </div>

        <footer>
            <div>Coppyright 2022. Wszystkie prawa zastrzeżone</div>
            <div>Agencja Interaktywna [ti] Powered By 2ClickShop</div>
        </footer>
    </div>
    <script src="register.js"></script>
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