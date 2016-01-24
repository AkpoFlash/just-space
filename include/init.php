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

		if(mail("just.space.tula@gmail.com","Just Space - Заказ", $name . $telephone . $email . $cost . $description)){
			$_SESSION["event"]["file"] = "Ваша заявка отправлена. Мы с вами свяжемся.";
			mail($_POST["email"],"Just Space", "Благодарим вас за оформиление заказа на нашем сайте, по указанному телефону с вами свяжется наш менеджер.");
		}
	}
?>