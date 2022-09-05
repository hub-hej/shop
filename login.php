<?php
session_start();
require_once('db.php');

if(isset($_POST['submit']))
{
	if(isset($_POST['email'],$_POST['password']) && !empty($_POST['email']) && !empty($_POST['password']))
	{
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);

		if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$sql = "select * from members where email = :email ";
			$handle = $pdo->prepare($sql);
			$params = ['email'=>$email];
			$handle->execute($params);
			if($handle->rowCount() > 0)
			{
				$getRow = $handle->fetch(PDO::FETCH_ASSOC);
				if(password_verify($password, $getRow['password']))
				{
					unset($getRow['password']);
					$_SESSION = $getRow;
					header('location:index.php');
					exit();
				}
				else
				{
					$errors[] = "Nieprawidłowy Email lub hasło";
				}
			}
			else
			{
				$errors[] = "Nieprawidłowy Email lub Password";
			}
			
		}
		else
		{
			$errors[] = "Adres Email jest nieprawidłowy";	
		}

	}
	else
	{
		$errors[] = "Email i hasło są wymagane";	
	}

}
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Rejestracja">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <title>Logowanie</title>
</head>
<body>
<div class="full-page">
		<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>
			<section>
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
			</section>

			<section>
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
			</section>

	<main>
		<div class="container">
			<div class="login">
				<div class="row">
					<h1>Logowanie</h1>
				</div>
					<?php 
						if(isset($errors) && count($errors) > 0)
						{
							foreach($errors as $error_msg)
							{
								echo '<div class="alert_alert-danger">'.$error_msg.'</div>';
							}
						}
					?>
					<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" class="formsy">
						<div class="form-group">
							<div class="icon-register">
                                <i class="fa fa-envelope icon"></i>
                            </div>
							<input type="text" name="email" placeholder="Wpisz adres email" class="form-control">
						</div>
						<div class="form-group">
							<div class="icon-register">
                                <i class="fa fa-key icon"></i>
                            </div>

							<div class="warning_capslock">
								<input type="password" name="password" placeholder="Wpisz hasło" class="form-control" id="capsLock">
								<p id="text">UWAGA! CapsLock jest włączony.</p>
							</div>
						</div>
						
						<div class="loginBox__links">
							<a href="registration.php">Zarejestruj się</a>
							<a href="">Zapomniałeś(aś) hasła?</a>
						</div>

						<div class="back_login">
							<button type="submit" name="submit" class="btn btn-primary">Zaloguj się</button>
						</div>
					</form>
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

			<footer>
            <div>Coppyright 2022. Wszystkie prawa zastrzeżone</div>
            <div>Agencja Interaktywna [ti] Powered By 2ClickShop</div>
        </footer>
</div>
<script src="login.js"></script>
</body>
</html>
