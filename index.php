<?
	require_once($_SERVER['DOCUMENT_ROOT']."/include/const.php");
	require_once($_SERVER['DOCUMENT_ROOT']."/include/init.php");
	require_once($_SERVER['DOCUMENT_ROOT']."/include/header.php");
?>
	<body>
		<nav>
			<img src="img/JS.png" alt="Just Space" class="logo">
			<a class="toggle-nav"><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></a>
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
					<td><img src="img/disign.png" height="80" width="80"></td>
					<td><img src="img/develop.png" height="80" width="80"></td>
					<td><img src="img/seo.png" height="80" width="80"></td>
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
						<td><input type="text" name="name" placeholder="Ваше имя" <?php echo "value=\"".$_POST['name']."\""; ?> required></td>
					</tr>
					<tr>
						<td>Телефон</td>
						<td><input type="text" name="telephone" placeholder="Телефон для связи с вами" <?php echo "value=\"".$_POST['telephone']."\""; ?> required></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" placeholder="Email для связи с вами" <?php echo "value=\"".$_POST['email']."\""; ?> required></td>
					</tr>
					<tr>
						<td>Бюджет</td>
						<td><input type="text" name="cost" placeholder="Сумма в которую хотите уложиться" <?php echo "value=\"".$_POST['cost']."\""; ?> required></td>
					</tr>
					<tr>
						<td>Комментарий</td>
						<td>
							<textarea name="description" rows="10" placeholder="По возможности максимально полно опишите желаемую услугу" required><?php echo $_POST['description']; ?></textarea>
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
					<th colspan="3"><h1 id="footer">Контакты</h1></th>
				</tr>
				<tr>
					<td><img src="img/messange.png"></td>
					<td><img src="img/email.png"></td>
					<td><img src="img/blog.png"></td>
				</tr>
				<tr>
					<td><span>Звоните</span></td>
					<td><span>Пишите</span></td>
					<td><span>Читайте</span></td>
				</tr>
				<tr>
					<td><a href="tel:+79101617527">+7 (910) 161-75-27</a></td>
					<td><a href="mailto:just.space.tula@gmail.com">just.space.tula@gmail.com</a></td>
					<td><a href="blog/index.php">Наш блог</a></td>
				</tr>
			</table>
		</div>
<?
	require_once($_SERVER['DOCUMENT_ROOT']."/include/footer.php");
?>