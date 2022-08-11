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
    <link rel="stylesheet" href="action.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
</head>
<body>
    <div class="full-page">
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>
    <header>
            <div class="main">
                <div class="menu">
                    <div class="upper-menu">
                        <div class="logo">
                            <a href="index.html">
                                <img src="logos/logo.png" alt="Logo ElHurtPlus" />
                            </a>
                        </div>
                        <div class="search-menu">
                            <form class="searchTop">
                                <input type="text" class="searchTop__textfield" placeholder="Wpisz nazwę produktu"
                                    name="search" autocomplete="off">
                                <button type="submit" class="searchTop__submit"
                                    aria-label="Przycisk do wyszukiwania frazesów"><i class="fa fa-search"></i></button>
                            </form>
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
                                <a href="#">
                                    <img src="icons/icon_03.png" alt="Telefon - Moje Konto" />
                                    <p>MOJE KONTO</p>
                                </a>
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
                        <a href="index2.html" target="_blank"><img src="photos/category-1.png" alt="">ŹRÓDŁA ŚWIATŁA</a>
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

        </header>

        <section>
        <div class="third-header">
                <div class="header-information">
                    <a href="index.html" target="_blank">
                        <p>Strona główna</p>
                    </a>
                </div>
                <div class="header-information">
                    <p>Kategoria</p>
                </div>
                <div class="header-information">
                    <p>Kategoria</p>
                </div>
            </div>
        </section>

            <section>
                <div class="reviewFormContainer">
                    <div class="messageInfo">
                        <p>Dziękujemy za przesłanie opinii</p>
                        <p>Zapraszamy ponownie do odwiedzenia strony</p>
                    </div>
                </div>
            </section>
            <section>
                <div class="under-footer">
                    <div class="footer-information">
                        <h3>INFORMACJE</h3>
                        <ul>
                            <li><a href="#">Informacje o sklepie</a></li>
                            <li><a href="#">Porady</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Galeria inspiracji</a></li>
                            <li><a href="#">Kontakt</a></li>
                            <li><a href="#">Informacje o sklepie</a></li>
                        </ul>
                    </div>

                    <div class="footer-information">
                        <h3>INFORMACJE</h3>
                        <ul>
                            <li><a href="#">Czas realizacji</a></li>
                            <li><a href="#">Koszty przesyłki</a></li>
                            <li><a href="#">Zamów próbkę</a></li>
                            <li><a href="#">Szycie na wymiar</a></li>
                            <li><a href="#">Czas realizacji</a></li>
                            <li><a href="#">Koszty przesyłki</a></li>
                        </ul>
                    </div>

                    <div class="footer-information">
                        <h3>MOJE KONTO</h3>
                        <ul>
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
                                    <i class="fa-solid fa-phone-volume"></i> +48 12 373 10 50
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
            </section>

            <section>
                <div class="footerDetails">
                    <div class="row-up">
                        <div class="galleryTextListFooterPayment">
                            BEZPIECZNE PŁATNOŚCI
                        </div>

                        <div class="galleryFooter">
                            <div class="galleryListFoooterPayment">
                                <img src="./photos/fotos-54.png" alt="" />
                            </div>

                            <div class="galleryListFoooterPayment">
                                <img src="./photos/fotos-53.png" alt="" />
                            </div>

                            <div class="galleryListFoooterPayment">
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
            </section>
        </main>
        <footer>
            <div>Copyright 2022. Wszystkie prawa zastrzeżone</div>
            <div>Agencja Interaktywna [ti] Powered By 2ClickShop</div>
        </footer>
    </div>
    </div>
    </div>
</div>
<script type="text/javascript" src="action.js"></script>
<?php
require ('db.php');

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    $query = "INSERT INTO `comments` (name, email, comment)
    VALUES ('$username', '$email', '$comment')";
    $stmt= $pdo->prepare($query);
    $stmt->execute(array($username, $email, $comment));
    if($stmt){
        echo "<script>alert('Comment added successfully.')</script>";
    } else{
        echo "<script>alert('Comment does not add.')</script>";
    }

}
?>
</body>
</html>
