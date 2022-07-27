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
                                <a href="#">
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

        <div class="information">
            <div class="register">
                <form class="form" action="" method="post" autocomplete="off">
                    <h1 class="login-title">Rejestracja</h1>
                    <input type="text" class="login-input" name="username" placeholder="Username" maxlength="50" required />
                    <input type="text" class="login-input" name="email" placeholder="Email Adress" maxlenght="50">
                    <input type="password" class="login-input" name="password" placeholder="Password" maxlength="50">
                    <input type="submit" name="submit" value="Rejestracja" class="login-button">
                    <p class="link"><a href="login.php">Kliknij aby się zalogować</a></p>
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
    <?php
    include 'db.php'; 
    // $data = $pdo->query("SELECT * FROM users")->fetchAll();
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
//   }
?>
</body>
</html>