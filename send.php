<?php

    /* Принимаем данные из формы */
      $name = $_POST["name"];
      $email = $_POST["email"];
      $text_message = $_POST["text"];

    /* Подключаемся к БД */
    $db=mysqli_connect("localhost", "root","", "praktika");

    /* Записываем данные из формы в БД */
    $sql = "INSERT INTO makaki(name, email, text) VALUES ('$name', '$email', '$text_message')";
    $result=mysqli_query($db, $sql) or die("Ошибка в запросе!".mysql_error());
    echo 'Сообщение отправлено'

?>