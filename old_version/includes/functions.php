<?php

function select_title($title){
	switch($title){
		case "/index.php": echo " - Пиар-маркетинговая компания"; break;
		case "/services.php": echo " - Полный спект услуг"; break;
		case "/portfolio.php": echo " - Проекты созданные нами"; break;
		case "/order.php": echo " - Оформите заказ за 1 минуту"; break;
		case "/contact.php": echo " - Мы всегда на связи"; break;
		case "/test.php": echo " - Неопределились? Пройдите тестирование"; break;
	}
}

function current_page(){
	switch($title){
		case "/index.php": echo " - Пиар-маркетинговая компания"; break;
		case "/services.php": echo " - Полный спект услуг"; break;
		case "/portfolio.php": echo " - Проекты созданные нами"; break;
		case "/order.php": echo " - Оформите заказ за 1 минуту"; break;
		case "/contact.php": echo " - Мы всегда на связи"; break;
		case "/test.php": echo " - Неопределились? Пройдите тестирование"; break;
	}
}

function extract_type($mime_type){
	$type = explode("/", $mime_type);
	return $type[1];
}

function check_file_text(){

		$type = $_FILES['text_file']['type'];
		$text_type = extract_type($type);
		$size = $_FILES['text_file']['size'];
		$allowable = array("application/pdf", "application/zip", "application/x-gzip", "text/plain", "application/msword", "application/vnd.openxmlformats-officedocument.wordprocessingml.document", "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" , "application/vnd.openxmlformats-officedocument.presentationml.presentation");
		$banlist = array(".php", ".phtml", ".php3", ".php4", ".html", ".htm", "js", "exe", "cmd", "bat");

		if(isset($type) && isset($size)){
			foreach($banlist as $item){
				if(preg_match("/$item\$/i", $_FILES['text_file']['name'])){
					$_SESSION["event"]["file"] .= " Неподдерживаемый тип файла.";
					return 0;
				}
			}
			
			foreach($allowable as $elem){
				if($type == $elem){
					if($size <= 5242880){
						$dir = "link/";
						$way = $dir . basename($_FILES['text_file']['name']);
						copy($_FILES['text_file']['tmp_name'], $way);
						$_SESSION["event"]["file"] .= " Файл успешно отправлен.";
						return 1;
					}
				}
			}
			$_SESSION["event"]["file"] .= " Файл не может быть загружен, проверьте размер файла (до 5 Мб), а так же желательно использовать формат .doc или .docx";
			return 0;
		}
	}

function check_file_image(){
		$type = $_FILES['image']['type'];
		$size = $_FILES['image']['size'];
		$allowable = array("image/gif", "image/jpeg", "image/pjpeg", "image/png", "image/svg+xml", "image/tiff", "image/vnd.microsoft.icon", "image/vnd.wap.wbmp");
		$banlist = array(".php", ".phtml", ".php3", ".php4", ".html", ".htm", "js", "exe", "cmd", "bat");

		if(isset($type) && isset($size)){
			foreach($banlist as $item){
				if(preg_match("/$item\$/i", $_FILES['image']['name'])){
					$_SESSION["event"]["file"] .= " Неподдерживаемый тип файла.";
					return 0;
				}
			}
			
			foreach($allowable as $elem){
				if($type == $elem){
					if($size <= 5242880){
						$dir = "link/";
						$way = $dir . basename($_FILES['image']['name']);
						copy($_FILES['image']['tmp_name'], $way);
						$_SESSION["event"]["file"] .= " Файл успешно отправлен.";
						return 1;
					}
				}
			}
			$_SESSION["event"]["file"] .= " Файл не может быть загружен, проверьте размер файла (до 5 Мб), а так же желательно использовать популярные форматы изображения (.jpeg .png .tiff)";
			return 0;
		}
	}

?>