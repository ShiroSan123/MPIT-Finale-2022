<?php
session_start();
$connect = mysqli_connect("127.0.0.1",root,"","MPIT-SquadGame-2022");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
</head>
<body>
	<!-- Проверка на правильность регистрации или авторизации -->
	<?php if ($_SESSION['RegAndSign'] == 1) { ?>
		<!-- Кнопка назад в index.php -->
		<button onclick="Exit()" class="col-1 btn border border-dark" style="position: absolute; top: 2vh; left: 2vw;">Main</button>
		<!-- Блок с регистрацией -->
		<div class="col-4 rounded shadow-lg blockReg mx-auto text-center" style="height: 60vh; margin-top: 10vh; background: #ebebeb; padding-top: 10vh;">
			<h3 class="pb-2">Регистрация</h3>
			<!-- Форма для переноса на страницу авторизации -->
			<form action="RegAndSign.php" method="post">
				<p style="color: dark;">Уже есть аккаунт?<input type="text" name="reg" style="display: none;" value="1"></input><button class="btn-submit" style="background: none">Войти</button></p>
			</form>
			<form action="regUser.php" method="post" class="col-7 mx-auto">
				<?php if ($_SESSION['tooLongPoL'] == 1) { ?>
					<p style="background: #ebebeb;" class="rounded">Логин не может быть короче 3 и длиннее 20, а пароль не может быть короче 5 и длиннее 20</p>
				<?php } ?>
				<input type="text" required name="login" class="form-control rounded-pill btn-out" id="login" placeholder="Логин"><br>
				<input type="password" required name="password" class="form-control rounded-pill btn-out" id="pass" placeholder="Пароль"><br>
				<button class="btn rounded-pill mt-2 border" style="background: #F2F2F2">Зарегестрироваться</button><br>
				<!-- <a href="" style="text-decoration: none; color: gray">Забыли пароль?</a> -->
			</form>
		</div>
	<?php } else {?>
		<!-- Кнопка назад в index.php -->
		<button onclick="Exit()" class="col-1 btn border border-dark" style="position: absolute; top: 2vh; left: 2vw;">Main</button>
		<!-- Блок с авторизацией -->
		<div class="col-4 rounded shadow-lg blockReg mx-auto text-center" style="height: 60vh; margin-top: 10vh; background: #ebebeb; padding-top: 10vh;">
			<h3 class="pb-2">Авторизация</h3>
			<!-- Форма для переноса на страницу регистрации -->
			<form action="RegAndSign.php" method="post">
				<p style="color: dark;">Ещё не зарегестрировались?<input type="text" name="reg" style="display: none;" placeholder="0"></input><button class="btn-submit" style="background: none">Зарегистрироваться</button></p></p>
			</form>
			<form action="signUser.php" method="post" class="col-7 mx-auto">
				<?php if ($_SESSION['NoReg'] == 1) { ?>
					<p style="background: #ebebeb;" class="rounded">Внесены неправильные данные</p>
				<?php } ?>
				<input type="text" required name="login" class="form-control rounded-pill btn-out" id="login" placeholder="Логин"><br>
				<input type="password" required name="password" class="form-control rounded-pill btn-out" id="pass" placeholder="Пароль"><br>
				<button class="btn rounded-pill mt-2 border" style="background: #F2F2F2">Авторизоваться</button><br>
				<!-- <a href="" style="text-decoration: none; color: gray">Забыли пароль?</a> -->
			</form>
		</div>
	<?php } ?>
	<script type="text/javascript">
		function Exit() {
			window.location.href = 'index.php';
		}
	</script>
</body>
</html>