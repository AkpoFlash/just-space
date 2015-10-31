<?php
	include("includes/functions.php");
?>
<?php
	if(isset($_POST["review_sub"])){
		$name = "Имя/Псевдоним: " . $_POST["name"] . "\n";
		$review = "Текст отзыва: " . $_POST["review"] . "\n";
		$separator = "------------------------------------------------------------------\n";
		$file = fopen("link/review.txt","a+");
		fputs($file, $name);
		fputs($file, $review);
		fputs($file, $separator);
		fclose($file);

		$_SESSION["event"]["file"] = "Ваш отзыв отправлен, спасибо.";

		if(!empty($_FILES['image']['name'])){
			check_file_image();
		}
	}
?>
<?php
	include("includes/header.php");
?>
	<div class="content">
		<div class="row">
			<div class="block">
				<h2>Оставьте анонимный отзыв, чтобы улучшить нашу работу</h2>
				<br>
				<div class="review">
					<div class="review-data">
						Ваше имя, псевдоним<span>*</span>:
						<br>
						<br>
						Текст отзыва<span>*</span>:
						<br>
						<br>
						<br>
						<br>
						Скриншот:
						<br>
						<br>
					</div>
					<div class="review-form">
						<form action="reviews.php" method="POST" enctype="multipart/form-data" name="order_form">
							<input type="text" placeholder="Доброжелательный Клиент" name="name" <?php echo "value=\"".$_POST['name']."\""; ?> required autofocus>
							<br>
							<br>
							<textarea class="text-fild" name="review" required wrap="soft" placeholder="У меня возникли определенные проблемы, но ваша тех. поддержка их быстро решила, спасибо вам!"><?php echo $_POST['review']; ?></textarea>
							<br>
							<br>
							<input type="file" name="image">
							<br>
							<br>
							<input type="submit" class="btn btn-block" name="review_sub">
						</form>
					</div>
					<div class="notation">
						<span>*</span> обозначены обязательные поля
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		if(isset($_POST["review_sub"])){
			if(!empty($_POST["name"]) && !empty($_POST["review"])){
				echo "<script>alert('" . $_SESSION["event"]["file"] . "');</script>";
			}
		}
		$_SESSION["event"]["file"] = "";
	?>
<?php
	include("includes/footer.php");
?>