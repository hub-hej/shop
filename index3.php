<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Karta produktu">
    <title>Karta produktu</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
<?php
    session_start();
    if (!isset($_SESSION['id']))
    {
        header("Location: login.php");
        die();
    }
    ?>
    <div class="full-page">
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>
        <header>
            <div class="main">
                <div class="menu">
                    <div class="upper-menu">
                        <div class="logo-search">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="logos/logo.png" alt="Logo ElHurtPlus" class="responsive-image" />
                                </a>
                            </div>
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
                                <div id="myNav" class="overlays">
                                    <div class="text_close_icon">
                                        <div class="text_category">
                                            <i class="fa-solid right_category fa-angle-left" onclick="closeNav()"></i>
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
                                            <div id="myProducts" class="overlays">
                                                <div class="text_close_icon">
                                                    <div class="text_category">
                                                        <i class="fa-solid right_category fa-angle-left" onclick="closeProducts()"></i>
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
                                                        <div id="myElementsLights" class="overlays">
                                                            <div class="text_close_icon">
                                                                <div class="text_category">
                                                                    <i class="fa-solid right_category fa-angle-left"
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
                                                                    <div id="myCategorySpark" class="overlays">
                                                                        <div class="text_close_icon">
                                                                            <div class="text_category">
                                                                                <i class="fa-solid right_category fa-angle-left"
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
                                                        <div id="myAutomatic" class="overlays">
                                                            <div class="text_close_icon">
                                                                <div class="text_category">
                                                                    <i class="fa-solid right_category fa-angle-left"
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
                                                        <div id="myInterior" class="overlays">
                                                            <div class="text_close_icon">
                                                                <div class="text_category">
                                                                    <i class="fa-solid right_category fa-angle-left"
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
                                            <div id="myManufacturers" class="overlays">
                                                <div class="text_close_icon">
                                                    <div class="text_category">
                                                        <i class="fa-solid right_category fa-angle-left"
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
                                <div class="dropdown">
                                <div class="dropdown_flex">
                                    <a href="login.php">
                                        <img src="icons/icon_03.png" alt="Telefon - Moje Konto" />
                                        <?php
                                                if($_SESSION['first_name'] == true){ 
                                                    echo $_SESSION["first_name"];
                                                    echo '<a href="logout.php">';
                                                }else
                                                { 
                                                    echo '<a href="index.html"><p>MOJE KONTO</p>';
                                                }
                                            ?>
                                        <div class="dropdown-content1">
                                            <div class="log-reg-user">
                                                <div class="login-user">
                                                    <a href="login.php" class="login login-user">
                                                        <p>Wyloguj się</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                            </div>
                                </div>
                            </div>

                            <div class="cart-family">
                                <div class="cart">
                                    <div class="cart-brother">
                                        <div class="text-on-cart">
                                            <p class="number-orders">0</p>
                                        </div>
                                        <img src="icons/icon_06.png" alt="Koszyk" />
                                        <p class="title_menu_responsive">KOSZYK</p>
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

            <div class="header">
                <div class="nav-items">
                    <div class="headers">
                        <a href="index2.php" target="_blank"><!--<img src="photos/category-1.png" alt="">-->ŹRÓDŁA ŚWIATŁA</a>
                    </div>

                    <div class="headers">
                        <a href="#" target="_blank"><!--<img src="photos/category-5.png" alt="">-->OŚWIETLENIE WEWNĘTRZNE</a>
                    </div>

                    <div class="headers">
                        <a href="#" target="_blank"><!--<img src="photos/category-6.png" alt="">-->GNIAZDKA, WYŁACZNIKI</a>
                    </div>

                    <div class="headers">
                        <a href="#" target="_blank"><!--<img src="photos/category-7.png" alt="">-->AUTOMATYKA, STEROWANIE</a>
                    </div>

                    <div class="headers">
                        <a href="#" target="_blank"><!--<img src="photos/category-8.png" alt="">-->ROZDZIELANIE I APARATURA</a>
                    </div>

                    <div class="headers">
                        <a href="#" target="_blank"><!--<img src="photos/category-10.png" alt="">-->MATERIALY INSTALACYJNE</a>
                    </div>
                </div>
            </div>

        </header>

        <main>
            <div class="third-header">
                <div class="header-information">
                    <a href="index.php" target="_blank">
                        <p>Strona główna</p>
                    </a>
                </div>
                <span>-</span>
                <div class="header-information">
                    <p>Kategoria</p>
                </div>
                <span>-</span>
                <div class="header-information">
                    <p>Kategoria</p>
                </div>
            </div>

            <section>
                <div class="wrapper">
                    <div class="title-offer">
                        <h1>Łącznik jednobiegunowy (moduł) 10AX, 250V~, zaciski śrubowe</h1>
                        <div class="philips">
                            <img src="./photos/fotos-48.png" alt="PHILIPS" />
                        </div>
                    </div>
                    <div class="lights-offer">
                        <div class="lights-wrapper">
                            <img src="photos/Photo–1.png" alt="Duża żarówka" id="image-back" />
                            <div class="left-small-lights">
                                <button class="button-up" aria-label="Przycisk górny"><i
                                        class="fa-solid fa-angle-up"></i>
                                    <i class="fa-solid fa-angle-left"></i></button>
                                <img src="photos/Image149@2x.png" alt="Żarówki" />
                                <img src="photos/Image149@2x.png" alt="Żarówki" />
                                <img src="photos/Image149@2x.png" alt="Żarówki" />
                                <img src="photos/Image149@2x.png" alt="Żarówki" />
                                <img src="photos/product-1.png" class="outlet" alt="Żarówki" />
                                <button class="button-down" aria-label="Przycisk dolny"><i
                                        class="fa-solid fa-angle-down"></i>
                                    <i class="fa-solid fa-angle-right"></i></button>
                            </div>
                            <div class="text-offer">
                                <p class="one">PROMOCJA</p>
                                <p class="two">NOWOŚĆ</p>
                            </div>
                            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                        </div>

                        <div class="lights-information">
                            <div class="upper-light-info">
                                <div class="productInformationBlock">
                                    INFORMACJE
                                </div>
                                <p class="paragraph-code">IPC-HFW2231S-S-0280B</p>

                                <div class="add-information-light">
                                    <div class="option1">
                                        <img src="icons/Group5248.png" alt="Dostępny" />
                                        <p>Dostępny</p>
                                    </div>
                                    <div class="option2">
                                        <img src="icons/Group5250.png" alt="Dostępny" />
                                        <p>24H</p>
                                    </div>
                                </div>

                                <!--<div class="icon_fav_btn" onclick="getclick(this);">
                                    <i class="fa-regular fa-star"></i>
                                    <div class="fav_btn">
                                    </div>
                                </div>-->

                                <!--<div class="productOpinion">
                                    <div class="productElementStars">
                                        <i class="fas fa-star stars"></i>
                                        <i class="fas fa-star stars"></i>
                                        <i class="fas fa-star stars"></i>
                                        <i class="fas fa-star stars"></i>
                                        <i class="fas fa-star stars"></i>
                                    </div>

                                    <div class="productText_Opinion">
                                        Opinii: 0
                                    </div>

                                    <div class="productBtn_Opinion">
                                        <form action="#section3" class="forms"><button class="scroll">Dodaj
                                                opinie</button></form>
                                    </div>
                                </div>-->

                                <div class="variants">
                                    <p>WARIANTY</p>
                                    <div class="two-variant">
                                        <div class="first-image-variant">
                                            <img src="photos/Image149@2x.png" alt="Żarówki" />
                                        </div>
                                        <div class="second-image-variant">
                                            <img src="photos/Image149@2x.png" alt="Żarówki" />
                                        </div>
                                    </div>

                                    <div class="two-text-variant">
                                        <div class="text-under-first-variant">
                                            <p>Biały</p>
                                        </div>
                                        <div class="text-under-second-variant">
                                            <p>Czarny</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bottom-light-info">
                                <div class="productParam_value">
                                    <s>656,65 zł</s>
                                    <br />
                                    <b><span id="total">442.50zł</span></b>
                                    <p class="price" data-price="442.50"></p>
                                </div>
                                <div class="tile-light">
                                    <div class="number-light">
                                        <button type="button" class="minus-light">-</button>
                                        <label>
                                            <input type="number" class="quantity" value="1" />
                                        </label>
                                        <button type="button" class="plus-light">+</button>
                                    </div>
                                    <div class="shopping-button">
                                        <a href=""><button class="button button8"><img src="icons/Group807.png"
                                                    alt="Koszyk" />
                                                <p>DO KOSZYKA</p>
                                            </button></a>
                                    </div>
                                </div>
                            </div>

                            <!--<div class="productInfoBlock">
                                <div id="myNav" class="overlay">
                                    <div class="overlay-content">
                                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                        <img src="./photos/banner-big-3-pl.jpg" alt="">
                                        <div class="column_product">
                                            <div class="productIconTitle">
                                                <div class="icon_phone_span">
                                                    <i class="phone-call fa-solid fa-phone-volume"></i>
                                                </div>
                                                <div class="title_text">
                                                    ZAMÓWIENIA TELEFONICZNE
                                                    <p>Zamów rozmowę z naszym konsultantem dotyczącą produktu luz złóż
                                                        zamówienie telefoniczne.</p>
                                                </div>
                                            </div>
                                            <div class="productInputNumber">
                                                <form method="post" action="phone.php" autocomplete="off">
                                                    <input
                                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                        type="number" maxlength="9" class="value_number" name="phone"
                                                        placeholder="Wpisz swój numer telefonu" required>
                                            </div>
                                            <label class="checkbox-button">
                                                <input type="checkbox" class="checkbox-button__input" class="choice1-1"
                                                    name="choice1" required>
                                                <span class="checkbox-button__control"></span>
                                                <span class="checkbox-button__label">Wyrażam zgodę na otrzymywanie drogą
                                                    elektroniczną na wskazany przeze mnie numer telefonu informacji
                                                    dotyczących świadczonych przez Administratora. Zgoda może zostać
                                                    cofnięta w każdym czasie.</span>
                                            </label>

                                            <div class="product_footer">
                                                <label class="btn_primary_call">
                                                    <input type="submit" class="order_call" value="ZAMÓW ROZMOWĘ">
                                                    </form>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <a class="button_overlay" onclick="openNav()"><img src="./icons/icon_01.png"
                                        class="icon_phone" alt="" />ZAMÓW TELEFONICZNIE</a>
                                <a class="button_overlay" onclick="openNavs()"><span
                                        class="material-symbols-outlined">mail</span>ZAPYTAJ O PRODUKT</a>
                                <div id="myNavs" class="overlay">
                                    <div class="overlay-content">
                                        <a href="javascript:void(0)" class="closebtn" onclick="closeNavs()">&times;</a>
                                        <img src="./photos/banner-big-3-pl.jpg" alt="">
                                        <div class="column_product">
                                            <div class="productIconTitle">
                                                <div class="icon_phone_span">
                                                    <span class="icon-inside material-symbols-outlined">mail</span>
                                                </div>
                                                <div class="title_text">
                                                    ZAMÓWIENIA E-MAIL
                                                    <p>Zapytaj naszego konsultanta o szczegóły dotyczące produktu
                                                        lub złóż zamowienie przez e-mail.</p>
                                                </div>
                                            </div>
                                            <div class="productInputNumber">
                                                <form method="post" action="email.php" autocomplete="off">
                                                    <input type="email" name="email" class="value_number" maxlength="50"
                                                        placeholder="Wpisz swój adres e-mail" required>
                                            </div>
                                            <textarea name="desc" class="system_textarea" placeholder="Wpisz wiadomość"
                                                required></textarea>
                                            <label class="checkbox-button">
                                                <input type="checkbox" class="checkbox-button__input" class="choice1-1"
                                                    name="choice1" required>
                                                <span class="checkbox-button__control"></span>
                                                <span class="checkbox-button__label">Wyrażam zgodę na otrzymywanie drogą
                                                    elektroniczną
                                                    na wskazany przeze mnie numer telefonu informacji dotyczących
                                                    świadczonych przez Administratora.
                                                    Zgoda może zostać cofnięta w każdym czasie.*</span>
                                            </label>

                                            <div class="product_footer">
                                                <label class="btn_primary_call">
                                                    <input type="submit" class="order_call" value="POPROŚ O KONTAKT">
                                                    </form>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                        </div>

                    </div>
                </div>

                <!--<div class="gallleryFeaturesFullWrapper">

                    <div class="galleryFeatures">
                        <div class="galleryFeaturesFullItem">
                            <img src="./photos/fotos-19.jpg" alt="" />
                        </div>
                        <div class="galleryFeaturesFullItem__content">
                            SZYBKA WYSYŁKA
                        </div>
                    </div>

                    <div class="galleryFeatures">
                        <div class="galleryFeaturesFullItem">
                            <img src="./photos/fotos-21.jpg" alt="" />
                        </div>
                        <div class="galleryFeaturesFullItem__content">
                            SZEROKI ASORTYMENT
                        </div>
                    </div>

                    <div class="galleryFeatures">
                        <div class="galleryFeaturesFullItem">
                            <img src="./photos/fotos-25.jpg" alt="" />
                        </div>
                        <div class="galleryFeaturesFullItem__content">
                            BEZPIECZNE ZWROTY
                        </div>
                    </div>

                    <div class="galleryFeatures">
                        <div class="galleryFeaturesFullItem">
                            <img src="./photos/fotos-26.jpg" alt="" />
                        </div>
                        <div class="galleryFeaturesFullItem__content">
                            NAJLEPSZE CENY
                        </div>
                    </div>

                    <div class="galleryFeatures">
                        <div class="galleryFeaturesFullItem">
                            <img src="./photos/fotos-27.jpg" alt="" />
                        </div>
                        <div class="galleryFeaturesFullItem__content">
                            DOGODNE FORMY PŁATNOŚCI
                        </div>
                    </div>
                </div>-->

                <div class="three-button">
                    <form action="#section1" class="forms"><button class="button button1">OPIS PRODUKTU</button></form>
                    <!--<form action="#section2" class="forms"><button class="button button2">SZCZEGÓŁY</button></form>
                    <form action="#section3" class="forms"><button class="button button3">OPINIE</button></form>
                    <form action="#section4" class="forms"><button class="button button4">PLIKI DO POBRANIA</button>-->
                    </form>
                    <form action="#section5" class="forms"><button class="button button5">DANE TECHNICZNE</button>
                    </form>
                    <!--<form action="#section6" class="forms"><button class="button button6">POWIĄZANE</button></form>-->
                    <form action="#section7"><button class="button button7">INNE Z KATEGORII</button></form>
                </div>
            </section>

            <section>
                <div class="product-description" id="section1">
                    <div class="section_header_hide">
                        <h2>Opis produktu</h2>
                    </div>

                    <!--<img src="./photos/baner_gowny_simon10.jpg" alt="Główny baner" />-->

                    <p class="main_product_description">Simon 10 to ekonomiczna seria modułowa dla inwestycji, na których zróżnicowana kolorystyka nie
                        jest
                        wymagana.
                        Dwa podstawowe kolory: biały i kremowy oraz pełen przekrój asortymentu łączników i gniazd
                        pozwolą na
                        kompleksowe wyposażenie każdego mieszkania lub biura.
                        Elementem wyróżniającym tę serię jest nieprzewodzący prądu mostek wykonany z wysokiej jakości
                        tworzywa
                        zapewniającego trwałość i elastyczność
                        oraz bezpieczeństwo podczas prac montażowych</p>
                                            
                    <p class="title-paragraph">GNIAZDKA I ŁĄCZNIKI KONTAKT SIMON 10</p>
                    <p>Dron Mavic Air 2 oferuje wyższy poziom mocy i mobilności – tak zaawansowane funkcje jeszcze nigdy
                        nie
                        były dostępne w tak kompaktowej konstrukcji.
                        Inteligentne funkcje nagrywania i znakomita jakość obrazu sprawiają, że teraz każdy może tworzyć
                        podniebne arcydzieła.
                        A ponieważ lot przebiega bezpiecznie i sprawnie, masz jeszcze większe możliwości
                        i możesz w pełni oddać się realizacji najśmielszych pomysłów. </p>

                    <p>Czterostopniowe zatrzaski na każdej ramce zapewniają równe przyleganie ramek nawet do nierównych
                        ścian.
                        Również zamontowanie w puszkach do ścian karton-gips nie powoduje odstawiania osprzętu Simon 10
                        od ściany. Każdy moduł łącznika / przycisku przygotowany jest do wersji IP44,
                        wystarczy dołożyć uszczelkę. </p>

                    <p class="title-paragraph">MOŻLIWOŚĆ ZDJĘCIA RAMKI BEZ DEMONTAŻU POKRYWY LUB KLAWISZA</p>

                    <p> Seria Simon 10 dedykowana jest inwestycjom, gdzie wytworny design i różnorodność w kolorach
                        osprzętu
                        nie
                        jest najważniejsza.
                        W tej linii produktów liczy się przede wszystkim ekonomiczność, funkcjonalność oraz trwałość.
                        Uniwersalne kolory: biały i kremowy pozwolą na wykorzystanie łączników oraz gniazd w każdym
                        mieszkaniu
                        czy też przestrzeni biurowej.</p>
                </div>

                <div class="image-description">
                    <img src="photos/MaskGroup45.png" alt="Zdjęcie" />
                    <div class="image-button">
                        <img src="icons_svg/Icon-play.svg" alt="Przycisk" />
                    </div>
                </div>
            </section>

            <!--<section>
                <div class="section_header_container" id="section2">
                    <div class="section_header_hide">
                        <h2>Szczegóły</h2>
                        <a class="hide" onClick="op('#poka4');"><span
                                class="arrow-down material-symbols-outlined">keyboard_arrow_down</span></a>
                    </div>
                    <div id="poka4">
                        <p>Łącznik jednobiegunowy (moduł) 10AX, 250V~, zaciski śrubowe</p>
                    </div>
                </div>
            </section>-->

            <!--<section>
                <div class="section_header_opinion" id="section3">
                    <div class="section_header_hide">
                        <h2>Opinie</h2>
                        <a class="hide" onClick="op('#poka-all');"><span
                                class="arrow-down material-symbols-outlined">keyboard_arrow_down</span></a>
                    </div>
                    <div id="poka-all">
                        <div id="poka5">
                            <p>Miałaś juz kontakt z naszym produktem? Zostaw nam swoja opinię <br />
                                - to dla Ciebie staramy sie byc najlepsi, a Twoje zdanie bardzo nam w tym pomoże!</p>
                            <div class="five_icon_star">
                                <div class="star d-inline" id="0"><i class="fas fa-star stars"></i></div>
                                <div class="star d-inline" id="1"><i class="fas fa-star stars"></i></div>
                                <div class="star d-inline" id="2"><i class="fas fa-star stars"></i></div>
                                <div class="star d-inline" id="3"><i class="fas fa-star stars"></i></div>
                                <div class="star d-inline" id="4"><i class="fas fa-star stars"></i></div>
                            </div>
                        </div>
                        <div class="systemForm_text_input">
                            <form class="form" action="action.php" method="POST" autocomplete="off">
                                <p>Nazwa użytkownika*</p>
                                <div class="icon_input">
                                    <div class="icon-register">
                                        <i class="fa fa-user icon"></i>
                                    </div>
                                    <input type="text" class="user-login" name="username" maxlength="50"
                                        placeholder="Wpisz nazwę użytkownika" required>
                                </div>

                                <p>Adres e-mail*</p>
                                <div class="icon_input">
                                    <div class="icon-register">
                                        <i class="fa fa-envelope icon"></i>
                                    </div>
                                    <input type="email" class="email-login" name="email" maxlength="50"
                                        placeholder="Wpisz adres e-mail" required>
                                </div>

                                <p>Komentarz*</p>
                                <div class="icon_input">
                                    <div class="icon-comment">
                                        <i class="fa-solid fa-comment"></i>
                                    </div>
                                    <textarea name="comment" class="form_textarea" placeholder="Napisz komentarz"
                                        required rows="2" cols="1"></textarea>
                                </div>

                                <button name="submit" class="button send_opinion">DODAJ OPINIĘ</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>-->

            <!--<section>
                <div class="section_header_download" id="section4">
                    <div class="section_header_down_hide">
                        <h2>Pliki do pobrania</h2>
                        <a class="hide" onClick="op('#poka6');">
                            <span class="arrow-down material-symbols-outlined">keyboard_arrow_down</span></a>
                    </div>
                </div>

                <div id="poka6">
                    <div class="fileAddItem">
                        <div class="fileAddItem_general">
                            <div class="fileAddItem_left">
                                <div class="fileAddItem_icon">
                                    <i class="fa-solid fa-file-arrow-down"></i>
                                </div>
                                <div class="fileAddItem_name">
                                    <a href="./testy/testowyplik.pdf" download>
                                        test
                                    </a>
                                </div>
                            </div>

                            <div class="fileAddItem_right">
                                <div class="fileAddItem_general_right">
                                    <div class="fileAddItem-name">
                                        Format: pdf
                                    </div>
                                    <div class="buttondownload">
                                        <a href="./testy/testowyplik.pdf" class="button download" download><i class="fa fa-download"></i> POBIERZ</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="fileAddItem_general">
                            <div class="fileAddItem_left">
                                <div class="fileAddItem_icon">
                                    <i class="fa-solid fa-file-arrow-down"></i>
                                </div>
                                <div class="fileAddItem_name">
                                    <a href="./testy/przykladowyplik.pdf" download>
                                        testowy pdf
                                    </a>
                                </div>
                            </div>

                            <div class="fileAddItem_right">
                                <div class="fileAddItem_general_right">
                                    <div class="fileAddItem-name">
                                        Format: pdf
                                    </div>
                                    <div class="buttondownload">
                                        <a href="./testy/przykladowyplik.pdf" class="button download"
                                            download><i class="fa fa-download"></i> POBIERZ</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="fileAddItem_general">
                            <div class="fileAddItem_left">
                                <div class="fileAddItem_icon">
                                    <i class="fa-solid fa-file-arrow-down"></i>
                                </div>
                                <div class="fileAddItem_name">
                                    <a href="./testy/przykladowypdf.pdf" download>
                                        Plik-testowy.pdf
                                    </a>
                                </div>
                            </div>

                            <div class="fileAddItem_right">
                                <div class="fileAddItem_general_right">
                                    <div class="fileAddItem-name">
                                        Format: pdf
                                    </div>
                                    <div class="buttondownload">
                                        <a href="./testy/przykladowypdf.pdf" class="button download"
                                            download><i class="fa fa-download"></i> POBIERZ</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>-->

            <section>
            <br /> <br />
                <div class="basic-information" id="section5">
                    <div class="basic_hide">
                        <h2>Dane podstawowe</h2>
                        <a class="hide" onClick="op('#poka7');">
                            <span class="arrow-down material-symbols-outlined">keyboard_arrow_down</span></a>
                    </div>
                </div>

                <div id="poka7">
                    <div class="general-table">
                        <table>
                            <!--<tr>
                                <th class="left-header-table">PARAMETR</th>
                                <th class="right-header-table">WARTOŚĆ</th>
                            </tr>-->
                            <tr>
                                <td class="right-text-table">Seria</td>
                                <td class="left-text-table">Simon 10</td>
                            </tr>
                            <tr>
                                <td class="right-text-table">Nazwa produktu/Rodzaj</td>
                                <td class="left-text-table">łącznik jednobiegunowy</td>
                            </tr>
                            <tr>
                                <td class="right-text-table">Typ produktu</td>
                                <td class="left-text-table">moduł</td>
                            </tr>
                            <tr>
                                <td class="right-text-table">Prąd znamionowy świetlówkowy</td>
                                <td class="left-text-table">10 AX</td>
                            </tr>
                            <tr>
                                <td class="right-text-table">Napięcie znamionowe</td>
                                <td class="left-text-table">250V</td>
                            </tr>
                            <tr>
                                <td class="right-text-table">Rodzaj podłączenia/Typ zacisku</td>
                                <td class="left-text-table">zaciski śrubowe</td>
                            </tr>
                            <tr>
                                <td class="right-text-table">Stopień ochrony IP</td>
                                <td class="left-text-table">IP20/IP44</td>
                            </tr>
                            <tr>
                                <td class="right-text-table">Uwagi</td>
                                <td class="left-text-table">Do uzyskania klasy bryzgoszczelności IP44 zastosować
                                    uszczelkę
                                    ramki
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>

            <!--<section>
                <div class="section_related" id="section6">
                    <div class="section_rel_hide">
                        <h2>Powiązane</h2>
                        <a class="hide" onClick="op('#poka8');">
                            <span class="arrow-down material-symbols-outlined">keyboard_arrow_down</span></a>
                    </div>
                </div>

                <div id="poka8">
                    <div class="choice-products">
                        <div class="lights-row">
                            <div class="light">
                                <img src="photos/img_06.jpg" alt="Żarówka">
                                <div class="text-under-lights">
                                    <div class="productTileParam">
                                        <span class="productParam">Philips</span>
                                        <b>Łącznik jednobiegunowy (moduł) 10AX - kontener 2</b>
                                    </div>
                                    <div class="product_information">
                                        <p>Kod produktu: CW1.01/11</p>
                                        <div class="productParam-icon">
                                            <span class="available material-symbols-outlined">event_available</span>
                                            <span>1 szt.</span>
                                        </div>
                                        <div class="productParam-icon">
                                            <span class="material-symbols-outlined">local_shipping</span>
                                            <span>24H</span>
                                        </div>
                                        <div class="product-pricen">
                                            <span>Cena netto: 190,24zł</span>
                                        </div>
                                        <div class="product-pricen">
                                            <span>Twoja cena netto: <b>189,43 zł</b></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tile-product">
                                    <div class="number">
                                        <button class="minus">-</button>
                                        <label>
                                            <input type="number" value="1" id="numberCol" disabled />
                                        </label>
                                        <button class="plus">+</button>
                                    </div>
                                    <div class="shoppingcart"><button class="button9"><img src="icons/Group807.png"
                                                alt="Koszyk" /></button></div>
                                </div>
                            </div>

                            <div class="light">
                                <img src="photos/img_06.jpg" alt="Żarówka">
                                <div class="text-under-lights">
                                    <div class="productTileParam">
                                        <span class="productParam">Philips</span>
                                        <b>Łącznik jednobiegunowy (moduł) 10AX 13</b>
                                    </div>
                                    <div class="product_information">
                                        <p>Kod produktu: cross1</p>
                                        <div class="productParam-icon">
                                            <span class="available material-symbols-outlined">event_available</span>
                                            <span>1 szt.</span>
                                        </div>
                                        <div class="productParam-icon">
                                            <span class="material-symbols-outlined">local_shipping</span>
                                            <span>24H</span>
                                        </div>
                                        <div class="product-pricen">
                                            <span>Cena netto: 367,01 zł</span>
                                        </div>
                                        <div class="product-pricen">
                                            <span>Twoja cena netto: <b>365,85 zł</b></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tile-product">
                                    <div class="number">
                                        <button class="minus">-</button>
                                        <label>
                                            <input type="number" value="1" disabled />
                                        </label>
                                        <button class="plus">+</button>
                                    </div>
                                    <div class="shoppingcart"><button class="button9"><img src="icons/Group807.png"
                                                alt="Koszyk" /></button></div>
                                </div>
                            </div>

                            <div class="light">
                                <img src="photos/img_06.jpg" alt="Żarówka">
                                <div class="text-under-lights">
                                    <div class="productTileParam">
                                        <span class="productParam">Philips</span>
                                        <b>Łącznik jednobiegunowy (moduł) 10AX 4</b>
                                    </div>
                                    <div class="product_information">
                                        <p>Kod produktu: CW1.02/11</p>
                                        <div class="productParam-icon">
                                            <span class="available material-symbols-outlined">event_available</span>
                                            <span>1 szt.</span>
                                        </div>
                                        <div class="productParam-icon">
                                            <span class="material-symbols-outlined">local_shipping</span>
                                            <span>24H</span>
                                        </div>
                                        <div class="product-pricen">
                                            <span>Cena netto: 223,12 zł</span>
                                        </div>
                                        <div class="product-pricen">
                                            <span>Twoja cena netto: <b>221,67 zł</b></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tile-product">
                                    <div class="number">
                                        <button class="minus">-</button>
                                        <label>
                                            <input type="number" value="1" disabled />
                                        </label>
                                        <button class="plus">+</button>
                                    </div>
                                    <div class="shoppingcart"><button class="button9"><img src="icons/Group807.png"
                                                alt="Koszyk" /></button></div>
                                </div>
                            </div>

                            <div class="light">
                                <img src="photos/img_06.jpg" alt="Żarówka">
                                <div class="text-under-lights">
                                    <div class="productTileParam">
                                        <span class="productParam">Philips</span>
                                        <b>Łącznik jednobiegunowy (moduł) 10AX 5</b>
                                    </div>
                                    <div class="product_information">
                                        <p>Kod produktu: CW1.03/11</p>
                                        <div class="productParam-icon">
                                            <span class="available material-symbols-outlined">event_available</span>
                                            <span>1 szt.</span>
                                        </div>
                                        <div class="productParam-icon">
                                            <span class="material-symbols-outlined">local_shipping</span>
                                            <span>24H</span>
                                        </div>
                                        <div class="product-pricen">
                                            <span>Cena netto: 367,01 zł</span>
                                        </div>
                                        <div class="product-pricen">
                                            <span>Twoja cena netto: <b>365,85 zł</b></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tile-product">
                                    <div class="number">
                                        <button class="minus">-</button>
                                        <label>
                                            <input type="number" value="1" disabled />
                                        </label>
                                        <button class="plus">+</button>
                                    </div>
                                    <div class="shoppingcart"><button class="button9"><img src="icons/Group807.png"
                                                alt="Koszyk" /></button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>-->

            <section>
                <div class="section_category" id="section7">
                    <div class="section_cate_hide">
                        <h2>Inne z kategorii</h2>
                        <a class="hide" onClick="op('#poka9');">
                            <span class="arrow-down material-symbols-outlined">keyboard_arrow_down</span></a>
                    </div>
                </div>

                <div id="poka9">
                    <div class="choice-products">
                        <div class="lights-row">
                            <div class="light">
                                <img src="photos/img_06.jpg" alt="Żarówka">
                                <div class="text-under-lights">
                                    <div class="productTileParam">
                                        <!--<span class="productParam">Philips</span>-->
                                        <b>Łącznik jednobiegunowy (moduł) 10AX - kontener 2</b>
                                    </div>
                                    <div class="product_information">
                                        <p>Kod produktu: CW1.01/11</p>
                                        <!--<div class="productParam-icon">
                                            <span class="available material-symbols-outlined">event_available</span>
                                            <span>1 szt.</span>
                                        </div>
                                        <div class="productParam-icon">
                                            <span class="material-symbols-outlined">local_shipping</span>
                                            <span>24H</span>
                                        </div>-->
                                        <div class="product-pricen">
                                            <!--<span> Cena netto: 190,24zł</span>--><s>656,85 zł</s>
                                        </div>
                                        <div class="product-pricen">
                                            <!--<span>Twoja cena netto: <b>189,43 zł</b></span>--><b>442,85 zł</b>
                                        </div>
                                    </div>
                                </div>
                                <div class="tile-product">
                                    <div class="number">
                                        <button class="minus">-</button>
                                        <label>
                                            <input type="number" value="1" disabled />
                                        </label>
                                        <button class="plus">+</button>
                                    </div>
                                    <div class="shoppingcart"><button class="button9"><img src="icons/Group807.png"
                                                alt="Koszyk" /></button></div>
                                </div>
                            </div>
                            <div class="light">
                                <img src="photos/img_06.jpg" alt="Żarówka">
                                <div class="text-under-lights">
                                    <div class="productTileParam">
                                        <!--<span class="productParam">Philips</span>-->
                                        <b>Łącznik jednobiegunowy (moduł) 10AX 4</b>
                                    </div>
                                    <div class="product_information">
                                        <p>Kod produktu: CW1.01/11</p>
                                        <!--<div class="productParam-icon">
                                            <span class="unavailable material-symbols-outlined">event_busy</span>
                                            <span>0 szt.</span>
                                        </div>
                                        <div class="productParam-icon">
                                            <span class="material-symbols-outlined">local_shipping</span>
                                            <span>24H</span>
                                        </div>-->
                                        <div class="product-pricen">
                                            <!--<span>Cena netto: 186,99 zł</span>--><s>656,85 zł</s>
                                        </div>
                                        <div class="product-pricen">
                                            <!--<span>Twoja cena netto: <b>179,89 zł</b></span>--><b>442,85 zł</b>
                                        </div>
                                    </div>
                                </div>
                                <div class="tile-product">
                                    <div class="number">
                                        <button class="minus">-</button>
                                        <label>
                                            <input type="number" value="1" disabled />
                                        </label>
                                        <button class="plus">+</button>
                                    </div>
                                    <div class="shoppingcart"><button class="button9"><img src="icons/Group807.png"
                                                alt="Koszyk" /></button></div>
                                </div>
                            </div>
                            <div class="light">
                                <img src="photos/img_06.jpg" alt="Żarówka">
                                <div class="text-under-lights">
                                    <div class="productTileParam">
                                        <!--<span class="productParam">Philips</span>-->
                                        <b>Łącznik jednobiegunowy (moduł) 10AX 5</b>
                                    </div>
                                    <div class="product_information">
                                        <p>Kod produktu: CW1.01/11</p>
                                        <!--<div class="productParam-icon">
                                            <span class="available material-symbols-outlined">event_available</span>
                                            <span>1 szt.</span>
                                        </div>
                                        <div class="productParam-icon">
                                            <span class="material-symbols-outlined">local_shipping</span>
                                            <span>24H</span>
                                        </div>-->
                                        <div class="product-pricen">
                                            <!--<span>Cena netto: 370,21 zł</span>--><s>656,85 zł</s>
                                        </div>
                                        <div class="product-pricen">
                                            <!--<span>Twoja cena netto: <b>365,85 zł</b></span>--><b>442,85 zł</b>
                                        </div>
                                    </div>
                                </div>
                                <div class="tile-product">
                                    <div class="number">
                                        <button class="minus">-</button>
                                        <label>
                                            <input type="number" value="1" disabled />
                                        </label>
                                        <button class="plus">+</button>
                                    </div>
                                    <div class="shoppingcart"><button class="button9"><img src="icons/Group807.png"
                                                alt="Koszyk" /></button></div>
                                </div>
                            </div>
                            <div class="light">
                                <img src="photos/img_06.jpg" alt="Żarówka">
                                <div class="text-under-lights">
                                    <div class="productTileParam">
                                        <!--<span class="productParam">Philips</span>-->
                                        <b>Łącznik jednobiegunowy (moduł) 10AX 6</b>
                                    </div>
                                    <div class="product_information">
                                        <p>Kod produktu: CW1.01/11</p>
                                        <!--<div class="productParam-icon">
                                            <span class="available material-symbols-outlined">event_available</span>
                                            <span>1 szt.</span>
                                        </div>
                                        <div class="productParam-icon">
                                            <span class="material-symbols-outlined">local_shipping</span>
                                            <span>24H</span>
                                        </div>-->
                                        <div class="product-pricen">
                                            <!--<span>Cena netto: 278,76 zł</span>--><s>656,85 zł</s>
                                        </div>
                                        <div class="product-pricen">
                                            <!--<span>Twoja cena netto: <b>276,42 zł</b></span>--><b>442,85 zł</b>
                                        </div>
                                    </div>
                                </div>
                                <div class="tile-product">
                                    <div class="number">
                                        <button class="minus">-</button>
                                        <label>
                                            <input type="number" value="1" disabled />
                                        </label>
                                        <button class="plus">+</button>
                                    </div>
                                    <div class="shoppingcart"><button class="button9"><img src="icons/Group807.png"
                                                alt="Koszyk" /></button></div>
                                </div>
                            </div>
                            <div class="light">
                                <img src="photos/img_06.jpg" alt="Żarówka">
                                <div class="text-under-lights">
                                    <div class="productTileParam">
                                        <!--<span class="productParam">Philips</span>-->
                                        <b>Łącznik jednobiegunowy (moduł) 10AX 7</b>
                                    </div>
                                    <div class="product_information">
                                        <p>Kod produktu: CW1.01/11</p>
                                        <!--<div class="productParam-icon">
                                            <span class="unavailable material-symbols-outlined">event_busy</span>
                                            <span>0 szt.</span>
                                        </div>
                                        <div class="productParam-icon">
                                            <span class="material-symbols-outlined">local_shipping</span>
                                            <span>24H</span>
                                        </div>-->
                                        <div class="product-pricen">
                                            <!--<span>Cena netto: 221,34 zł</span>--><s>656,85 zł</s>
                                        </div>
                                        <div class="product-pricen">
                                            <!--<span>Twoja cena netto: <b>220,43 zł</b></span>--><b>442,85 zł</b>
                                        </div>
                                    </div>
                                </div>
                                <div class="tile-product">
                                    <div class="number">
                                        <button class="minus">-</button>
                                        <label>
                                            <input type="number" value="1" disabled />
                                        </label>
                                        <button class="plus">+</button>
                                    </div>
                                    <div class="shoppingcart"><button class="button9"><img src="icons/Group807.png"
                                                alt="Koszyk" /></button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--<section>
                <div class="newsletter">
                    <img src="./photos/banner-big-8-pl.jpg" alt="banner" class="block-first"/> 
                    <img src="./photos/banner-small-8-pl.jpg" alt="banner-2" class="none"/>

                    <div class="newsletter_container">
                        <div class="icon_text_newsletter">
                            <div class="icon_newsletter">
                                <i class="fa-solid fa-envelope-open-text"></i>
                            </div>
                        </div>

                        <div class="newsletterBar_header">
                            <span>Zapisz się do newslettera</span>
                            <div class="newsletterBar_desc">
                                <span>Zapisz się do newslettera na naszym sklepie internetowym
                                    i odbierz rabat w wysokości <b>20 zł na pierwsze zamówienie</b></span>
                            </div>
                        </div>

                        <a href="newsletter.php" class="sign-up button10"></i><span>Przejdź dalej </span><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </section>-->
            </main>

            <footer>
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
                        <div class="hide-info">
                            <h3>INFORMACJE</h3>
                            <a class="hide" onClick="op('#poka4');"><span
                                    class="arrow-down material-symbols-outlined">keyboard_arrow_down</span></a>
                        </div>
                        <ul id="poka4">
                            <li><a href="#">Informacje o sklepie</a></li>
                            <li><a href="#">Porady</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Galeria inspiracji</a></li>
                            <li><a href="#">Kontakt</a></li>
                            <li><a href="#">Informacje o sklepie</a></li>
                        </ul>
                    </div>
                    <!--<div class="footer-information">
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

                            <a href="formul_kontakt.php" class="formularz">FORMULARZ KONTAKTOWY</a>
                        </div>
                    </div>-->
                </div>

            <!--<section>
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
                            <a href="#" target="_blank">
                                <i class="fa-brands fa-facebook"></i>
                            </a>

                            <a href="#" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>

                            <a href="#" target="_blank">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>-->
        <div class="foot_info">
            <div>Copyright 2022. Wszystkie prawa zastrzeżone</div>
            <div>Agencja Interaktywna [ti] Powered By 2ClickShop</div>
        </div>
        </footer>
    </div>
    <script src="./scriptsJS/third-index.js"></script>
</body>

</html>