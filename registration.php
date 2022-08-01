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
                                             <p>Zaloguj się</p>
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

        <?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($pdo, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($pdo, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($pdo, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($pdo, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Rejestracja sie powiodła.</h3><br/>
                  <p class='link'>Kliknij tu aby się<a href='login.php'>zalogować</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Brakuje wypełnienia wymaganych pól.</h3><br/>
                  <p class='link'>Kliknij tu aby się <a href='registration.php'>zarejestrować</a> ponownie.</p>
                  </div>";
        }
    } else {
?>

        <div class="orderHeader">
            <span class="orderHeader__text">Rejestracja</span>
        </div>
        <div class="information">
            <div class="register">
                <form class="form" action="" method="post" autocomplete="off">
                    <input type="text" class="login-input" name="username" placeholder="Nazwa użytkownika*" maxlength="50" required />
                    <input type="text" class="login-input" name="email" placeholder="Email*" maxlenght="50">
                    <input type="password" class="login-input" name="password" placeholder="Hasło*" maxlength="50">
                    <div class="regulations">
                    <ul>
                                <label class="checkbox-button">
                                    <input type="checkbox" class="checkbox-button__input" class="choice1-1" name="choice1">
                                    <span class="checkbox-button__control"></span>
                                    <span class="checkbox-button__label">Zapoznałem się z regulaminem oraz moim prawem do odstąpienia od umowy i rękojmi*</span>
                                </label>
                                <br />
                                <label class="checkbox-button">
                                    <input type="checkbox" class="checkbox-button__input" class="choice1-1" name="choice1">
                                    <span class="checkbox-button__control"></span>
                                    <span class="checkbox-button__label">Wyrażam zgodę na otrzymywanie informacji na temat nowości oraz zmian w ofercie sklepu</span>
                                </label>
                    </ul>
                    </div>
                    <br>

                    <div class="orderButtonRow">
                        <p class="left-text">*Pola wymagane</p>
                        <input type="submit" name="submit" value="Załóż konto" class="login-button">
                    </div>
                    <p class="link"><a href="login.php">Kliknij aby się zalogować</a></p>
                 </form>
            </div>
        </div>
        
        <?php
            }
?>

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