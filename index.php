<?php
session_start();
$connect = mysqli_connect("127.0.0.1",root,"","MPITFinal2022");
$query = "SELECT * FROM Users WHERE id='{$_SESSION['id']}'";
$result = mysqli_query($connect, $query);
$stroka = $result->fetch_assoc();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<style>
		
	</style>
	<!-- Script only -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="assets/script/script.js"></script>
	<script type="text/javascript">
</script>
</head>
<body style="background-image: url(asset/img/Group43.svg); background-size: 100%;">
	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top col-12" style="height: 8vh; background: #F0F0F0">
		<div class="col-12	">
			<div class="row" style="margin-left: 0; margin-right: 0;">
				<!-- Колонка логотипа -->
				<div class="col-2" style="height: 8vh; padding-top: 1vh; padding-top: 2vh;">
					<!-- <img id="logo" class="" src="asset/img/logo.svg" id="logoMain" alt="" style="height: 6vh; margin-left: 0.3vw;"> -->
					<input type="text" class="form-control">
				</div>
				<!-- Средняя колонка -->
				<div class="col-8" style="height: 8vh; padding-top: 2vh;">
					<div class="row" style="margin-left: 0; margin-right: 0;">
						<div class="col-3 text-center">
							<a href="index.php" class="text-dark" style="text-decoration: none; font-size: 1.3vw">Главная</a>
						</div>
						<div class="col-3 text-center">
							<a href="indexCreate.php" class="text-dark" style="text-decoration: none; font-size: 1.3vw">Создать курс</a>
						</div>
						<div class="col-3 text-center">
							<a href="catalog.php" class="text-dark" style="text-decoration: none; font-size: 1.3vw">Каталог</a>
						</div>
						<div class="col-3 text-center">
							
						</div>
					</div>
				</div>
				<!-- Колонка с Ссылками, на профиль, вход и регистрацию -->
				<div class="col-2 d-flex" style="height: 8vh; padding-top: 2vh;">
					<?php if ($_SESSION['id']!=null) { ?>
						<h4><a href="profile.php" class="get-started-btn text-dark" style="text-decoration: none; font-size: 0.9vw; font-weight: bold;"><?php echo $stroka['Login'] ?></a></h4>
						<h4 style="margin-left: 2vw"><a href="logOut.php" class="get-started-btn text-dark" style="text-decoration: none; font-size: 0.9vw; font-weight: bold;">Выход</a></h4>
					<?php } else {?>
						<button class="btn" onclick="CheckSign()" style="height: 4vh; font-size: 0.9vw; font-weight: 400; margin-left: 10vw; border-color: #33448F; border-radius: 1.3vh; border-width: 0.3vh;">Войти</button>
					<?php } ?>
				</div>
			</div>
		</div>
	</header>
	<!-- End Header -->
	<div class="col-12">
		<div class="col-12" style="height: 100vh; padding-top: 20vh;padding-left: 10vh;">
			<div class="col-8" style="height: 70vh;">
				<h1 style="font-size: 7vh; font-family: monospace; font-weight: bold;">Найди себе друга для занятий!</h1>
				<p style="font-size: 4vh; font-family: ; font-weight: 400;" class="col-7">Знакомьтесь с людьми в своём городе, а также со всего мира</p>
				<button onclick="CheckReg()" class="btn text-white shadow-lg" style="background: #33448F; border-radius: 1.5vh; margin-top: 3vh; font-size: 3vh; font-weight: 300;">Зарегестрироваться</button>
			</div>
		</div>
		<div class="col-12" style="height: 15vh; background-image: url(); background-size:  100%; ">
			<div class="col-12" style="padding-bottom: 10vh; height: 117vh;">
				<!-- <div class="col-8 mx-auto" style="padding-top: 50vh;">
					<div class="row">
						<div class="col-3 mx-auto" style="height: 25vh; background: #E5E5E5;"></div>
						<div class="col-3 mx-auto" style="height: 25vh; background: #E5E5E5;"></div>
						<div class="col-3 mx-auto" style="height: 25vh; background: #E5E5E5;"></div>
					</div>
				</div>
				<div class="col-6 mx-auto" style="margin-top: 5vh;">
					<div class="row">
						<div class="col-4 mx-auto" style="height: 25vh; background: #E5E5E5;"></div>
						<div class="col-4 mx-auto" style="height: 25vh; background: #E5E5E5;"></div>
					</div>
				</div> -->
			</div>
		</div>
		<div class="col-11 mx-auto" style="margin-top: 140vh;">
			<div class="row">
				<div class="col-3 bg-secondary" style="height: 60vh; background-image: url(asset/img/LeftG.svg); background-size: 100%"></div>
				<div class="col-6 text-center">
					<h1 style="font-size: 5vh; font-weight: 300; color: white;">Выбери свою роль на сайте!</h1>
					<p class="col-8 mx-auto" style="font-size: 3vh; color: white; font-weight: 300;">Сервис нацелен на педагогов, школьников и их родителей. Сайт Разивайся поможет учащимся найти кружок или же мероприятие по душе, а также сможет найти поддержку в реализации своих планов. Для учителей платформа также станет незаменимым помощником: просмотр/создание мастер-классов, реализация мероприятий, объявление об открытии кружка.</p>
				</div>
				<div class="col-3 bg-secondary" style="height: 60vh; background-image: url(asset/img/RightG.svg); background-size: 100%"></div>
			</div>
		</div>
		<div class="col-12" style="height: 10vh;"></div>
		<!-- ======= Footer ======= -->
		<footer class="col-12 footer" style="height: 20vh; background: #1F2F7F; position: absolute; bottom: -375vh">
			<div class="col-9 mx-auto" style="padding-top: 5vh;">
				<div class="row">
					<div class="col-2" style="height: 8vh; padding-top: 1vh;">
						<img id="logo1" class="" src="asset/img/logos.svg" id="logoMain" alt="" style="height: 8vh">
					</div>
					<div class="col-9" style="height: 8vh; padding-top: 4vh;">
						<p class="text-white" style="font-size: 1vw; font-weight: lighter;">2022 © Все права защищены</p>
					</div>
					<div class="col-1" style="height: 8vh; padding-top: 2vh;">
						<img id="toTop" src="asset/img/arrowUp.svg" alt="" style="height: 5vh;">
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer -->
	</div>
	<script>
		function Exit() {
			window.location.href = 'index.php';
		}
		function CheckReg() {
			window.location.href = 'CheckReg.php';
		}
		function CheckSign() {
			window.location.href = 'CheckSign.php';
		}
	</script>
</body>
</html>