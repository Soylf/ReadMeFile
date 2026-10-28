<?php
    $name = $_POST['user_name'] ?? "Короче, нет значений";
    $message = $_POST['user_message'] ?? "Тут ничего не напесюнькано, вот";
    $text = "Имя: " . $name . "\nСообщение: " . $message . "\n";

    file_put_contents(__DIR__ . "/text_bd/data.txt", $text);

    echo "Данные сохранены";
?>