<?php
// Получение данных с формы отправки данных  
$phone = $_POST['phone'];
$name = $_POST['name'];

// Подготовка сообщения
$message = "Номер телефона: $phone\nИмя: $name";

// Отправка письма
if (mail("Vlad.getmanov.2014@gmail.com", "Данные из формы", $message)) {
    
    echo '<a href="index.php"><img class="logo" src="Pictures/logo.avif.png" width="60"></a>';
    echo "Письмо успешно отправлено.";
    echo '<button  type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"';
    echo 'aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">';
    echo '</button>';
} else {
    echo "Ошибка при отправке письма.";
}
