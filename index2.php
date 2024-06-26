<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lista produktów">
    <title>Lista produktów</title>
    <link rel="stylesheet" type="text/css" href="style2_php.css" as="style">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,700,0,0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.95.3/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/bootstrap-table.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                            <div class="search-menu">
                                <form class="searchTop">
                                    <input type="text" class="searchTop__textfield" id="myInput"
                                        onkeyup="searchFunction()" placeholder="Wpisz nazwę produktu" autocomplete="off">
                                    <button type="submit" class="searchTop__submit"
                                        aria-label="Przycisk do wyszukiwania frazesów"><i
                                            class="fa fa-search"></i></button>
                                </form>
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
                                        <ul class="level1" id="search_scroll_menu">

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
                                <div class="dropdown">
                                <div class="dropdown_flex">
                                    <a href="login.php">
                                        <img src="icons/icon_03.png" alt="Telefon - Moje Konto" />
                                        <?php if($_SESSION['first_name'] == true){ 
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
                                            <p class="number-orders">342</p>
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
                        <a class="ex1" href="index2.php" target="_blank"><!--<img src="photos/category-1.png" alt="">-->ŹRÓDŁA
                            ŚWIATŁA</a>
                    </div>

                    <div class="headers">
                        <a href="#" target="_blank"><!--<img src="photos/category-5.png" alt="">-->OŚWIETLENIE
                            WEWNĘTRZNE</a>
                    </div>

                    <div class="headers">
                        <a href="#" target="_blank"><!--<img src="photos/category-6.png" alt="">-->GNIAZDKA, WYŁACZNIKI</a>
                    </div>

                    <div class="headers">
                        <a href="#" target="_blank"><!--<img src="photos/category-7.png" alt="">-->AUTOMATYKA,
                            STEROWANIE</a>
                    </div>

                    <div class="headers">
                        <a href="#" target="_blank"><!--<img src="photos/category-8.png" alt="">-->ROZDZIELANIE I
                            APARATURA</a>
                    </div>

                    <div class="headers">
                        <a href="#" target="_blank"><!--<img src="photos/category-10.png" alt="">-->MATERIALY
                            INSTALACYJNE</a>
                    </div>
                </div>
            </div>

        </header>
        <main>
            <div class="third-header">
                <div class="header-information"><a href="index.php" target="_blank">Strona główna</a></div>
                <p>-</p>
                <div class="header-information">Kategoria</div>
                <p>-</p>
                <div class="header-information">Kategoria</div>
            </div>

            <div class="main-page">

                <div class="left-main-menu">

                    <div class="first-left-menu">
                        <h3>GNIAZDKA, WYŁĄCZNIKI</h3>

                        <div class="text-menu">
                            <ul class="menu_container">
                                <button class="collapsible">SCHNEIDER ELECTRIC</button>
                                <div class="content">
                                    <p>SPARK</p>
                                    <p>PHANTOM</p>
                                    <p>INSPIRE</p>
                                </div>

                                <button class="collapsible">KONTAKT SIMON</button>
                                <div class="content">
                                    <p>KATEGORIA 1</p>
                                    <p>KATEGORIA 2</p>
                                    <p>KATEGORIA 3</p>
                                </div>

                                <button class="collapsible">BERKER</button>
                                <div class="content">
                                    <p>KATEGORIA 1</p>
                                    <p>KATEGORIA 2</p>
                                    <p>KATEGORIA 3</p>
                                </div>

                                <button class="collapsible">KARLIK</button>
                                <div class="content">
                                    <p>KATEGORIA 1</p>
                                    <p>KATEGORIA 2</p>
                                    <p>KATEGORIA 3</p>
                                </div>

                                <button class="collapsible">HAGER</button>
                                <div class="content">
                                    <p>KATEGORIA 1</p>
                                    <p>KATEGORIA 2</p>
                                    <p>KATEGORIA 3</p>
                                </div>

                                <div class="li-without-image-plus">
                                    <li>OSPEL</li>
                                </div>

                                <div class="li-without-image-plus">
                                    <li>KOS</li>
                                </div>

                                <div class="li-without-image-plus">
                                    <li>VIPLAST</li>
                                </div>
                            </ul>
                        </div>
                    </div>

                    <div class="filters">
                        <h3>FILTRY</h3>

                        <div class="option-filter">
                            <ul>
                                <div class="li-filter" id="text">
                                    <li class="removes">Filtr 1 (parametr)</li>
                                    <button class="btn" onclick="removeFilter(this)" aria-label="usuń filtr 1"><i
                                            class="fa-solid fa-xmark"></i></button>
                                </div>

                                <div class="li-filter" id="text2">
                                    <li class="removes">Filtr 2 (parametr)</li>
                                    <button class="btn" onclick="removeFilter(this)" aria-label="usuń filtr 2"><i
                                            class="fa-solid fa-xmark"></i></button>
                                </div>

                                <div class="li-filter" id="text3">
                                    <li class="removes">Filtr 3 (parametr)</li>
                                    <button class="btn" onclick="removeFilter(this)" aria-label="usuń filtr 3"><i
                                            class="fa-solid fa-xmark"></i></button>
                                </div>

                                <div class="li-filter" id="text4">
                                    <li class="removes">Filtr 4 (parametr)</li>
                                    <button class="btn" onclick="removeFilter(this)" aria-label="usuń filtr 3"><i
                                            class="fa-solid fa-xmark"></i></button>
                                </div>

                                <div class="li-filter" id="text5">
                                    <li class="removes">Filtr 5 (parametr)</li>
                                    <button class="btn" onclick="removeFilter(this)" aria-label="usuń filtr 3"><i
                                            class="fa-solid fa-xmark"></i></button>
                                </div>

                                <div class="li-filter" id="text6">
                                    <li class="removes">Filtr 6 (parametr)</li>
                                    <button class="btn" onclick="removeFilter(this)" aria-label="usuń filtr 3"><i
                                            class="fa-solid fa-xmark"></i></button>
                                </div>

                                <div class="li-filter" id="text7">
                                    <li class="removes">Filtr 7 (parametr)</li>
                                    <button class="btn" onclick="removeFilter(this)" aria-label="usuń filtr 3"><i
                                            class="fa-solid fa-xmark"></i></button>
                                </div>

                                <div class="li-filter" id="text8">
                                    <li class="removes">Filtr 8 (parametr)</li>
                                    <button class="btn" onclick="removeFilter(this)" aria-label="usuń filtr 3"><i
                                            class="fa-solid fa-xmark"></i></button>
                                </div>

                                <div class="li-filter" id="text9">
                                    <li class="removes">Filtr 9 (parametr)</li>
                                    <button class="btn" onclick="removeFilter(this)" aria-label="usuń filtr 3"><i
                                            class="fa-solid fa-xmark"></i></button>
                                </div>

                                <div class="li-filter" id="text10">
                                    <li class="removes">Filtr 10 (parametr)</li>
                                    <button class="btn" onclick="removeFilter(this)" aria-label="usuń filtr 3"><i
                                            class="fa-solid fa-xmark"></i></button>
                                </div>

                                <div class="li-filter" id="text11">
                                    <li class="removes">Filtr 11 (parametr)</li>
                                    <button class="btn" onclick="removeFilter(this)" aria-label="usuń filtr 3"><i
                                            class="fa-solid fa-xmark"></i></button>
                                </div>

                                <div class="li-filter" id="text12">
                                    <li class="removes">Filtr 12 (parametr)</li>
                                    <button class="btn" onclick="removeFilter(this)" aria-label="usuń filtr 3"><i
                                            class="fa-solid fa-xmark"></i></button>
                                </div>
                            </ul>
                        </div>
                    </div>

                    <div class="producer">
                        <h3>PRODUCENT</h3>

                        <div class="option-producer">
                            <ul>
                                <label class="checkbox-button">
                                    <input type="checkbox" id="myCheck" onclick="myFunction()"
                                        class="checkbox-button__input" class="choice1-1" name="choice1"
                                        value="Parametr1">
                                    <span class="checkbox-button__control"></span>
                                    <span class="checkbox-button__label">Parametr 1</span>
                                </label>
                                <label class="checkbox-button">
                                    <input type="checkbox" id="myCheck2" onclick="myFunction2()"
                                        class="checkbox-button__input" class="choice1-1" name="choice1"
                                        value="Parametr2">
                                    <span class="checkbox-button__control"></span>
                                    <span class="checkbox-button__label">Parametr 2</span>
                                </label>
                                <label class="checkbox-button">
                                    <input type="checkbox" id="myCheck3" onclick="myFunction3()"
                                        class="checkbox-button__input" class="choice1-1" name="choice1"
                                        value="Parametr3">
                                    <span class="checkbox-button__control"></span>
                                    <span class="checkbox-button__label">Parametr 3</span>
                                </label>
                                <label class="checkbox-button">
                                    <input type="checkbox" id="myCheck4" onclick="myFunction4()"
                                        class="checkbox-button__input" class="choice1-1" name="choice1"
                                        value="Parametr4">
                                    <span class="checkbox-button__control"></span>
                                    <span class="checkbox-button__label">Parametr 4</span>
                                </label>
                                <label class="checkbox-button">
                                    <input type="checkbox" id="myCheck5" onclick="myFunction5()"
                                        class="checkbox-button__input" class="choice1-1" name="choice1"
                                        value="Parametr5">
                                    <span class="checkbox-button__control"></span>
                                    <span class="checkbox-button__label">Parametr 5</span>
                                </label>
                                <label class="checkbox-button">
                                    <input type="checkbox" id="myCheck6" onclick="myFunction6()"
                                        class="checkbox-button__input" class="choice1-1" name="choice1"
                                        value="Parametr6">
                                    <span class="checkbox-button__control"></span>
                                    <span class="checkbox-button__label">Parametr 6</span>
                                </label>
                                <div id="poka_checkbox">
                                    <label class="checkbox-button">
                                        <input type="checkbox" id="myCheck7" onclick="myFunction7()"
                                            class="checkbox-button__input" class="choice1-1" name="choice1"
                                            value="Parametr7">
                                        <span class="checkbox-button__control"></span>
                                        <span class="checkbox-button__label">Parametr 7</span>
                                    </label>

                                    <label class="checkbox-button">
                                        <input type="checkbox" id="myCheck8" onclick="myFunction8()"
                                            class="checkbox-button__input" class="choice1-1" name="choice1"
                                            value="Parametr8">
                                        <span class="checkbox-button__control"></span>
                                        <span class="checkbox-button__label">Parametr 8</span>
                                    </label>

                                    <label class="checkbox-button">
                                        <input type="checkbox" id="myCheck9" onclick="myFunction9()"
                                            class="checkbox-button__input" class="choice1-1" name="choice1"
                                            value="Parametr9">
                                        <span class="checkbox-button__control"></span>
                                        <span class="checkbox-button__label">Parametr 9</span>
                                    </label>

                                    <label class="checkbox-button">
                                        <input type="checkbox" id="myCheck10" onclick="myFunction10()"
                                            class="checkbox-button__input" class="choice1-1" name="choice1"
                                            value="Parametr10">
                                        <span class="checkbox-button__control"></span>
                                        <span class="checkbox-button__label">Parametr 10</span>
                                    </label>

                                    <label class="checkbox-button">
                                        <input type="checkbox" id="myCheck11" onclick="myFunction11()"
                                            class="checkbox-button__input" class="choice1-1" name="choice1"
                                            value="Parametr11">
                                        <span class="checkbox-button__control"></span>
                                        <span class="checkbox-button__label">Parametr 11</span>
                                    </label>

                                    <label class="checkbox-button">
                                        <input type="checkbox" id="myCheck12" onclick="myFunction12()"
                                            class="checkbox-button__input" class="choice1-1" name="choice1"
                                            value="Parametr12">
                                        <span class="checkbox-button__control"></span>
                                        <span class="checkbox-button__label">Parametr 12</span>
                                    </label>

                                </div>
                            </ul>
                        </div>
                        <div class="text-expands">
                            <a onClick="op('#poka_checkbox');">Więcej (6)</a>
                        </div>
                    </div>

                    <div class="choose-colors">
                        <h3>KOLOR</h3>

                        <div class="different-color">
                        <label>
                                <input type="checkbox" class="box-light-green" />
                            </label>
                            <label>
                                <input type="checkbox" class="box-light-blue" />
                            </label>
                            <label>
                                <input type="checkbox" class="box-dark" />
                            </label>
                            <label>
                                <input type="checkbox" class="box-light-orange" />
                            </label>
                            <label>
                                <input type="checkbox" class="box-gray" />
                            </label>

                            <label>
                                <input type="checkbox" class="box-dark-blue" />
                            </label>

                            <label>
                                <input type="checkbox" class="box-brown" />
                            </label>
                            <label>
                                <input type="checkbox" class="box-blue" />
                            </label>
                            <label>
                                <input type="checkbox" class="box-light-red" />
                            </label>

                            <label>
                                <input type="checkbox" class="box-green" />
                            </label>

                            <label>
                                <input type="checkbox" class="box-red" />
                            </label>

                            <label>
                                <input type="checkbox" class="box-orange" />
                            </label>
                            <label>
                                <input type="checkbox" class="box-dark" />
                            </label>
                            <label>
                                <input type="checkbox" class="box-mud" />
                            </label>
                            <label>
                                <input type="checkbox" class="box-light-yellow" />
                            </label>
                        </div>
                    </div>
                    <div class="size-filter">
                        <h3>ROZMIAR</h3>

                        <div class="one-size">

                            <div class="size-65">
                                <p>5</p>
                            </div>
                            <div class="size-65">
                                <p>10</p>
                            </div>
                            <div class="size-65">
                                <p>20</p>
                            </div>
                            <div class="size-65">
                                <p>25</p>
                            </div>
                            <div class="size-65">
                                <p>30</p>
                            </div>

                            <div class="size-65">
                                <p>35</p>
                            </div>
                            <div class="size-65">
                                <p>40</p>
                            </div>
                            <div class="size-65">
                                <p>50</p>
                            </div>
                            <div class="size-65">
                                <p>60</p>
                            </div>
                            <div class="size-65">
                                <p>65</p>
                            </div>

                        </div>
                    </div>
                    <div class="range-filter">
                        <h3>FILTR - ZAKRES</h3>

                        <div class="range-size">
                            <input class="inpColumnSize" type="number" value placeholder="min. 5" min="5">
                            <span class="minus">&dash;</span>
                            <input class="inpColumnSize" type="number" value placeholder="max. 25" max="25">
                        </div>
                    </div>

                    <div class="price">
                        <h3>CENA</h3>
                        <div class="container">
                            <div class="slider-track"></div>
                            <label>
                                <input type="range" min="1" max="449" value="1" id="slider-1" oninput="slideOne()">
                                <input type="range" min="2" max="450" value="450" id="slider-2" oninput="slideTwo()">
                            </label>
                        </div>
                        <div class="values">
                            <span id="range1">
                                0
                            </span>
                            <span class="minus">&dash;</span>
                            <span id="range2">
                                100
                            </span>
                        </div>
                    </div>
                </div>

                <div class="main-content">
                    <div class="nav-h1">
                        <h1>Gniazdka, wyłączniki</h1>
                    </div>

                    <div class="under-h1-paragraph" id="poka">
                        <p>Gniazda elektryczne są niezbędnym elementem instalacji elektrycznej.
                            To dzięki nim użytkownicy mogą zasilić urządzenia i sprzęt.
                            Kontakty elektryczne są funkcjonalne i łatwe w montażu.
                            Posiadamy zarówno gniazda instalacyjne natynkowe, podtynkowe, nowoczesne gniazdka
                            teleinformatyczne,
                            RTV i SAT, jak i hermetyczne, sprawdzające się tam, gdzie istnieje ryzyko kontaktu z wodą –
                            łazienka, kuchnia…</p>
                    </div>

                    <div class="background-height">
                        <div class="text-expand">
                            <a href="#" onClick="op('#poka');">ROZWIŃ</a>
                        </div>
                    </div>

                    <div class="light-left-menu">
                        <div class="light-text-image-menu">
                            <img src="photos/Image149@2x.png" alt="Żarówka" />
                            <p>Schneider Electric</p>
                        </div>

                        <div class="light-text-image-menu">
                            <img src="photos/Image149@2x.png" alt="Żarówka" />
                            <p>Kontakt Simon</p>
                        </div>

                        <div class="light-text-image-menu">
                            <img src="photos/Image149@2x.png" alt="Żarówka" />
                            <p>Berker</p>
                        </div>

                        <div class="light-text-image-menu">
                            <img src="photos/Image149@2x.png" alt="Żarówka" />
                            <p>Karlik</p>
                        </div>

                        <div class="light-text-image-menu">
                            <img src="photos/Image149@2x.png" alt="Żarówka" />
                            <p>Hager</p>
                        </div>

                        <div class="light-text-image-menu">
                            <img src="photos/Image149@2x.png" alt="Żarówka" />
                            <p>Ospel</p>
                        </div>
                    </div>

                    <div class="image-container">
                        <img src="photos/banner-big-1-pl.png" alt="DJI" />

                        <div class="text-main-image">
                            <h4>DJI Mavic Air 2</h4>
                            <h3>Fly More Combo</h3>
                            <a href="#" class="button button1">ZOBACZ WIĘCEJ</a>
                        </div>
                    </div>

                    <div class="tile-page">
                        <div class="left-side">
                            <div class="view">
                                <p>Widok</p>
                            </div>

                            <div class="icon-menu">
                                <img src="icons/view1.png" alt="Ikona rozwijanego menu" />
                            </div>

                            <div class="icon-list">
                                <span class="material-symbols-outlined">
                                    format_list_bulleted
                                </span>
                            </div>
                        </div>
                        <div class="right-side">
                            <div class="sort">
                                <p>Sortuj</p>
                            </div>

                            <div class="sort-option">
                                <select class="options" id="mSelect">
                                    <option value="Default">Domyślne</option>
                                    <option value="LowToHigh">Cena rosnąco</option>
                                    <option value="HighToLow">Cena malejąco</option>
                                    <option>Nazwa rosnąco</option>
                                    <option>Nazwa malejąco</option>
                                </select>
                            </div>

                            <div class="quantity">
                                <p>Ilość</p>
                            </div>

                            <div class="sort-quantity">
                                <select class="quantities choice">
                                    <option>Brak</option>
                                    <option>1</option>
                                    <option>5</option>
                                    <option>7</option>
                                    <option selected>12</option>
                                </select>
                            </div>

                            <div class="pagination">
                                <a href="#" aria-label="strzałka lewa"><i class="fa-solid fa-angle-left"></i></a>
                                <a href="#" class="actives">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">...</a>
                                <a href="#">56</a>
                                <a href="#" aria-label="strzałka prawa"><i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="lights-row" id="product-list">
                        <div class="light" data-category="Parametr1">
                            <a href="index3.php" class="link-tag" aria-label="żarówka"></a>
                            <img src="photos/product-1.png" alt="Żarówka">
                            <!--<div class="text-offer">
                                <p class="two">PROMOCJA</p>
                            </div>-->
                            <div class="text-under-lights">
                                <a href="index3.php" class="link-tag" aria-label="tekst o żarówce"></a>
                                <!--<div class="little_title">Philips</div>-->
                                <h2>ŁĄCZNIK JEDNOBIEGUNOWY</h2>

                                <div class="product_information">
                                    <p>Kod produktu: CW1.01/11</p>
                                    <!--<div class="icon_info">
                                        <span class="available material-symbols-outlined">event_available</span>
                                        <span>1 szt.</span>
                                    </div>
                                    <div class="icon_info">
                                        <span class="material-symbols-outlined">local_shipping</span>
                                        <span>24H</span>
                                    </div>
                                    <div class="rabat">
                                        <span>Twój rabat: 32,56%</span>
                                    </div>-->
                                    <br />
                                    <!--<span>Cena netto: </span>-->
                                    <s>656,65 zł</s>
                                    <br />
                                    <!--<span>Twoja cena netto: </span>--><b>442,85 zł</b>
                                </div>
                            </div>
                            <div class="tile-product">
                                <div class="number">
                                    <button class="tile-minus">-</button>
                                    <label>
                                        <input type="number" value="1" disabled />
                                    </label>
                                    <button class="tile-plus">+</button>
                                </div>
                                <div class="shoppingcart"><img src="icons/Group807.png" alt="Koszyk" /></div>
                            </div>
                        </div>

                        <div class="light" data-category="Parametr2">
                            <a href="index3.php" class="link-tag" aria-label="żarówka"></a>
                            <img src="photos/img_06.jpg" alt="Żarówka">
                            <!--<div class="text-offer">
                                <p class="one">NOWOŚĆ</p>
                                <p class="two">PROMOCJA</p>
                            </div>-->
                              <div class="text-under-lights">
                                <a href="index3.php" class="link-tag" aria-label="tekst o żarówce"></a>
                                <!--<div class="little_title">Philips</div>-->
                                <h2>ŁĄCZNIK JEDNOBIEGUNOWY</h2>

                                <div class="product_information">
                                    <p>Kod produktu: CW1.01/11</p>
                                    <!--<div class="icon_info">
                                        <span class="available material-symbols-outlined">event_available</span>
                                        <span>1 szt.</span>
                                    </div>
                                    <div class="icon_info">
                                        <span class="material-symbols-outlined">local_shipping</span>
                                        <span>24H</span>
                                    </div>
                                    <div class="rabat">
                                        <span>Twój rabat: 32,56%</span>
                                    </div>-->
                                    <br />
                                    <!--<span>Cena netto: </span>-->
                                    <s>656,65 zł</s>
                                    <br />
                                    <!--<span>Twoja cena netto: </span>--><b>442,85 zł</b>
                                </div>
                            </div>
                            <div class="tile-product">
                                <div class="number">
                                    <button class="tile-minus">-</button>
                                    <label>
                                        <input type="number" value="1" disabled />
                                    </label>
                                    <button class="tile-plus">+</button>
                                </div>
                                <div class="shoppingcart"><img src="icons/Group807.png" alt="Koszyk" /></div>
                            </div>
                            </li>
                        </div>

                        <div class="light" data-category="Parametr3">
                            <a href="index3.php" class="link-tag" aria-label="żarówka"></a>
                            <img src="photos/img_06.jpg" alt="Żarówka">
                            <!--<div class="text-offer">
                                <p class="one">NOWOŚĆ</p>
                                <p class="two">PROMOCJA</p>
                            </div>-->
                            <div class="text-under-lights">
                                <a href="index3.php" class="link-tag" aria-label="tekst o żarówce"></a>
                                <!--<div class="little_title">Philips</div>-->
                                <h2>ŁĄCZNIK JEDNOBIEGUNOWY</h2>

                                <div class="product_information">
                                    <p>Kod produktu: CW1.01/11</p>
                                    <!--<div class="icon_info">
                                        <span class="unavailable material-symbols-outlined">event_busy</span>
                                        <span>0 szt.</span>
                                    </div>

                                    <div class="rabat">
                                        <span>Twój rabat: 32,56%</span>
                                    </div>-->
                                    <br />
                                    <!--<span>Cena netto: </span>-->
                                    <s>656,65 zł</s>
                                    <br />
                                    <!--<span>Twoja cena netto: </span>--><b>442,85 zł</b>
                                </div>
                            </div>
                            <div class="tile-product">
                                <div class="number">
                                    <button class="tile-minus">-</button>
                                    <label>
                                        <input type="number" value="1" disabled />
                                    </label>
                                    <button class="tile-plus">+</button>
                                </div>
                                <div class="shoppingcart"><img src="icons/Group807.png" alt="Koszyk" /></div>
                            </div>
                        </div>

                        <div class="light" data-category="Parametr4">
                            <a href="index3.php" class="link-tag" aria-label="żarówka"></a>
                            <img src="photos/img_06.jpg" alt="Żarówka">
                            <!--<div class="text-offer">
                                <p class="three">POLECAMY</p>
                            </div>-->
                            <div class="text-under-lights">
                                <a href="index3.php" class="link-tag" aria-label="tekst o żarówce"></a>
                                <!--<div class="little_title">Philips</div>-->
                                <h2>ŁĄCZNIK JEDNOBIEGUNOWY</h2>

                                <div class="product_information">
                                    <p>Kod produktu: CW1.01/11</p>
                                    <!--<div class="icon_info">
                                        <span class="unavailable material-symbols-outlined">event_busy</span>
                                        <span>0 szt.</span>
                                    </div>
                                    <div class="icon_info">
                                        <span class="material-symbols-outlined">local_shipping</span>
                                        <span>24H</span>
                                    </div>
                                    <div class="rabat">
                                        <span>Twój rabat: 32,56%</span>
                                    </div>-->
                                    <br />
                                    <!--<span>Cena netto: </span>-->
                                    <s>656,65 zł</s>
                                    <br />
                                    <!--<span>Twoja cena netto: </span>--><b>442,85 zł</b>
                                </div>
                            </div>
                            <div class="tile-product">
                                <div class="number">
                                    <button class="tile-minus">-</button>
                                    <label>
                                        <input type="number" value="1" disabled />
                                    </label>
                                    <button class="tile-plus">+</button>
                                </div>
                                <div class="shoppingcart"><img src="icons/Group807.png" alt="Koszyk" /></div>
                            </div>
                        </div>

                        <div class="light" data-category="Parametr5">
                            <a href="index3.php" class="link-tag" aria-label="żarówka"></a>
                            <img src="photos/img_06.jpg" alt="Żarówka">
                            <!--<div class="text-offer">
                                <p class="one">NOWOŚĆ</p>
                            </div>-->
                            <div class="text-under-lights">
                                <a href="index3.php" class="link-tag" aria-label="tekst o żarówce"></a>
                                <!--<div class="little_title">Philips</div>-->
                                <h2>ŁĄCZNIK JEDNOBIEGUNOWY</h2>

                                <div class="product_information">
                                    <p>Kod produktu: CW1.01/11</p>
                                    <!--<div class="icon_info">
                                        <span class="available material-symbols-outlined">event_available</span>
                                        <span>1 szt.</span>
                                    </div>
                                    <div class="icon_info">
                                        <span class="material-symbols-outlined">local_shipping</span>
                                        <span>24H</span>
                                    </div>
                                    <div class="rabat">
                                        <span>Twój rabat: 32,56%</span>
                                    </div>-->
                                    <br />
                                    <!--<span>Cena netto: </span>-->
                                    <s>656,65 zł</s>
                                    <br />
                                    <!--<span>Twoja cena netto: </span>--><b>442,85 zł</b>
                                </div>
                            </div>
                            <div class="tile-product">
                                <div class="number">
                                    <button class="tile-minus">-</button>
                                    <label>
                                        <input type="number" value="1" disabled />
                                    </label>
                                    <button class="tile-plus">+</button>
                                </div>
                                <div class="shoppingcart"><img src="icons/Group807.png" alt="Koszyk" /></div>
                            </div>
                        </div>

                        <div class="light" data-category="Parametr6">
                            <a href="index3.php" class="link-tag" aria-label="żarówka"></a>
                            <img src="photos/img_06.jpg" alt="Żarówka">
                            <!--<div class="text-offer">
                                <p class="one">NOWOŚĆ</p>
                                <p class="two">PROMOCJA</p>
                            </div>-->
                            <div class="text-under-lights">
                                <a href="index3.php" class="link-tag" aria-label="tekst o żarówce"></a>
                                <!--<div class="little_title">Philips</div>-->
                                <h2>ŁĄCZNIK JEDNOBIEGUNOWY</h2>

                                <div class="product_information">
                                    <p>Kod produktu: CW1.01/11</p>
                                    <!--<div class="icon_info">
                                        <span class="unavailable material-symbols-outlined">event_busy</span>
                                        <span>0 szt.</span>
                                    </div>
                                    <div class="icon_info">
                                        <span class="material-symbols-outlined">local_shipping</span>
                                        <span>24H</span>
                                    </div>
                                    <div class="rabat">
                                        <span>Twój rabat: 32,56%</span>
                                    </div>-->
                                    <br />
                                    <!--<span>Cena netto: </span>-->
                                    <s>656,65 zł</s>
                                    <br />
                                    <!--<span>Twoja cena netto: </span>--><b>442,85 zł</b>
                                </div>
                            </div>
                            <div class="tile-product">
                                <div class="number">
                                    <button class="tile-minus">-</button>
                                    <label>
                                        <input type="number" value="1" disabled />
                                    </label>
                                    <button class="tile-plus">+</button>
                                </div>
                                <div class="shoppingcart"><img src="icons/Group807.png" alt="Koszyk" /></div>
                            </div>
                        </div>

                        <div class="light" data-category="Parametr7">
                            <a href="index3.php" class="link-tag" aria-label="żarówka"></a>
                            <img src="photos/img_06.jpg" alt="Żarówka">
                            <!--<div class="text-offer">
                                <p class="two">PROMOCJA</p>
                                <p class="three">POLECAMY</p>
                            </div>-->
                            <div class="text-under-lights">
                                <a href="index3.php" class="link-tag" aria-label="tekst o żarówce"></a>
                                <!--<div class="little_title">Philips</div>-->
                                <h2>ŁĄCZNIK JEDNOBIEGUNOWY</h2>

                                <div class="product_information">
                                    <p>Kod produktu: CW1.01/11</p>
                                    <!--<div class="icon_info">
                                        <span class="available material-symbols-outlined">event_available</span>
                                        <span>1 szt.</span>
                                    </div>
                                    <div class="rabat">
                                        <span>Twój rabat: 32,56%</span>
                                    </div>-->
                                    <br />
                                    <!--<span>Cena netto: </span>-->
                                    <s>656,65 zł</s>
                                    <br />
                                    <!--<span>Twoja cena netto: </span>--><b>442,85 zł</b>
                                </div>
                            </div>
                            <div class="tile-product">
                                <div class="number">
                                    <button class="tile-minus">-</button>
                                    <label>
                                        <input type="number" value="1" disabled />
                                    </label>
                                    <button class="tile-plus">+</button>
                                </div>
                                <div class="shoppingcart"><img src="icons/Group807.png" alt="Koszyk" /></div>
                            </div>
                        </div>

                        <div class="light" data-category="Parametr8">
                            <a href="index3.php" class="link-tag" aria-label="żarówka"></a>
                            <img src="photos/img_06.jpg" alt="Żarówka">
                            <!--<div class="text-offer">
                                <p class="one">NOWOŚĆ</p>
                                <p class="two">PROMOCJA</p>
                            </div>-->
                            <div class="text-under-lights">
                                <a href="index3.php" class="link-tag" aria-label="tekst o żarówce"></a>
                                <!--<div class="little_title">Philips</div>-->
                                <h2>ŁĄCZNIK JEDNOBIEGUNOWY</h2>

                                <div class="product_information">
                                    <p>Kod produktu: CW1.01/11</p>
                                    <!--<div class="icon_info">
                                        <span class="unavailable material-symbols-outlined">event_busy</span>
                                        <span>0 szt.</span>
                                    </div>

                                    <div class="rabat">
                                        <span>Twój rabat: 32,56%</span>
                                    </div>-->
                                    <br />
                                    <!--<span>Cena netto: </span>-->
                                    <s>656,65 zł</s>
                                    <br />
                                    <!--<span>Twoja cena netto: </span>--><b>442,85 zł</b>
                                </div>
                            </div>
                            <div class="tile-product">
                                <div class="number">
                                    <button class="tile-minus">-</button>
                                    <label>
                                        <input type="number" value="1" disabled />
                                    </label>
                                    <button class="tile-plus">+</button>
                                </div>
                                <div class="shoppingcart"><img src="icons/Group807.png" alt="Koszyk" /></div>
                            </div>
                        </div>

                        <div class="light" data-category="Parametr9">
                            <a href="index3.php" class="link-tag" aria-label="żarówka"></a>
                            <img src="photos/img_06.jpg" alt="Żarówka">
                            <!--<div class="text-offer">
                                <p class="three">POLECAMY</p>
                            </div>-->
                            <div class="text-under-lights">
                                <a href="index3.php" class="link-tag" aria-label="tekst o żarówce"></a>
                                <!--<div class="little_title">Philips</div>-->
                                <h2>ŁĄCZNIK JEDNOBIEGUNOWY</h2>

                                <div class="product_information">
                                    <p>Kod produktu: CW1.01/11</p>
                                    <!--<div class="icon_info">
                                        <span class="unavailable material-symbols-outlined">event_busy</span>
                                        <span>0 szt.</span>
                                    </div>
                                    <div class="icon_info">
                                        <span class="material-symbols-outlined">local_shipping</span>
                                        <span>24H</span>
                                    </div>
                                    <div class="rabat">
                                        <span>Twój rabat: 32,56%</span>
                                    </div>-->
                                    <br />
                                    <!--<span>Cena netto: </span>-->
                                    <s>656,65 zł</s>
                                    <br />
                                    <!--<span>Twoja cena netto: </span>--><b>442,85 zł</b>
                                </div>
                            </div>
                            <div class="tile-product">
                                <div class="number">
                                    <button class="tile-minus">-</button>
                                    <label>
                                        <input type="number" value="1" disabled />
                                    </label>
                                    <button class="tile-plus">+</button>
                                </div>
                                <div class="shoppingcart"><img src="icons/Group807.png" alt="Koszyk" /></div>
                            </div>
                        </div>

                        <div class="light" data-category="Parametr10">
                            <a href="index3.php" class="link-tag" aria-label="żarówka"></a>
                            <img src="photos/img_06.jpg" alt="Żarówka">
                            <!--<div class="text-offer">
                                <p class="one">NOWOŚĆ</p>
                                <p class="two">PROMOCJA</p>
                            </div>-->
                            <div class="text-under-lights">
                                <a href="index3.php" class="link-tag" aria-label="tekst o żarówce"></a>
                                <!--<div class="little_title">Philips</div>-->
                                <h2>ŁĄCZNIK JEDNOBIEGUNOWY</h2>

                                <div class="product_information">
                                    <p>Kod produktu: CW1.01/11</p>
                                    <!--<div class="icon_info">
                                        <span class="available material-symbols-outlined">event_available</span>
                                        <span>1 szt.</span>
                                    </div>
                                    <div class="icon_info">
                                        <span class="material-symbols-outlined">local_shipping</span>
                                        <span>24H</span>
                                    </div>
                                    <div class="rabat">
                                        <span>Twój rabat: 32,56%</span>
                                    </div>-->
                                    <br />
                                    <!--<span>Cena netto: </span>-->
                                    <s>656,65 zł</s>
                                    <br />
                                    <!--<span>Twoja cena netto: </span>--><b>442,85 zł</b>
                                </div>
                            </div>
                            <div class="tile-product">
                                <div class="number">
                                    <button class="tile-minus">-</button>
                                    <label>
                                        <input type="number" value="1" disabled />
                                    </label>
                                    <button class="tile-plus">+</button>
                                </div>
                                <div class="shoppingcart"><img src="icons/Group807.png" alt="Koszyk" /></div>
                            </div>
                        </div>

                        <div class="light" data-category="Parametr11">
                            <a href="index3.php" class="link-tag" aria-label="żarówka"></a>
                            <img src="photos/img_06.jpg" alt="Żarówka">
                            <!--<div class="text-offer">
                                <p class="one">NOWOŚĆ</p>
                                <p class="two">PROMOCJA</p>
                            </div>-->
                            <div class="text-under-lights">
                                <a href="index3.php" class="link-tag" aria-label="tekst o żarówce"></a>
                                <!--<div class="little_title">Philips</div>-->
                                <h2>ŁĄCZNIK JEDNOBIEGUNOWY</h2>

                                <div class="product_information">
                                    <p>Kod produktu: CW1.01/11</p>
                                    <!--<div class="icon_info">
                                        <span class="available material-symbols-outlined">event_available</span>
                                        <span>1 szt.</span>
                                    </div>
                                    <div class="rabat">
                                        <span>Twój rabat: 32,56%</span>
                                    </div>-->
                                    <br />
                                    <!--<span>Cena netto: </span>-->
                                    <s>656,65 zł</s>
                                    <br />
                                    <!--<span>Twoja cena netto: </span>--><b>442,85 zł</b>
                                </div>
                            </div>
                            <div class="tile-product">
                                <div class="number">
                                    <button class="tile-minus">-</button>
                                    <label>
                                        <input type="number" value="1" disabled />
                                    </label>
                                    <button class="tile-plus">+</button>
                                </div>
                                <div class="shoppingcart"><img src="icons/Group807.png" alt="Koszyk" /></div>
                            </div>
                        </div>

                        <div class="light" data-category="Parametr12">
                            <a href="index3.php" class="link-tag" aria-label="żarówka"></a>
                            <img src="photos/img_06.jpg" alt="Żarówka">
                            <!--<div class="text-offer">
                                <p class="one">NOWOŚĆ</p>
                                <p class="three">POLECAMY</p>
                            </div>-->
                            <div class="text-under-lights">
                                <a href="index3.php" class="link-tag" aria-label="tekst o żarówce"></a>
                                <!--<div class="little_title">Philips</div>-->
                                <h2>ŁĄCZNIK JEDNOBIEGUNOWY</h2>

                                <div class="product_information">
                                    <p>Kod produktu: CW1.01/11</p>
                                    <!--<div class="icon_info">
                                        <span class="unavailable material-symbols-outlined">event_busy</span>
                                        <span>0 szt.</span>
                                    </div>

                                    <div class="rabat">
                                        <span>Twój rabat: 32,56%</span>
                                    </div>-->
                                    <br />
                                    <!--<span>Cena netto: </span>-->
                                    <s>656,65 zł</s>
                                    <br />
                                    <!--<span>Twoja cena netto: </span>--><b>442,85 zł</b>
                                </div>
                            </div>
                            <div class="tile-product">
                                <div class="number">
                                    <button class="tile-minus">-</button>
                                    <label>
                                        <input type="number" value="1" disabled />
                                    </label>
                                    <button class="tile-plus">+</button>
                                </div>
                                <div class="shoppingcart"><img src="icons/Group807.png" alt="Koszyk" /></div>
                            </div>
                        </div>
                    </div>
                    <div class="tile-page">
                        <div class="left-side">
                            <div class="view">
                                <p>Widok</p>
                            </div>

                            <div class="icon-menu">
                                <img src="icons/view1.png" alt="Ikona rozwijanego menu" />
                            </div>

                            <div class="icon-list">
                                <span class="material-symbols-outlined">
                                    format_list_bulleted
                                </span>
                            </div>
                        </div>

                        <div class="right-side">
                            <div class="sort">
                                <p>Sortuj</p>
                            </div>

                            <div class="sort-option">
                                <select class="options">
                                    <option>Domyslne</option>
                                    <option>Cena rosnąco</option>
                                    <option>Cena malejąco</option>
                                    <option>Nazwa rosnąco</option>
                                    <option>Nazwa malejąco</option>
                                </select>
                            </div>

                            <div class="quantity">
                                <p>Ilość</p>
                            </div>
                            <div class="sort-quantity">
                                <select class="quantities choice">
                                    <option>Brak</option>
                                    <option>1</option>
                                    <option>5</option>
                                    <option>7</option>
                                    <option selected>12</option>
                                </select>
                            </div>

                            <div class="pagination">
                                <a href="#" aria-label="strzałka lewa"><i class="fa-solid fa-angle-left"></i></a>
                                <a href="#" class="actives">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">...</a>
                                <a href="#">56</a>
                                <a href="#" aria-label="strzałka prawa"><i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="categoryDesc">
                        <p>
                            GNIAZDKA ELEKTRYCZNE Gniazdka elektryczne, włączniki i wyłączniki światła, włączniki,
                            gniazda komputerowe i telefoniczne, renomowanych Polskich i zagranicznych firm. Mają
                            podstawowe zadanie - dostarczać prąd w każdym domu czy mieszkaniu. Jednak, aby nie zniweczyć
                            całej aranżacji wnętrza zarówno wygląd gniazdka jak i oprawy włączników światła powinny
                            również zostać dobrane zgodnie ze stylistyką całego pomieszczenia. Obecnie na rynku klient
                            ma wybór spośród całej masy różnego rodzaju gniazdek i wyłączników, które nie różnią się od
                            siebie funkcją, jednak mogą różnić się formą oraz kolorem. Projektanci pomagają dopasować
                            klientom poszczególne elementy pomieszczenia w taki sposób, aby wszystko prezentowało się
                            spójnie. Gniazdka elektryczne mogą mieć różne kształty - jedne mają bardziej geometryczne
                            formy o bardziej ostrych krawędziach, natomiast inne są bardziej opływowe i bardziej wypukłe
                            o zaokrąglonych liniach. Podobnie włączniki i wyłączniki światła. Wybierając te drobne
                            elementy do wyposażenia nowego domu czy mieszkania, warto zdecydować się na jedną serię
                            konkretnego producenta, wówczas poszczególne oprawy nie będą się od siebie różnić.
                        </p>
                    </div>
                </div>
            </div>
                
            <!--<div class="newsletter">
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

                    <a href="newsletter.php" class="sign-up button6"></i><span>Przejdź dalej </span><i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>-->
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

                        <a href="formul_kontakt.php" class="form">FORMULARZ KONTAKTOWY</a>
                    </div>
                </div>-->
            </div>

            <!--<div class="footerDetails">
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
                        <a href="" target="_blank" alt="facebook">
                            <i class="fa-brands fa-facebook"></i>
                        </a>

                        <a href="" target="_blank" alt="instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>

                        <a href="" target="_blank" alt="youtube">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>

                </div>
            </div>-->
        <div class="foot_info">
            <div>Copyright 2022. Wszystkie prawa zastrzeżone</div>
            <div>Agencja Interaktywna [ti] Powered By 2ClickShop</div>
        </div>
    </footer>
    </div>
    <script type="text/javascript" src="./scriptsJS/second-index.js"></script>
</body>

</html>