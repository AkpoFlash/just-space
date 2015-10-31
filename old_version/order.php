<?php
	include("includes/functions.php");
?>
<?php
	if(isset($_POST["order_sub"])){
		$name = "Имя заказчика: " . $_POST["name"] . "\n";
		$email = "Контактный email: " . $_POST["email"] . "\n";
		$telephone = "Контактный телефон: " . $_POST["telephone"] . "\n";
		$description = "Описание задачи: " . $_POST["description"] . "\n";
		$separator = "------------------------------------------------------------------\n";
		$file = fopen("link/messange.txt","a+");
		fputs($file, $name);
		fputs($file, $email);
		fputs($file, $telephone);
		fputs($file, $description);
		if(!empty($_POST["cost"])){
			$cost = "Предположительный бюджет: " . $_POST["cost"] . " рублей" . "\n";
			fputs($file, $cost);
		}
		fputs($file, $separator);
		fclose($file);

		$_SESSION["event"]["file"] = "Ваша заявка отправлена. Мы с вами свяжемся.";

		if(!empty($_FILES['text_file']['name'])){
			check_file_text();
		}
	}
?>
<?php
	include("includes/header.php");
?>

	<div class="content">
		<div class="row">
			<div class="block">
				<h2>Спасибо что выбираете нас, заполните заявку, мы с вами свяжемся</h2>
				<br>
				<div class="order">
					<div class="order-data">
						Ваше имя, полностью<span>*</span>:
						<br>
						<br>
						Контактный E-mail<span>*</span>:
						<br>
						<br>
						Контактный телефон<span>*</span>:
						<br>
						<br>
						Описание задачи<span>*</span>:
						<br>
						<br>
						<br>
						<br>
						Предположительный бюджет (руб):
						<br>
						<br>
						Техническое задание (до 5 Мб):
						<br>
						<br>
					</div>
					<div class="order-form">
						<form action="order.php" method="POST" enctype="multipart/form-data" name="order_form">
							<input type="text" placeholder="Иванов Иван Иванович" name="name" <?php echo "value=\"".$_POST['name']."\""; ?> autofocus required>
							<br>
							<br>
							<input type="email" placeholder="my_email@gmail.com" name="email" <?php echo "value=\"".$_POST['email']."\""; ?> required>
							<br>
							<br>
							<input type="tel"  placeholder="+7 920 276 29 50" name="telephone" <?php echo "value=\"".$_POST['telephone']."\""; ?> required>
							<br>
							<br>
							<textarea class="text-fild" name="description"  wrap="soft" required placeholder="Мы хотим заказать у вас интернет-магазин, основное направление магазина - продажа спортивных товаров."><?php echo $_POST['description']; ?></textarea>
							<br>
							<br>
							<input type="number" min="1000" name="cost" <?php echo "value=\"".$_POST['cost']."\""; ?> onkeyup="check_email_field()">
							<br>
							<br>
							<input type="file" name="text_file">
							<br>
							<br>
							<input type="submit" class="btn btn-block" name="order_sub" id="submit_button">
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
		if(isset($_POST["order_sub"])){
			if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["telephone"]) && !empty($_POST["description"])){
				echo "<script>alert('" . $_SESSION["event"]["file"] . "');</script>";
			}
		}
		$_SESSION["event"]["file"] = "";
	?>
<?php
	include("includes/footer.php");
?>