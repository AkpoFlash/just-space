<?php
	if(isset($_POST["order_sub"])){
		$name = "ФИО заказчика: " . $_POST["name"] . "\n";
		$telephone = "Контактный телефон: " . $_POST["telephone"] . "\n";
		$email = "Контактный email: " . $_POST["email"] . "\n";
		$cost = "Предположительный бюджет: " . $_POST["cost"] . " рублей" . "\n";
		$description = "Описание задачи: " . $_POST["description"] . "\n";
		$separator = "------------------------------------------------------------------\n";
		$file = fopen("link/messange.txt","a+");
		fputs($file, $name);
		fputs($file, $telephone);
		fputs($file, $email);
		fputs($file, $cost);
		fputs($file, $description);
		fputs($file, $separator);
		fclose($file);

		if(mail("akpoflash@gmail.com","Just Space - Заказ", $name . $telephone . $email . $cost . $description)){
			$_SESSION["event"]["file"] = "Ваша заявка отправлена. Мы с вами свяжемся.";
		}
	}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Мы создаем сайты под ключ: создание макета, программирование, продвижение. Разрабатываем сайты любой сложности, низкие цены и высокое качество" />
	<meta name="keywords" content="создание сайтов, сайт визитка, разработка сайтов, создать интернет магазин, создание сайта визитки, продвижение сайтов, дизайн сайта, веб сайт, создать визитку, создание сайта цена, создать сайт быстро, раскрутка сайта, оптимизация сайта, разработка сайтов, seo продвижение, поисковое продвижение, поисковая оптимизация, продвинуть сайт, контекстная реклама, seo сайта, сео продвижение, seo продвижение сайта, продвижение сайта цена, продвижение веб сайтов, заказать продвижение сайта, стоимость продвижения сайта, качественное продвижение сайтов">
	<meta http-equiv="content-language" content="ru">
	<title>Just Space</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<nav>
		<img src="img/JS.png" alt="Just Space" class="logo">
		<ul class="menu">
			<li><a href="#services">Услуги</a></li>
			<li><a href="#portfolio">Портфолио</a></li>
			<li><a href="#footer">Контакты</a></li>
			<li class="special"><a href="#order">Сделать заказ</a></li>
		</ul>
	</nav>
	<div class="main-foto">
		<img src="img/main.png" alt="">
	</div>

	<div class="marker">
		<span>Почему мы лучше других?</span>
		Работая с современными технологиями мы всегда на шаг впереди конкурентов. Наши сайты работают быстрей, и всегда сделаны с любовью.
	</div>

	<div class="article services">
		<h1 id="services">Вы можете заказать у нас</h1>
		<table class="services-list">
			<tr>
				<td><img src="img/Без-имени-3.png" height="80" width="80"></td>
				<td><img src="img/Без-имени-2.png" height="80" width="80"></td>
				<td><img src="img/Без-имени-1.png" height="80" width="80"></td>
			</tr>
			<tr>
				<th><a href="design.php">Дизайн</a></th>
				<th><a href="develop.php">Создание сайта</a></th>
				<th><a href="seo.php">Продвижение</a></th>
			</tr>
			<tr>
				<td>Вам необходимо создать уникальный макет сайта или воспользоваться готовым, но подстроенным точно под вас решением? Тогда вы пришли по адресу.</td>
				<td>Занимаемся созданием сайтов любой сложности: корпоративные сайты, сайты-визитки, интернет-магазины, лендинги и другие виды сайтов.</td>
				<td>Поможем продвинусь сайт на первые позиции поисковой выдачи. Контекстная реклама, продвижение в социальных сетях и многое другое.</td>
			</tr>
		</table>	
	</div>

	<div class="marker">

		<span>Почему у нас так дешево?</span>
		Мы обеспечиваем хорошее качество, по низкой цене. Вы можете усомниться в этом, но все наши сотрудники работают удаленно,
		благодаря этому наши производственные затраты малы и мы реализуем все проекты за минимальную цену.
	</div>

	<div class="article portfolio">
		<h1 id="portfolio">Портфолио</h1>

		<div id="slider-wrap">
			<div class="slider" id="slider">
				<div class="slide"><a href="http://bmw-auto.esy.es/" target="_blank"><img src="img/slider/bmw-auto.jpg"></a></div>
				<div class="slide"><a href="http://xn--80aaag5aibdc9cbelig9l4b.xn--p1ai/" target="_blank"><img src="img/slider/tul-flat.jpg"></a></div>
				<div class="slide"><a href="http://xn--80ahnhilyf.xn--p1ai/" target="_blank"><img src="img/slider/taxi-house.jpg"></a></div>
				<div class="slide"><a href="http://mwcorp.ru/" target="_blank"><img src="img/slider/mwcorp.jpg"></a></div>
				<div class="slide"><a href="http://cooking.mwcorp.ru/" target="_blank"><img src="img/slider/cooking.jpg"></a></div>
				<div class="slide"><a href="http://xn----8sbk2abp4ai9h.xn--p1ai/" target="_blank"><img src="img/slider/doly-tula.jpg"></a></div>
				<div class="slide"><a href="http://www.gazel-traffic.ru/" target="_blank"><img src="img/slider/gazel-traffic.jpg"></a></div>
			</div>
		</div>
	</div>

	<div class="marker">
		<span>Хотите работать с нами?</span>
		Заполните представленную нижу форму, чтобы мы могли связаться с вами и обсудить подробности заказа.
	</div>

	<div class="article order">
		<h1 id="order">Оставить заявку</h1>
		<form action="index.php" method="POST">
			<table class="order-table">
				<tr>
					<td>ФИО</td>
					<td><input type="text" name="name" placeholder="Иванов Иван Иванович" <?php echo "value=\"".$_POST['name']."\""; ?> required></td>
				</tr>
				<tr>
					<td>Телефон</td>
					<td><input type="text" name="telephone" placeholder="+7 (910) 161-75-27" <?php echo "value=\"".$_POST['telephone']."\""; ?> required></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" placeholder="justspace@gmail.com" <?php echo "value=\"".$_POST['email']."\""; ?> required></td>
				</tr>
				<tr>
					<td>Бюджет</td>
					<td><input type="text" name="cost" placeholder="5000 руб." <?php echo "value=\"".$_POST['cost']."\""; ?> required></td>
				</tr>
				<tr>
					<td>Коментарий</td>
					<td>
						<textarea name="description" rows="10" required><?php echo $_POST['description']; ?></textarea>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" name="order_sub" value="Оставить заказ">
					</td>
				</tr>
			</table>
		</form>
	</div>
	<?php
		if(isset($_POST["order_sub"])){
			if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["telephone"]) && !empty($_POST["cost"]) && !empty($_POST["description"])){
				echo "<script>alert('" . $_SESSION["event"]["file"] . "');</script>";
			}
		}
		$_SESSION["event"]["file"] = "";
	?>
	<div class="marker">
		<span>Мы всегда на связи</span>
		Вы можете позвонить, написать или оставить заявку в любое время, мы обязательно обработаем вызов и свяжемся с вами.
	</div>

	<div class="article contact">
		<table>
			<tr>
				<th colspan="2"><h1 id="footer">Контакты</h1></th>
			</tr>
			<tr>
				<td><img src="img/messange.png"></td>
				<td><img src="img/email.png"></td>
			</tr>
			<tr>
				<td><span>Звоните</span></td>
				<td><span>Пишите</span></td>
			</tr>
			<tr>
				<td><a href="tel:+79101617527">+7 (910) 161-75-27</a></td>
				<td><a href="mailto:akpoflash@gmail.com">akpoflash@gmail.com</a></td>
			</tr>
		</table>
	</div>

	<div class="marker social">
		<div class="col">
			<span>Мы в социальных сетях</span>
			<div class="col-l">
				<a href="https://vk.com/spacedev" class="social-icon" target="_blank"><img src="img/Vkontakte.svg" id="vk" alt="vk.com" title="vk.com" onmouseover="over_social_icon('vk','Vkontakte-white')" onmouseout="out_social_icon('vk','Vkontakte')"></a>
			</div>
			<div class="col-c">
				<a href="https://twitter.com/Space_Develop" class="social-icon" target="_blank"><img src="img/twitter.svg" id="tw" alt="twitter.com" title="twitter.com" onmouseover="over_social_icon('tw','twitter-white')" onmouseout="out_social_icon('tw','twitter')"></a>
			</div>
			<div class="col-r">
				
				<a href="https://www.facebook.com/groups/931393063615918/" class="social-icon" target="_blank"><img src="img/facebook.svg" id="fb" alt="facebook.com" title="facebook.com" onmouseover="over_social_icon('fb','facebook-white')" onmouseout="out_social_icon('fb','facebook')"></a>
			</div>
		</div>
	</div>

	<a href="" id="head" class="top">^</a>
</body>
</html>