<!DOCTYPE html>
<html lang="Pl-pl">
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
        <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
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
                        <div class="three-information">
                        <div class="upper-headers">
                                    <button type="button" class="button-menu" aria-label="Przycisk na menu">
                                        <div class="hamburger">
                                            <span class="bar"></span>
                                            <span class="bar"></span>
                                            <span class="bar"></span>
                                        </div>
                                        <span class="text_menu">MENU</span>
                                    </button>
                                <div class="dropdown">
                                <form action="#section1" class="forms">
                                    <img src="icons/icon_01.png" alt="Pionek - Kontakt" class="pionek"/>    
                                        <button class="contact">KONTAKT</button>
                                            <div class="dropdown_contact">
                                                <div class="info_contact">
                                                    <h3>MASZ PYTANIE?</h3>
                                                    <div class="general_module_dropdown">
                                                        <div class="module_body_dropdown">
                                                            <a href="tel:+48123731050">
                                                                <i class="fa-solid fa-phone-volume"></i> +48 18 737
                                                                21 67
                                                            </a>
                                                        </div>

                                                        <span class="module_information_dropdown">
                                                            Pon.-pt. 7.00-19.00, Sob. 8.00 - 14.00
                                                        </span>

                                                        <span class="module_information_dropdown">
                                                            <a
                                                                href="mailto:info@elhurtplus.pl">info@elhurtplus.pl</a>
                                                        </span>

                                                        <span class="module_information_dropdown">
                                                            ul. Osieczany 585
                                                            <br>
                                                            32-400 Myslenice
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                </div>
                            </div>

                            <div class="upper_headers_search">
                                    <div id="myNav" class="overlay">
                                        <div class="text_close_icon">
                                            <div class="text_category">
                                                <i class="fa-solid fa-angle-left" onclick="closeNav()"></i>
                                                <p>KATEGORIE</p>
                                            </div>
                                            <div class="close_overlay">
                                                <a href="javascript:void(0)" class="closebtn"
                                                    onclick="closeNav()">&times;</a>
                                            </div>
                                        </div>
    
                                        <div class="search-menu">
                                            <form class="search_Top">
                                                <input type="text" class="searchTop__textfield" id="myInputs"
                                                    onkeyup="search_level()" placeholder="Wpisz nazwę produktu">
                                                <button type="submit" class="searchTop__submit"
                                                    aria-label="Przycisk do wyszukiwania frazesów"><i
                                                        class="fa fa-search"></i></button>
                                            </form>
                                        </div>
    
                                        <div class="scrollBar_menu">
                                            <ul class="level1">
    
                                                <li class="menu_level1" onclick="openProducts()">PRODUKTY
                                                    <i class="fa-solid overlay_arrow fa-angle-right"
                                                        onclick="openProducts()"></i>
                                                </li>
                                                <div id="myProducts" class="overlay">
                                                    <div class="text_close_icon">
                                                        <div class="text_category">
                                                            <i class="fa-solid fa-angle-left" onclick="closeProducts()"></i>
                                                            <p>PRODUKTY</p>
                                                        </div>
                                                        <div class="close_overlay">
                                                            <a href="javascript:void(0)" class="closebtn"
                                                                onclick="closeProducts()">&times;</a>
                                                        </div>
                                                    </div>
    
                                                    <div class="menu_products">
                                                        <ul class="level1">
    
                                                            <li class="menu_level2" onclick="openElements()">ŹRÓDŁA ŚWIATŁA
                                                                <i class="fa-solid overlay_arrow1 fa-angle-right"></i>
                                                            </li>
                                                            <div id="myElementsLights" class="overlay">
                                                                <div class="text_close_icon">
                                                                    <div class="text_category">
                                                                        <i class="fa-solid fa-angle-left"
                                                                            onclick="closeElements()"></i>
                                                                        <p>ŹRÓDŁA ŚWIATŁA</p>
                                                                    </div>
                                                                    <div class="close_overlay">
                                                                        <a href="javascript:void(0)" class="closebtn"
                                                                            onclick="closeElements()">&times;</a>
                                                                    </div>
                                                                </div>
    
                                                                <div class="menu_products">
                                                                    <ul class="level1">
                                                                        <li class="menu_level2" onclick="openSpark()">SPARK
                                                                            <i
                                                                                class="fa-solid overlay_arrow1 fa-angle-right"></i>
                                                                        </li>
                                                                        <div id="myCategorySpark" class="overlay">
                                                                            <div class="text_close_icon">
                                                                                <div class="text_category">
                                                                                    <i class="fa-solid fa-angle-left"
                                                                                        onclick="closeSpark()"></i>
                                                                                    <p>SPARK</p>
                                                                                </div>
                                                                                <div class="close_overlay">
                                                                                    <a href="javascript:void(0)"
                                                                                        class="closebtn"
                                                                                        onclick="closeSpark()">&times;</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="menu_products">
                                                                                <ul class="level1">
                                                                                    <li class="menu_level2"><a href="#"
                                                                                            class="menu_a_level1">PODKATEGORIA
                                                                                            1</a>
                                                                                    </li>
                                                                                    <li class="menu_level2"><a href="#"
                                                                                            class="menu_a_level1">PODKATEGORIA
                                                                                            2</a>
                                                                                    </li>
                                                                                    <li class="menu_level2"><a href="#"
                                                                                            class="menu_a_level1">PODKATEGORIA
                                                                                            3</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <li class="menu_level2"><a href="#"
                                                                                class="menu_a_level1">PHANTOM</a>
                                                                        </li>
                                                                        <li class="menu_level2"><a href="#"
                                                                                class="menu_a_level1">INSPIRE</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <li class="menu_level2"><a href="#"
                                                                    class="menu_a_level1">OŚWIETLENIE WEWNETRZNE</a></li>
                                                            <li class="menu_level2"><a href="#"
                                                                    class="menu_a_level1">GNIAZKA, WYŁĄCZNIKI</a></li>
    
                                                            <li class="menu_level2" onclick="openAutomatic()">AUTOMATYKA,
                                                                STEROWANIE
                                                                <i class="fa-solid overlay_arrow1 fa-angle-right"></i>
                                                            </li>
                                                            <div id="myAutomatic" class="overlay">
                                                                <div class="text_close_icon">
                                                                    <div class="text_category">
                                                                        <i class="fa-solid fa-angle-left"
                                                                            onclick="closeAutomatic()"></i>
                                                                        <p>AUTOMATYKA, STEROWANIE</p>
                                                                    </div>
                                                                    <div class="close_overlay">
                                                                        <a href="javascript:void(0)" class="closebtn"
                                                                            onclick="closeAutomatic()">&times;</a>
                                                                    </div>
                                                                </div>
                                                                <div class="menu_products">
                                                                    <ul class="level1">
                                                                        <li class="menu_level2"><a href="#"
                                                                                class="menu_a_level1">PODKATEGORIA</a>
                                                                        </li>
                                                                        <li class="menu_level2"><a href="#"
                                                                                class="menu_a_level1">PODKATEGORIA</a>
                                                                        </li>
                                                                        <li class="menu_level2"><a href="#"
                                                                                class="menu_a_level1">PODKATEGORIA</a>
                                                                        </li>
                                                                        <li class="menu_level2"><a href="#"
                                                                                class="menu_a_level1">PODKATEGORIA</a>
                                                                        </li>
                                                                        <li class="menu_level2"><a href="#"
                                                                                class="menu_a_level1">PODKATEGORIA</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
    
                                                            <li class="menu_level2"><a href="#"
                                                                    class="menu_a_level1">ROZDZIELENIE I APARATURA</a></li>
                                                            <li class="menu_level2"><a href="#" class="menu_a_level1">TAŚMY,
                                                                    PASKI LED</a></li>
                                                            <li class="menu_level2"><a href="#"
                                                                    class="menu_a_level1">MATERIAŁY INSTALACYJNE I INNE</a>
                                                            </li>
    
                                                            <li class="menu_level2" onclick="openInteriorLighting()">
                                                                OŚWIETLENIE WEWNĘTRZNE
                                                                <i class="fa-solid overlay_arrow1 fa-angle-right"></i>
                                                            </li>
                                                            <div id="myInterior" class="overlay">
                                                                <div class="text_close_icon">
                                                                    <div class="text_category">
                                                                        <i class="fa-solid fa-angle-left"
                                                                            onclick="closeInteriorLighting()"></i>
                                                                        <p>OŚWIETLENIE WEWNĘTRZNE</p>
                                                                    </div>
                                                                    <div class="close_overlay">
                                                                        <a href="javascript:void(0)" class="closebtn"
                                                                            onclick="closeInteriorLighting()">&times;</a>
                                                                    </div>
                                                                </div>
                                                                <div class="menu_products">
                                                                    <ul class="level1">
                                                                        <li class="menu_level2"><a href="#"
                                                                                class="menu_a_level1">LAMPY WISZĄCE,
                                                                                ŻYRANDOLE</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </ul>
                                                    </div>
                                                </div>
    
                                                <li class="menu_level1" onclick="openManufacturers()">PRODUCENCI
                                                    <i class="fa-solid overlay_arrow fa-angle-right"
                                                        onclick="openManufacturers()"></i>
                                                </li>
                                                <div id="myManufacturers" class="overlay">
                                                    <div class="text_close_icon">
                                                        <div class="text_category">
                                                            <i class="fa-solid fa-angle-left"
                                                                onclick="closeManufacturers()"></i>
                                                            <p>PRODUCENCI</p>
                                                        </div>
                                                        <div class="close_overlay">
                                                            <a href="javascript:void(0)" class="closebtn"
                                                                onclick="closeManufacturers()">&times;</a>
                                                        </div>
                                                    </div>
                                                    <div class="menu_products">
                                                        <ul class="level1">
                                                            <li class="menu_level2">PHILIPS</li>
                                                            <li class="menu_level2">PRODUCENT 1</li>
                                                            <li class="menu_level2">PRODUCENT 2 </li>
                                                            <li class="menu_level2">PRODUCENT 3</li>
                                                            <li class="menu_level2">PRODUCENT 4</li>
                                                        </ul>
                                                    </div>
                                                </div>
    
                                                <li class="menu_level1"><a href="#" class="menu_a_level1">NOWOŚCI</a></li>
                                                <li class="menu_level1"><a href="#" class="menu_a_level1">PROMOCJE</a></li>
                                                <li class="menu_level1"><a href="#" class="menu_a_level1">POLECAMY</a></li>
                                                <li class="menu_level1"><a href="#" class="menu_a_level1">O NAS</a></li>
                                                <li class="menu_level1"><a href="#" class="menu_a_level1">INSPIRACJE</a></li>
                                            </ul>
                                        </div>
    
                                        <div class="menuDeliveryPicker">
                                            <div id="myWholeNav" class="whole_overlay">
                                                <div class="settings_icon">
                                                    <div class="text_settings">
                                                        <p>USTAWIENIA REGIONALNE</p>
                                                    </div>
                                                    <a href="javascript:void(0)" class="closebtn"
                                                        onclick="closeWholeNav()">&times;</a>
                                                </div>
                                                <div class="column_section">
                                                    <div class="select_option_localization">
                                                        <div class="general_description">
                                                            <p class="localization">Lokalizacja</p>
                                                            <div class="select_poland_local">
                                                                <p>Polska</p>
                                                                <i class="fa-solid arrow_down fa-angle-down"></i>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <div class="select_option_localization">
                                                        <div class="general_description">
                                                            <p class="localization">Język</p>
                                                            <div class="select_poland_local">
                                                                <p>polski</p>
                                                                <i class="fa-solid arrow_down fa-angle-down"></i>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <div class="select_option_localization">
                                                        <div class="general_description">
                                                            <p class="localization">Waluta</p>
                                                            <div class="select_poland_local">
                                                                <p>Polski złoty (PLN)</p>
                                                                <i class="fa-solid arrow_down fa-angle-down"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="button_settings">ZAPISZ</button>
                                                </div>
                                            </div>
                                            <img src="./photos/delivery-country-4.png" alt="Polska"
                                                onclick="openWholeNav()">
    
                                            <div class="menuDelivery_text">
                                                <p onclick="openWholeNav()">PLN</p>
                                            </div>
    
                                            <div class="menuDelivery_country">
                                                <p onclick="openWholeNav()">POLSKI</p>
                                            </div>
                                        </div>
                                    </div>
                                    <i class="fa-solid search_overlay fa-magnifying-glass" onclick="openNav()"></i>
                                    <span onclick="openNav()">SZUKAJ</span>
                                </div>

                            <div class="upper-headers">
                                <a href="#">
                                    <img src="icons/icon_02.png" alt="Gwiazda - Ulubione" />
                                    <p>ULUBIONE</p>
                                </a>
                            </div>
                            <div class="upper-headers">
                                <a href="login.php">
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
                                        <p class="title_menu_responsive">KOSZYK</p>
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
                        <p>Dziękujemy <b><?php echo $username = $_POST['name'];?></b> za przesłanie formularza kontaktowego.</p>
                        <p>Skontaktujemy sie jak najszybciej z państwem</p>
                    </div>
                </div>
            </section>

            <section>
                <div class="under-footer">
                    <div class="footer-information">
                        <div class="hide-info">
                            <h3>O NAS</h3>
                            <a class="hide" onClick="op('#poka1');"><span id="arrow-down1"
                                    class="material-symbols-outlined">keyboard_arrow_down</span></a>
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
                            <a class="hide" onClick="op('#poka2');"><span id="arrow-down2"
                                    class="material-symbols-outlined">keyboard_arrow_down</span></a>
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
                            <a class="hide" onClick="op('#poka3');"><span id="arrow-down3"
                                    class="material-symbols-outlined">keyboard_arrow_down</span></a>
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
    
                            <a href="formul_kontakt.php" class="formularz">FORMULARZ KONTAKTOWY</a>
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
<script type="text/javascript" src="./scriptsJS/action.js"></script>
<?php
require ('db.php');

if(isset($_POST['submit'])){
    $username = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $comment = $_POST['comment'];

    $query = "INSERT INTO `contact` (name,email,phone,comment)
    VALUES ('$username', '$email', '$phone','$comment')";
    $stmt= $pdo->prepare($query);
    $stmt->execute(array($username, $email, $phone, $comment));
    header('Refresh: 5; url=index3.html');
}
?>
</body>
</html>
