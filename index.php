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
<body>
	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top col-12 border-bottom" style="height: 8vh; background: white">
		<div class="col-12	">
			<div class="row" style="margin-left: 0; margin-right: 0;">
				<!-- Колонка логотипа -->
				<div class="col-2" style="height: 8vh; padding-top: 1vh">
					<img id="logo" class="" src="asset/img/logo.svg" id="logoMain" alt="" style="height: 6vh; margin-left: 0.3vw;">
				</div>
				<!-- Средняя колонка -->
				<div class="col-8" style="height: 8vh; padding-top: 2vh;">
					<div class="row" style="margin-left: 0; margin-right: 0;">
						<div class="col-3 text-center">
							<a href="index.php" class="text-dark" style="text-decoration: none; font-size: 1.3vw">Главная</a>
						</div>
						<div class="col-3 text-center">

						</div>
						<div class="col-3 text-center">
							
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
						<h4><a href="checkSign.php" class="get-started-btn text-dark" style="text-decoration: none; font-size: 0.9vw; font-weight: bold;">Войти</a></h4>
						<h4 style="margin-left: 2vw"><a href="checkReg.php" class="get-started-btn text-dark" style="text-decoration: none; font-size: 0.9vw; font-weight: bold;">Зарегестрироваться</a></h4>
					<?php } ?>
				</div>
			</div>
		</div>
	</header>
	<!-- End Header -->
	<script>
		function Exit() {
			window.location.href = 'index.php';
		}
	</script>
</body>
</html>