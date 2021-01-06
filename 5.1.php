
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>ООО Дмитрий Антикварный магазин</title>

	<link rel="icon" type="" href="./img/logo1.PNG" />
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- top Header -->
		<div id="top-header">
			<div class="container">
				<div class="pull-left">
					
				</div>
				<div class="pull-right">
					<ul class="header-top-links">
						<li><a href="#skidki">Магазин</a></li>
						<li><a href="#">Новостная рассылка</a></li>
						<li><a href="#">Техническая поддержка</a></li>
						<li class="dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">RUS <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="#">Россия (RUS)</a></li>
								<li><a href="#">English (ENG)</a></li>
								
							</ul>
						</li>
						<li class="dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">RUB <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="#">RUB </a></li>
								<li><a href="#">EUR </a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /top Header -->

		<!-- header -->
		<div id="header">
			<div class="container">
				<div class="pull-left">
					<!-- Logo -->
					<div class="header-logo">
						<a class="logo" href="#">
							<img src="./img/logo.png" alt="">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Search -->
					<div class="header-search">
						<form>
							<input class="input search-input" type="text" placeholder="Поиск">
							<select class="input search-categories">
								<option value="0">Все категории товаров</option>
								<option value="1">Изобразительное искусство</option>
								<option value="1">Предметы</option>
								<option value="1">Оружие</option>
							</select>
							<button class="search-btn"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<!-- /Search -->
				</div>
				<div class="pull-right">
					<ul class="header-btns">
						<!-- Account -->
						<li class="header-account dropdown default-dropdown">
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-user-o"></i>
								</div>
								<strong class="text-uppercase">Мой аккаунт <i class="fa fa-caret-down"></i></strong>
							</div>
							<a href="#" class="text-uppercase">Логин</a> / <a href="#" class="text-uppercase">Присоединяйся</a>
							<ul class="custom-menu">
								<li><a href="#"><i class="fa fa-user-o"></i> Мой аккаунт</a></li>
								<li><a href="#"><i class="fa fa-heart-o"></i> Список желаний</a></li>
								<li><a href="#"><i class="fa fa-exchange"></i> Сравнение</a></li>
								<li><a href="#"><i class="fa fa-check"></i> Проверка</a></li>
								<li><a href="#"><i class="fa fa-unlock-alt"></i> Логин</a></li>
								<li><a href="#"><i class="fa fa-user-plus"></i> Создание аккаунта</a></li>
							</ul>
						</li>
						<!-- /Account -->

						<!-- Cart -->
						<li class="header-cart dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-shopping-cart"></i>
									<span class="qty">3</span>
								</div>
								<strong class="text-uppercase">Моя корзина:</strong>
								<br>
								<span>1.000.000 руб</span>
							</a>
							<div class="custom-menu">
								<div id="shopping-cart">
									<div class="shopping-cart-list">
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">500.000 руб <span class="qty">x1</span></h3>
												<h2 class="product-name"><a href="#">Наименование товара</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">500.000 руб <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Наименование товара</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
									</div>
									
									<div class="shopping-cart-btns">
										<button   class="main-btn">Просмотр корзины</button>
										<button class="primary-btn">Проверка товаров <i class="fa fa-arrow-circle-right"></i></button>
									</div>
								</div>
							</div>
						</li>
						<!-- /Cart -->

						<!-- Mobile nav toggle-->
						<li class="nav-toggle">
							<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
						</li>
						<!-- / Mobile nav toggle -->
					</ul>
				</div>
			</div>
			<!-- header -->
		</div>
		<!-- container -->
	</header>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<div id="navigation">
		<!-- container -->
		<div class="container">
			<div id="responsive-nav">


				<!-- menu nav -->
				<div class="menu-nav">
					<span class="menu-header">Меню<i class="fa fa-bars"></i></span>
					<ul class="menu-list">
						<li><a href="http://localhost/Диплом/1.php">Главная страница</a></li>
						<li><a href="http://localhost/Диплом/2.php">Все таблицы</a></li>
						<li><a href="http://localhost/Диплом/4.1.php">Регистрация пользователейй</a></li>
						<li><a href="http://localhost/Диплом/3.1.php">Добавление сотрудников</a></li>
						<li><a href="http://localhost/Диплом/4.php">Удаление сотрудников и редактирование</a></li>
            <li><a href="http://localhost/Диплом/5.php">Удаление клиентов и редактирование</a></li>
            
				</ul>	
				</div>
				<!-- menu nav -->
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /NAVIGATION -->





<form action=3.1.1.php method = "post">
  <input type=submit name=ok5 value="Таблицы добавления">
</form>
<?php

 
  $servername_27 = "localhost";
  $username_27 = "root";
  $password_27 = "root";
  $dbname_27 = "apteka_27";
  
  // Create connection
  $conn = new mysqli($servername_27, $username_27, $password_27, $dbname_27);



echo "<br><Br>Назначения<br><br>";
	

	$sql = "SELECT * FROM naznach";
	$result = $conn->query($sql);
	if($result->num_rows > 0) {
		echo "<table border=2>";
	echo "<tr><td>Код_назначения</td>"."<td>группа</td>"."<td>описание</td></tr>";
		while($row = $result->fetch_assoc()) {
			echo "<tr>
			<td>".$row["Код_назначения"]."</td>
			<td>".$row["группа"]."</td>
			<td>".$row["описание"]."</td>
				</tr>";
		}
		echo "</table>";
	}else {
	echo "0 results";} 
	
 
  ?>
  <form method="POST">
	<table class="client">
  
	<tr>

		<!--Nzakazchika_27: <br><input type=text  name="Nzakazchika_27" size=40><br>-->
		<td>группа: <br><input type=text  name="группа"><br></td>
		<td>описание: <br><input type=text  name="описание"><br></td>
		</tr>
		<br><input type=submit value="Добавить" name="sub10"><br>
	</form>
<?php	
	if (isset($_POST['sub10']))
		{
			if (empty($_POST['группа']))
			{
				echo "\n\nПоле группа пустое !";
			}
			
			else if (empty($_POST['описание']))
			{
				echo "\n\nПоле описание пустое!";
			}
			else{
						
				$sql = "SELECT Код_назначения FROM naznach";
				$result = $conn->query($sql);

				//находим последний id
				while ($row = $result->fetch_assoc()) 
				{
					$Код_назначения = $row['Код_назначения'];
				}
				$Код_назначения = $Код_назначения+1;
				$группа = $_POST['группа'];
				$описание = $_POST['описание'];
				
				
										
				//INSERT

				$sql = "INSERT INTO naznach (Код_назначения, группа, описание) VALUES('".$Код_назначения."', '".$группа."', '".$описание."')";
					
				$result = $conn->query($sql);
				$sql = "SELECT * FROM naznach";
				$result = $conn->query($sql);
				echo "<br><br>1. Добавить новую запись.<br>";
				echo "<br>Запрос:".$sql." values('".$Код_назначения."', '".$группа."', '".$описание."')";
				if($result->num_rows > 0) 
				{
					echo "<br><b>Table naznach</b><br><br>";
					echo "<table border=2>";
					echo "<tr><td>Код_назначения </td>"."<td>группа</td>"."<td>описание</td>"."</tr>";
					while($row = $result->fetch_assoc()) 
					{
						echo "<tr><td>".$row["Код_назначения"]."</td><td>".$row["группа"]."</td><td>".$row["описание"]."</td></tr>";
					}
					echo "</table>";
				}else {echo "0 results";}
			}
		}
		 $conn->close();
	?>
  
 <!-- FOOTER -->
 <footer id="footer" class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<!-- footer logo -->
						<div class="footer-logo">
							<a class="logo" href="#">
		            <img src="./img/logo.png" alt="">
		          </a>
						</div>
						<!-- /footer logo -->

						<p>Наш магазин имеет огромный перечень товаров искусства и старинных предметов, не пропусти новые поступления!</p>

						<!-- footer social -->
						<ul class="footer-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
						<!-- /footer social -->
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Мой аккаунт</h3>
						<ul class="list-links">
							<li><a href="#">Мой аккаунт</a></li>
							<li><a href="#">Желания</a></li>
							<li><a href="#">Сравнение</a></li>
							<li><a href="#">Проверка</a></li>
							<li><a href="#">Логин</a></li>
							<li><a href="#">Создание аккаунта</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<div class="clearfix visible-sm visible-xs"></div>

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Полезная информация</h3>
						<ul class="list-links">
							<li><a href="https://dimalivelife5.github.io/RazrabDinEvS/">О нас</a></li>
							<li><a href="https://dimalivelife5.github.io/Дмитрий/">Контакты</a></li>
							<li><a href="#">Отзывы</a></li>
							<li><a href="#">Поддержка</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer subscribe -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Оставайтесь на связи</h3>
						<p>Каждый день у нас работает техническая поддержка. Задавайте свои вопросы.</p>
						<form>
							<div class="form-group">
								<input class="input" placeholder="Введите адрес почты">
							</div>
							<button class="primary-btn">Отправить письмо</button>
						</form>
					</div>
				</div>
				<!-- /footer subscribe -->
			</div>
			<!-- /row -->
			<hr>
			<!-- row -->
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<!-- footer copyright -->
					<div class="footer-copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						ООО Тучков Дмитрий Андреевич 2020 год
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
					<!-- /footer copyright -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

	<a href="#" title="Вернуться к началу" class="topbutton">^</a>

</body>

</html>
