<?php

$phone_number = $_POST['phone_number'];

$phone_number = htmlspecialchars($phone_number);
$phone_number = urldecode($phone_number);
$phone_number = trim($phone_number);

mail("sale@iqsolar.com.ua", "Заявка з сайту", "Телефон: ".$phone_number, "From:info@iqsolar.com.ua");

if (mail("sale@iqsolar.com.ua", "Заявка з сайту", "Телефон: ".$phone_number, "From:info@iqsolar.com.ua"))
{
    echo "Ваш лист успішно відравлено";
} else {
    echo "При відправці сталася помилка";
}
?>