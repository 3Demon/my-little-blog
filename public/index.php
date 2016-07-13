<!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>My Little Blog</title>
    </head>
    <body>
    <h1><?php echo 'My Little Bloh'; ?></h1>
    </body>

    <?php
    require_once __DIR__ . '/../connection.php'; // подключаем скрипт

    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));

    // выполняем операции с базой данных
    $sql = "SELECT * FROM `posts` LIMIT 0, 30 ";
    $result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));
    if ($result) {
        echo "Выполнение запроса прошло успешно";
    }
    // закрываем подключение
    mysqli_close($link);
    ?>

</html>
