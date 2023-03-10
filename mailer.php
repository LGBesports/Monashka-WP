<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$location = $_POST['location'];
$letter  = $_POST['letter'];



$name = htmlspecialchars($name);
$location = htmlspecialchars($location);
$phone = htmlspecialchars($phone);
$letter = htmlspecialchars($letter);


$name = urldecode($name);
$location = urldecode($location);
$phone = urldecode($phone);
$letter = urldecode($letter);


$name = trim($name);
$location = trim($location);
$phone = trim($phone);
$letter = trim($letter);
// Сообщение
$message = "ФИО:".$name."\r\nТелефон:".$phone."\r\nЛокация:".$location."\r\nСообщение:".$letter."";

// На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()
$message = wordwrap($message, 70, "\r\n");



if (mail('monashkaglk@yandex.ru', 'Новая заявка!', $message,"From: contactform@sniiinp.ru \r\n"))
{
    header('Location: /wp-content/themes/blank-wordpress-theme-master/pop-finish.html');
} else {
    echo "при отправке сообщения возникли ошибки";
}
?>