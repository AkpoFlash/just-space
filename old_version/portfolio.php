<?php
	include("includes/functions.php");
	include("includes/header.php");
?>

	<div class="content">
		<div class="row">
			<div class="span4 cube content-left portfolio" onmouseover="on_portfolio_link('1')" onmouseout="off_portfolio_link('1')">
				<img src="img/taxi-house.png" class="cube" alt="домтакси.рф">
				<a href="http://xn--80ahnhilyf.xn--p1ai/" target="_black" class="portfolio-link" id="1">домтакси.рф</a>
			</div>
			<div class="span4 cube content-center portfolio" onmouseover="on_portfolio_link('2')" onmouseout="off_portfolio_link('2')">
				<img src="img/doly-tula.png" class="cube" alt="доля-тула.рф">
				<a href="http://xn----8sbk2abp4ai9h.xn--p1ai/" target="_black" class="portfolio-link" id="2">доля-тула.рф</a>
			</div>
			<div class="span4 cube content-right portfolio" onmouseover="on_portfolio_link('3')" onmouseout="off_portfolio_link('3')">
				<img src="img/gazel-traffic.png" class="cube" alt="gazel-traffic.ru">
				<a href="http://www.gazel-traffic.ru/" target="_black" class="portfolio-link" id="3">gazel-traffic.ru</a>
			</div>
		</div>
	</div>
	
<?php
	include("includes/footer.php");
?>