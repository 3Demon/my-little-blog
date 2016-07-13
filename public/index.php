<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>My Little Blog</title>
    </head>
    <body>
        <h1><?php echo 'My Little Blog'; ?></h1>
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

            $rows = mysqli_num_rows($result); // количество полученных строк

            echo "<table><tr><th>Id</th><th>Автор</th><th>Время</th><th>Текст</th></tr>";
            for ($i = 0; $i < $rows; ++$i) {
                $row = mysqli_fetch_row($result);
                echo "<tr>";
                for ($j = 0; $j < 4; ++$j) {
                    echo "<td>$row[$j]</td>";
                }
                echo "</tr>";
            }
            echo "</table>";

            // очищаем результат
            mysqli_free_result($result);
        }
        // закрываем подключение
        mysqli_close($link);
        ?>

    </body>


</html>
