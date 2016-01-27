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
				<li class="special"><a href="#order">Оформить заказ</a></li>
			</ul>
		</nav>
		<div class="main-foto">
			<img src="img/main.png" alt="Дизайн, создание и продвижение сайтов">
		</div>

		<div class="marker">
			<h2>Создаем успешные сайты для вашего бизнеса!</h2>
			Предоставляем большой набор услуг по созданию, продвижению и улучшению сайтов. Сайты созданные нами действительно приносят прибыль.
		</div>

		<div class="article services">
			<h1 id="services">Вы можете заказать у нас</h1>
			<table class="services-list">
				<tr>
					<td><img src="img/disign.png" alt="Дизайн" height="80" width="80"></td>
					<td><img src="img/develop.png" alt="Создание сайтов" height="80" width="80"></td>
					<td><img src="img/seo.png" alt="Продвижение сайтов" height="80" width="80"></td>
				</tr>
				<tr>
					<th><a href="design.php">Дизайн сайта</a></th>
					<th><a href="develop.php">Создание сайта</a></th>
					<th><a href="seo.php">Продвижение сайта</a></th>
				</tr>
				<tr>
					<td>
						Вам необходимо создать уникальный дизайн сайта или воспользоваться шаблонным, но подстроенным точно под вас решением? Тогда вы пришли по адресу.
					</td>
					<td>
                        Занимаемся созданием сайтов любой сложности: корпоративные сайты, сайты-визитки, интернет-магазины, лендинги и другие виды сайтов.
                    </td>
					<td>
                        Поможем поднять сайт на первые позиции поисковой выдачи. Контекстная реклама, SEO продвижение, продвижение в социальных сетях и многое другое.
                    </td>
				</tr>
			</table>	
		</div>

		<div class="marker">
			<h2>Работаем не только в Туле, но и в других регионах</h2>
			Вы можете ознакомиться с нашими работами, многие из них были созданы с нуля, для некоторых мы проводили SEO продвижение или вносили необходимые доработки в функционал.
		</div>

		<div class="article portfolio">
			<h1 id="portfolio">Портфолио</h1>

			<div id="slider-wrap">
				<div class="slider" id="slider">
					<div class="slide"><a href="http://bmw-auto.esy.es/" target="_blank"><img src="img/slider/bmw-auto.jpg" alt="bmw-auto.ru"></a></div>
					<div class="slide"><img src="img/slider/tul-flat.jpg" alt="tul-flat.ru"></div>
					<div class="slide"><img src="img/slider/taxi-house.jpg" alt="taxi-house.ru"></div>
					<div class="slide"><a href="http://mwcorp.ru/" target="_blank"><img src="img/slider/mwcorp.jpg" alt="mwcorp.ru"></a></div>
                    <div class="slide"><a href="https://www.nevstavay.ru/" target="_blank"><img src="img/slider/nevstavay.jpg" alt="nevstavay.ru"></a></div>
                    <div class="slide"><a href="http://cooking.mwcorp.ru/" target="_blank"><img src="img/slider/cooking.jpg" alt="mwcorp-cooking.ry"></a></div>
					<div class="slide"><a href="http://xn----8sbk2abp4ai9h.xn--p1ai/" target="_blank"><img src="img/slider/doly-tula.jpg" alt="doly-tula.ru"></a></div>
                    <div class="slide"><a href="http://www.beauty-shop.ru/" target="_blank"><img src="img/slider/beauty-shop.jpg" alt="beauty-shop.ru"></a></div>
                    <div class="slide"><a href="http://www.gazel-traffic.ru/" target="_blank"><img src="img/slider/gazel-traffic.jpg" alt="gazel-traffic.ru"></a></div>
				</div>
			</div>
		</div>

		<div class="marker">
			<span>Хотите заказать сайт или SEO продвижение?</span>
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
					<td><img src="img/messange.png" alt="Корпоративный телефон"></td>
					<td><img src="img/email.png" alt="Корпоративная почта"></td>
					<td><img src="img/blog.png" alt="Корпоративный блог"></td>
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