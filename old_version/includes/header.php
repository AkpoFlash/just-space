<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<?php
		$url = $_SERVER['REQUEST_URI'];
		$file_name = parse_url($url, PHP_URL_PATH);
	?>
	<title>Just Space<?php select_title($file_name); ?></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/javascript.js"></script>
</head>
<body>
<div class="container">
	<!-- Main navigation -->
	<div class="navbar navbar-fixed-top" style="position: absolute;">
		<div class="navbar-inner navigation">
			<div class="container" style="width: auto; padding: 0 20px;" >
				<span class="brand"><img src="img/JS.png" class="logo" alt=""> Just Space</span>
				<ul class="nav">
					<li <?php if("/index.php" == $file_name || "/" == $file_name){echo "class='active'";}?> >
						<a href="index.php">Главная</a>
					</li>
					<li <?php if("/services.php" == $file_name){echo "class='active'";}?> >
						<a href="services.php">Услуги</a>
					</li>
					<li <?php if("/portfolio.php" == $file_name){echo "class='active'";}?> >
						<a href="portfolio.php">Портфолио</a>
					</li>
					<li <?php if("/order.php" == $file_name){echo "class='active'";}?> >
						<a href="order.php">Оформить заказ</a>
					</li>
					<li <?php if("/contact.php" == $file_name){echo "class='active'";}?> >
						<a href="contact.php">Контакты</a>
					</li>
					<li <?php if("/test.php" == $file_name){echo "class='active'";}?> >
						<a href="test.php">Тест</a>
					</li>
					<li <?php if("/partners.php" == $file_name){echo "class='active'";}?> >
						<a href="partners.php">Партнеры</a>
					</li>
					<li <?php if("/vacancies.php" == $file_name){echo "class='active'";}?> >
						<a href="vacancies.php">Вакансии</a>
					</li>
					<li <?php if("/reviews.php" == $file_name){echo "class='active'";}?> >
						<a href="reviews.php">Отзывы</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row" id="slider">
		<div class="viewport">
		    <ul class="slidewrapper" data-current=0>
		        <li class="slide">
		            <img alt=""  src="slide/1.png"/>
		        </li>
		        <li class="slide second">
		            <img alt="" src="slide/2.png"/>
		        </li>
		        <li class="slide third">
		            <img alt="" src="slide/3.png"/>
		        </li>
		    </ul>
    		<p>
				<a class="left carousel-control slide-control" href="javascript: void(0)" id="prev_slide" data-slide="prev">‹</a>
				<br />
				<a class="right carousel-control slide-control" href="javascript: void(0)" id="next_slide" data-slide="next">›</a>
			</p>
		</div>
	</div>
	<script>
		var id = "slider";
		var slideWidth=document.getElementById(id).offsetWidth;
		var sliderTimer;
		$(function(){
		$('.slidewrapper').width($('.slidewrapper').children().size()*slideWidth);
		    sliderTimer=setInterval(nextSlide,4000);
		    $('.viewport').hover(function(){
		        clearInterval(sliderTimer);
		    },function(){
		        sliderTimer=setInterval(nextSlide,4000);
		    });
		    $('#next_slide').click(function(){
		        clearInterval(sliderTimer);
		        nextSlide();
		        sliderTimer=setInterval(nextSlide,4000);
		    });
		    $('#prev_slide').click(function(){
		        clearInterval(sliderTimer);
		        prevSlide();
		        sliderTimer=setInterval(nextSlide,4000);
		    });
		});

		function nextSlide(){
		    var currentSlide=parseInt($('.slidewrapper').data('current'));
		    currentSlide++;
		    if(currentSlide>=$('.slidewrapper').children().size())
		    {
		        currentSlide=0;   
		    }
		    $('.slidewrapper').animate({left: -currentSlide*slideWidth},slideWidth).data('current',currentSlide);
		}

		function prevSlide(){
		    var currentSlide=parseInt($('.slidewrapper').data('current'));
		    currentSlide--;
		    if(currentSlide<0)
		    {
		        currentSlide=$('.slidewrapper').children().size()-1;   
		    }
		    $('.slidewrapper').animate({left: -currentSlide*slideWidth},slideWidth).data('current',currentSlide);
		}
	</script>