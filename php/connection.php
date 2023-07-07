<?php

//получаем данные из формы
$name = filter_var(trim($_POST['name']), FILTER_UNSAFE_RAW);
$mail = filter_var(trim($_POST['mail']), FILTER_UNSAFE_RAW);
$number = filter_var(trim($_POST['number']), FILTER_UNSAFE_RAW);
$description = filter_var(trim($_POST['description']), FILTER_UNSAFE_RAW);

if(mb_strlen($name) < 0 || mb_strlen($name) > 100) {
    echo "Заполните свое имя";
    exit();
} else if(mb_strlen($mail) < 0 || mb_strlen($mail) > 50) {
    echo "Укажите свой e-mail";
    exit();
} else if(mb_strlen($number) < 0 || mb_strlen($number) > 12) {
    echo "Укажите свой номер телефона";
    exit();
} else if(mb_strlen($description) < 0 || mb_strlen($description) > 100) {
    echo "Укажите кого хотите забрать";
    exit();
}

//подключение к базе данных
$mysqli = new mysqli('127.0.0.1:3306', 'root', 'root', 'shelter');

//проверка соединения с базой
if ($mysqli -> connect_errno) {
    echo "Подключение невозможно: " . $mysqli -> connect_errno;
    exit();
}

//внесем данные в таблицу из формы
$mysqli->query("INSERT INTO `Bron` (`name`, `email`, `phone`, `animals`)
VALUES('$name', '$mail', '$number', '$description')");

//закрываем соединение с базой данной
$mysqli->close();

//переход на главную страницу после отправки формы
header('Location:/')

?>