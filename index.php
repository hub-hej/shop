<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Strona główna">
    <title>Strona Główna</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>

<body>
    <div class="full-page">
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>
        <header>
            <section>
                <div class="main">
                    <div class="menu">
                        <div class="upper-menu">
                            <div class="logo-search">
                                <div class="logo">
                                    <h1>
                                        <img src="logos/logo.png" alt="Logo ElHurtPlus" class="responsive-image"
                                            loading="lazy" />
                                    </h1>
                                </div>
                            </div>
                            <div class="menu-elements">
                                <div class="menu-paragraph">
                                    <form action="#section1">
                                        <img src="icons/icon_01.png" alt="Pionek - Kontakt" />
                                        <form action="#section1" class="forms"><button class="contact">KONTAKT</button></form>
                                </form>
                                </div>
                                <div class="menu-paragraph">
                                    <a href="#">
                                        <img src="icons/icon_02.png" alt="Gwiazda - Ulubione" />
                                        <p>ULUBIONE</p>
                                    </a>
                                </div>
                                <div class="menu-paragraph">
                                    <div class="dropdown">
                                        <a href="login.php">
                                            <img src="icons/icon_03.png" alt="Telefon - Moje Konto" />
                                            <?php session_start();
                                                if($_SESSION['first_name'] == true){ 
                                                    echo $_SESSION["first_name"];
                                                    echo '<a href="logout.php">';
                                                } else {
                                                    echo '<a href="index.html"><span>Login/Register</span></a></li>';
                                                }
                                            ?>
                                            <div class="dropdown-content">
                                                <div class="log-reg-user">
                                                    <div class="login-user">
                                                        <a href="logout.php" class="login login-user">
                                                            <p>Wyloguj się</p>
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
                                                <p class="number-orders">0</p>
                                            </div>
                                            <img src="icons/icon_06.png" alt="Koszyk" />
                                        </div>

                                        <div class="text-cart">
                                            <p class="first-text-cart">TWÓJ KOSZYK</p>
                                            <p class="second-text-cart">0zł</p>
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
                    <div class="progress-container">
                        <div class="progress-bar" id="myBar"></div>
                    </div>
                </div>
            </section>

                <nav class="header">
                    <button type="button" class="button-menu" aria-label="Przycisk na menu">
                        <div class="hamburger">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </div>
                    </button>
                    <div class="nav-items">
                        <div class="headers">
                            <a href="index2.html" target="_blank"><img src="photos/category-1.png" alt="">ŹRÓDŁA
                                ŚWIATŁA</a>
                        </div>

                        <div class="headers">
                            <a href="#" target="_blank"><img src="photos/category-5.png" alt="">OŚWIETLENIE
                                WEWNĘTRZNE</a>
                        </div>

                        <div class="headers">
                            <a href="#" target="_blank"><img src="photos/category-6.png" alt="">GNIAZDKA, WYŁACZNIKI</a>
                        </div>

                        <div class="headers">
                            <a href="#" target="_blank"><img src="photos/category-7.png" alt="">AUTOMATYKA,
                                STEROWANIE</a>
                        </div>

                        <div class="headers">
                            <a href="#" target="_blank"><img src="photos/category-8.png" alt="">ROZDZIELANIE I
                                APARATURA</a>
                        </div>

                        <div class="headers">
                            <a href="#" target="_blank"><img src="photos/category-10.png" alt="">MATERIALY
                                INSTALACYJNE</a>
                        </div>
                    </div>
                </nav>
            </section>
        </header>

        <main>
            <div class="container">
                <div class="main-image">
                    <img src="photos/MaskGroup40.png" alt="Informacje o Sedna" id="image-back" />
                    <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                    <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                    <div class="text-main-image">
                        <h3>POZNAJ SEDNA</h3>
                        <h4>Schneider Electric</h4>
                        <p> Sedna to osprzęt
                            elektroinstalacyjny o wyrazistym kształcie oraz unikalnej formie.</p> <br />
                        <a href="#" class="button button1">ZOBACZ WIĘCEJ</a>
                    </div>
                </div>
            </div>

            <div class="add-information">
                <div class="three-sub-images">
                    <img src="photos/Image203.png" alt="Pomoc eksperta">
                    <div class="text-on-sub-image">
                        <b>Pomoc eksperta</b>
                        <p>Doradzamy</p>
                        <button class="button button2">ZOBACZ WIĘCEJ</button>
                    </div>
                </div>

                <div class="three-sub-images">
                    <img src="photos/img_03.jpg" alt="Szukaj wygodnie">
                    <div class="text-on-sub-image">
                        <b>Szukaj wygodnie</b>
                        <p>Elhurt Plus</p>
                        <button class="button button2">ZOBACZ WIĘCEJ</button>
                    </div>
                </div>

                <div class="three-sub-images">
                    <img src="photos/img_05.jpg" alt="Seria Unica">
                    <div class="text-on-sub-image">
                        <b>Seria Unica</b>
                        <p>Wyjątkowy wzór</p>
                        <button class="button button2">ZOBACZ WIĘCEJ</button>
                    </div>
                </div>
            </div>
            <div class="recommend-products">
                <div class="recomm_produc_hide">
                    <h2>Polecane produkty</h2>
                    <a class="hide" onClick="op('#poka4');">
                        <span class="arrow-down material-symbols-outlined">keyboard_arrow_down</span></a>
                </div>
            </div>

            <div id="poka4">
                <div class="choice-products">
                    <div class="lights-row">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="light">
                                    <img src="photos/img_06.jpg" alt="Żarówka">
                                    <div class="text-under-lights">
                                        <b>ŁĄCZNIK JEDNOBIEGUNOWY</b>
                                        <br />
                                        <p>Kod produktu: CW1.01/11</p>
                                        <br />
                                        <s>656,65 zł</s>
                                        <br />
                                        <b>442,85 zł</b>
                                    </div>
                                    <div class="tile-product">
                                        <div class="number">
                                            <button class="minus">-</button>
                                            <label>
                                                <input type="number" value="1" disabled />
                                            </label>
                                            <button class="plus">+</button>
                                        </div>
                                        <div class="shoppingcart"><button class="button5"><img src="icons/Group807.png"
                                                    alt="Koszyk" class="shop-cart" /></button></div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="light">
                                    <img src="photos/img_06.jpg" alt="Żarówka">
                                    <div class="text-under-lights">
                                        <b>ŁĄCZNIK JEDNOBIEGUNOWY</b>
                                        <br />
                                        <p>Kod produktu: CW1.01/11</p>
                                        <br />
                                        <s>656,65 zł</s>
                                        <br />
                                        <b>442,85 zł</b>
                                    </div>
                                    <div class="tile-product">
                                        <div class="number">
                                            <button class="minus">-</button>
                                            <label>
                                                <input type="number" value="1" disabled />
                                            </label>
                                            <button class="plus">+</button>
                                        </div>
                                        <div class="shoppingcart"><button class="button5"><img src="icons/Group807.png"
                                                    alt="Koszyk" /></button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="light">
                                    <img src="photos/img_06.jpg" alt="Żarówka">
                                    <div class="text-under-lights">
                                        <b>ŁĄCZNIK JEDNOBIEGUNOWY</b>
                                        <br />
                                        <p>Kod produktu: CW1.01/11</p>
                                        <br />
                                        <s>656,65 zł</s>
                                        <br />
                                        <b>442,85 zł</b>
                                    </div>
                                    <div class="tile-product">
                                        <div class="number">
                                            <button class="minus">-</button>
                                            <label>
                                                <input type="number" value="1" disabled />
                                            </label>
                                            <button class="plus">+</button>
                                        </div>
                                        <div class="shoppingcart"><button class="button5"><img src="icons/Group807.png"
                                                    alt="Koszyk" /></button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="light">
                                    <img src="photos/img_06.jpg" alt="Żarówka">
                                    <div class="text-under-lights">
                                        <b>ŁĄCZNIK JEDNOBIEGUNOWY</b>
                                        <br />
                                        <p>Kod produktu: CW1.01/11</p>
                                        <br />
                                        <s>656,65 zł</s>
                                        <br />
                                        <b>442,85 zł</b>
                                    </div>
                                    <div class="tile-product">
                                        <div class="number">
                                            <button class="minus">-</button>
                                            <label>
                                                <input type="number" value="1" disabled />
                                            </label>
                                            <button class="plus">+</button>
                                        </div>
                                        <div class="shoppingcart"><button class="button5"><img src="icons/Group807.png"
                                                    alt="Koszyk" /></button></div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="light">
                                    <img src="photos/img_06.jpg" alt="Żarówka">
                                    <div class="text-under-lights">
                                        <b>ŁĄCZNIK JEDNOBIEGUNOWY</b>
                                        <br />
                                        <p>Kod produktu: CW1.01/11</p>
                                        <br />
                                        <s>656,65 zł</s>
                                        <br />
                                        <b>442,85 zł</b>
                                    </div>
                                    <div class="tile-product">
                                        <div class="number">
                                            <button class="minus">-</button>
                                            <label>
                                                <input type="number" value="1" disabled />
                                            </label>
                                            <button class="plus">+</button>
                                        </div>
                                        <div class="shoppingcart"><button class="button5"><img src="icons/Group807.png"
                                                    alt="Koszyk" /></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="only-button">
                        <a href="#" class="button button3">ZOBACZ WSZYSTKIE INSPIRACJE</a>
                    </div>
                </div>
            </div>

            <div class="distributor">
                <div class="title_distributor">
                    <h2>Dystrybutorzy</h2>
                    <a class="hide" onClick="op('#distributors');">
                        <span class="arrow-down material-symbols-outlined">keyboard_arrow_down</span></a>
                </div>
            </div>

            <div class="section-body" id="distributors">
                <div class="galleryRecommended">
                    <div class="galleryItem">
                        <a href="index.html" target="_blank">
                            <img src="./photos/fotos-46.png" alt="" />
                        </a>
                    </div>

                    <div class="galleryItem">
                        <a href="index.html" target="_blank">
                            <img src="./photos/fotos-47.png" alt="" />
                        </a>
                    </div>

                    <div class="galleryItem">
                        <a href="index.html" target="_blank">
                            <img src="./photos/fotos-48.png" alt="" />
                        </a>
                    </div>

                    <div class="galleryItem">
                        <a href="index.html" target="_blank">
                            <img src="./photos/fotos-49.png" alt="" />
                        </a>
                    </div>

                    <div class="galleryItem">
                        <a href="index.html" target="_blank">
                            <img src="./photos/fotos-50.png" alt="" />
                        </a>
                    </div>

                    <div class="galleryItem">
                        <a href="index.html" target="_blank">
                            <img src="./photos/fotos-51.png" alt="" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="description_why_us">
                <div class="title_description">
                    <h2>Dlaczego my?</h2>
                    <a class="hide" onClick="op('#description_us');">
                        <span class="arrow-down material-symbols-outlined">keyboard_arrow_down</span></a>
                </div>
            </div>

            <div class="about-section" id="description_us">
                <img src="photos/img_07.jpg" alt="Dlaczego my" />

                <div class="content-area">
                    <h3>Sprawdź dlaczego my</h3>

                    <p>Początki działalności to rok 2002r i otwarcie hurtowni elektrycznej, oferującej podstawowe
                        produkty
                        do instalacji elektrycznych jak i również materiały używane w przemyśle wydobywczym. Firma
                        dostarczała produkty trudno dostępne do kopalń, zakładów przemysłowych.</p>

                    <div class="icons">

                        <div class="icon">
                            <img src="icons/icon_07.png" alt="" />
                            <div class="icon-text">
                                SZYBKA WYSYŁKA
                            </div>
                        </div>

                        <div class="icon">
                            <img src="icons/icon_08.png" alt="" />
                            <div class="icon-text">
                                SZEROKI ASORTYMENT
                            </div>
                        </div>

                        <div class="icon">
                            <img src="icons/icon_09.png" alt="" />
                            <div class=" icon-text">
                                BEZPIECZNY ZWROT
                            </div>
                        </div>
                    </div>
                    <a href="#" class="button button4">INFORMACJE O FIRMIE</a>
                </div>
            </div>
        </main>

        <section>
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

                <div class="footer-information" id="section1">
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

                        <a href="#" class="form">FORMULARZ KONTAKTOWY</a>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="footerDetails">

                <div class="row-up">
                    <div class="galleryTextListFooterPayment">
                        BEZPIECZNE PŁATNOŚCI
                        <a class="hide" onClick="op('#image-poka1');"><span
                                class="arrow-down material-symbols-outlined">keyboard_arrow_down</span></a>
                    </div>

                    <div class="galleryFooter" id="image-poka1">
                        <div class="gallery_flex">
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
                    </div>

                    <div class="galleryTextListFooterDelivery">
                        SZYBKA DOSTAWA
                        <a class="hide" onClick="op('#image-poka2');"><span
                                class="arrow-down material-symbols-outlined">keyboard_arrow_down</span></a>
                    </div>

                    <div class="galleryFooterDelivery" id="image-poka2">
                        <div class="gallery_flex">
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

                </div>
                <div class="footerSocialMedia">
                    <div class="textSocialMedia">
                        DOŁĄCZ DO NAS
                    </div>
                    <div class="footerSocialMedia__content">
                        <a href="#" target="_blank" alt="facebook"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#" target="_blank" alt="instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" target="_blank" alt="youtube"><i class="fa-brands fa-youtube"></i></a>
                </div>
                </div>
            </div>
        </section>

        <footer>
            <div>Copyright 2022. Wszystkie prawa zastrzeżone</div>
            <div>Agencja Interaktywna [ti] Powered By 2ClickShop</div>
        </footer>
        <script type="text/javascript" src="./scriptsJS/home-page.js"></script>
    </div>
</body>

</html>