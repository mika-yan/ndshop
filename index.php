<?php
 require "db/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	
	<title>MyShop | Одежда</title>
</head>
<body>
	

<header class="nav">
	  <div class="logo">
		 <!--<img src="pos_log/img/logo/logo.png">-->
		 <h1>D&S <span>Shop</span></h1>
	  </div>

	  <div class="nav_menu">
		 <ul>
			<li><a href="index.php">Одежда</a></li>
			<li><a href="#">Украшения</a></li>
			<li><a href="#" onclick="openAuthModal()" class="menu">Вход</a></li>
			<li><a href="#" onclick="openSignupModal()" class="menu">Регистрация</a></li>
		 </ul>
	  </div>
</header>

	<sidebar class="sidebar">
		<div class="sidebar_content">
			<img src="img/sidebar/sidebarbg.jpg" alt="" class="sidebar_img">
		</div>
	</sidebar>


	<main class="main">
		<div class="content">
			<div class="cards">
			<div class="card">
				<!-- Изображение -->
				<img src="img/cards/img1.png" alt="" class="card_img">
				<!-- Текст -->
				<div class="card-body">
					Пока это продолжалось — было хорошо.
				</div>
				
				<button class="btn_buy">Купить</button>

			</div>

			<div class="card">
				<!-- Изображение -->
				<img src="img/cards/img1.png" alt="" class="card_img">
				<!-- Текст -->
				<div class="card-body">
					Пока это продолжалось — было хорошо.
				</div>

				<button class="btn_buy">Купить</button>
			</div>

			<div class="card">
				<!-- Изображение -->
				<img src="img/cards/img1.png" alt="" class="card_img">
				<!-- Текст -->
				<div class="card-body">
					Пока это продолжалось — было хорошо.
				</div>

				<button class="btn_buy">Купить</button>
			</div>

			<div class="card">
				<!-- Изображение -->
				<img src="img/cards/img1.png" alt="" class="card_img">
				<!-- Текст -->
				<div class="card-body">
					Пока это продолжалось — было хорошо.
				</div>

				<button class="btn_buy">Купить</button>
			</div>

			<div class="card">
				<!-- Изображение -->
				<img src="img/cards/img1.png" alt="" class="card_img">
				<!-- Текст -->
				<div class="card-body">
					Пока это продолжалось — было хорошо.
				</div>

				<button class="btn_buy">Купить</button>
			</div>

			<div class="card">
				<!-- Изображение -->
				<img src="img/cards/img1.png" alt="" class="card_img">
				<!-- Текст -->
				<div class="card-body">
					Пока это продолжалось — было хорошо.
				</div>

				<button class="btn_buy">Купить</button>
			
			</div>

			<div class="card">
				<!-- Изображение -->
				<img src="img/cards/img1.png" alt="" class="card_img">
				<!-- Текст -->
				<div class="card-body">
					Пока это продолжалось — было хорошо.
				</div>

				<button class="btn_buy">Купить</button>
			
			</div>

			<div class="card">
				<!-- Изображение -->
				<img src="img/cards/img1.png" alt="" class="card_img">
				<!-- Текст -->
				<div class="card-body">
					Пока это продолжалось — было хорошо.
				</div>
				<button class="btn_buy">Купить</button>
			</div>

			<div class="card">
				<!-- Изображение -->
				<img src="img/cards/img1.png" alt="" class="card_img">
				<!-- Текст -->
				<div class="card-body">
					Пока это продолжалось — было хорошо.
			
				</div>

				<button class="btn_buy">Купить</button>
			</div>
		</div>
	</main>

























<!----------Auth and Reg----------


<div class="modal_auth">
	<div class="modal_auth_content">
		<div class="modal_auth_close">
		    <i class="far fa-times-circle" onclick="closeAuthModal()"></i>
		</div>
		<div class="modal_auth_title">
			<h1>Авторизация</h1>
		</div>
		<div class="modal_auth_body">
			<form action="" method="POST" class="modal_form">
				<input type="text" placeholder="Логин" name="login" id="login">
				<input type="password" placeholder="Пароль" name="password" id="pass">
			    <button class="btn_auth" type="" name="do_login" class="btn btn-success">Авторизоваться</button>
			</form>
		</div>
		
	</div>
</div>


<div class="modal_signup">
	<div class="modal_signup_content">
		<div class="modal_signup_close">
		    <i class="far fa-times-circle" onclick="closeAuthModal()"></i>
		</div>
		<div class="modal_signup_title">
			<h1>Регистрация</h1>
		</div>
		<div class="modal_signup_body">
			<form action="" method="POST" class="modal_form">
				<input type="text" placeholder="Логин" name="login" id="login">
				<input type="password" placeholder="Пароль" name="password" id="password">
				<button class="btn_signup" type="" name="do_signup" class="btn btn-success">Зарегистрироваться</button>
			</form>
		</div>
	</div>
</div>


------------------->


<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>