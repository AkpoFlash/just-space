<?php
	include("includes/functions.php");
	include("includes/header.php");
?>
	
	<div class="content">
		<div class="row">
			<div class="block content-left">
				<h2>Потерялись в пучине бизнеса? Пройдите этот тест</h2>
				<br>
				<div class="test">
					<div class="test-data">
						Вы начинающий предприниматель?
						<br>
						<br>
						У вас уже есть готовый проект/идея?
						<br>
						<br>
						Вы уже пробывали ее реализовать?
						<br>
						<br>
						Хотите ли вы непрерывно развиваться?
					</div>
						<div class="test-form">
							<form action="test.php" method="POST" enctype="multipart/form-data" name="test_form">
							<input type="radio" name="skill"> Да&nbsp
							<input type="radio" name="skill"> Нет
							<br>
							<br>
							<input type="radio" name="project"> Да&nbsp
							<input type="radio" name="project"> Нет
							<br>
							<br>
							<input type="radio" name="realization"> Да&nbsp
							<input type="radio" name="realization"> Нет
							<br>
							<br>
							<input type="radio" name="evolution"> Да&nbsp
							<input type="radio" name="evolution"> Нет
							<br>
							<br>
							<input type="submit" class="btn btn-block">
							</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?php
	include("includes/footer.php");
?>