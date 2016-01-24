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
				<li><a href="index.php">Главная</a></li>
				<li><a href="#simple">Небольшие проекты</a></li>
				<li><a href="#big">Крупные проекты</a></li>
				<li><a href="#other">Прочее</a></li>
			</ul>
		</nav>

		<div class="article description">
			<h1>Создание сайтов</h1>
			<div>
				Наша компания вот уже несколько лет специализируется на разработке сайтов с нуля и поддержке уже готовых сайтов, занимаясь как сложными веб-решениями и крупными порталами, так и обычными веб-станицами и лендингами.
			</div>	
		</div>

		<div class="marker">
			<span id="simple">Небольшие проекты</span>
			В основном данный раздел предназначается для физических лиц или малого бизнеса. Отличительной чертой данных решений является нацеленность на определенную цель, продажа или реклама конкретного продукта.
		</div>

		<div class="article">
			<h1>Лендинги</h1>
			<table class="services-list">
				<tr>
					<td><img src="img/current.png" height="80" width="80"></td>
					<td><img src="img/graph.png" height="80" width="80"></td>
				</tr>
				<tr>
					<th>Что мы делаем?</th>
					<th>Сроки и цены</th>
				</tr>
				<tr>
					<td>
						Создание лендинга(1 страница) на основе готового макета или с использованием стандартных шаблонов, если необходим уникальный дизайн, то вы можете дополнительно заказать у нас <a href="design.php">макет сайта</a>.
					</td>
					<td>
						Сайт будет полностью готов в течении недели, стоимость разработки - 3000 рублей.
					</td>
				</tr>
			</table>	
		</div>

		<div class="article">
			<h1>Сайт-визитка</h1>
			<table class="services-list">
				<tr>
					<td><img src="img/current.png" height="80" width="80"></td>
					<td><img src="img/graph.png" height="80" width="80"></td>
				</tr>
				<tr>
					<th>Что мы делаем?</th>
					<th>Сроки и цены</th>
				</tr>
				<tr>
					<td>
						Создание сайта-визитки(1-3 страниц) на основе готового макета или с использованием стандартных шаблонов, если необходим уникальный дизайн, то вы можете дополнительно заказать у нас <a href="design.php">макет сайта</a>.
					</td>
					<td>
						Сайт будет полностью готов в течении недели, стоимость разработки - 5000 рублей.
					</td>
				</tr>
			</table>	
		</div>

		<div class="marker">
			<span id="big">Крупные проекты</span>
			В этом разделе представлены решения для среднего и крупного бизнеса, позволяющие охватить максимум аудитории и продавать товары самого разного вида и назначения.
		</div>

		<div class="article">
			<h1>Корпоративные сайты</h1>
			<table class="services-list">
				<tr>
					<td><img src="img/current.png" height="80" width="80"></td>
					<td><img src="img/graph.png" height="80" width="80"></td>
				</tr>
				<tr>
					<th>Что мы делаем?</th>
					<th>Сроки и цены</th>
				</tr>
				<tr>
					<td>
						Создание корпоративного сайта(1-10 страниц).
					</td>
					<td>
						Сайт будет полностью готов в течении двух недель, стоимость разработки от 10000 рублей.
					</td>
				</tr>
			</table>	
		</div>

		<div class="article">
			<h1>Интернет-магазины</h1>
			<table class="services-list">
				<tr>
					<td><img src="img/current.png" height="80" width="80"></td>
					<td><img src="img/graph.png" height="80" width="80"></td>
				</tr>
				<tr>
					<th>Что мы делаем?</th>
					<th>Сроки и цены</th>
				</tr>
				<tr>
					<td>
						Создание интернет-магазина на основе одной из CMS(1С-Битрикс, Joomla, Drupal, WordPress).
					</td>
					<td>
						Сроки и цены сильно зависят от размера интернет-магазина и технологий. Обычно создается в течение нескольких недель, стоимость за разработку сайта от 20000 рублей.
					</td>
				</tr>
			</table>	
		</div>

		<div class="marker">
			<span id="other">Прочие полезные</span>
			Поддержка уже готовых сайтов
		</div>

		<div class="article">
			<h1>Поддержка уже готовых сайтов</h1>
			<table class="services-list">
				<tr>
					<td><img src="img/current.png" height="80" width="80"></td>
					<td><img src="img/graph.png" height="80" width="80"></td>
				</tr>
				<tr>
					<th>Что мы делаем?</th>
					<th>Сроки и цены</th>
				</tr>
				<tr>
					<td>
						Дорабатываем функционал, исправляем ошибки, улучшаем качество кода и т.д.
					</td>
					<td>
						Задачи оцениваются программистами по трудоемкости в часах, стоимость одного часа - 300 рублей.
					</td>
				</tr>
			</table>	
		</div>

		<div class="article">
			<h1>Хостинг</h1>
			<table class="services-list">
				<tr>
					<td><img src="img/current.png" height="80" width="80"></td>
					<td><img src="img/graph.png" height="80" width="80"></td>
				</tr>
				<tr>
					<th>Что мы делаем?</th>
					<th>Сроки и цены</th>
				</tr>
				<tr>
					<td>
						Находим подходящий хостинг, размещаем сайт и поддерживаем стабильную работу.
					</td>
					<td>
						Размещаем сайт на хостинге в течение дня, стоимость за год от 1000 рублей.
					</td>
				</tr>
			</table>	
		</div>
<?
	require_once($_SERVER['DOCUMENT_ROOT']."/include/footer.php");
?>