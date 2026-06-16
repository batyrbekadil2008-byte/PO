<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$file= fopen("messages.txt", "a");
fwrite($file,
"Имя: $name | Email: $email | Сообщение: $message\n"
);
fclose($file);

echo "<h2>Сообщение отправлено!</h2>";
echo "<a href='index.html'>Вернуться назад</a>";



?>
