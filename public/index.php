<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>My Little Blog</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&subset=cyrillic,cyrillic-ext"
              rel="stylesheet">

        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>


        <div id="wrapper">
            <aside><h1><?php echo 'My Little Blog'; ?></h1></aside>
            <section>
                <?php
                require_once __DIR__ . '/../connection.php'; // подключаем скрипт

                // подключаемся к серверу
                $link = mysqli_connect($host, $user, $password, $database);
                if (!$link) {
                    die('Ошибка ' . mysqli_connect_error());
                }

                // выполняем операции с базой данных
                $sql = 'SELECT * FROM `posts` LIMIT 0, 30';
                $result = mysqli_query($link, $sql) or die('Ошибка ' . mysqli_error($link));
                if ($result) {

                    $rows = mysqli_num_rows($result); // количество полученных строк

                    for ($i = 0; $i < $rows; ++$i) {
                        $row = mysqli_fetch_row($result);
                        echo "<div class='postwrap'>";
                        echo "<article class='post'>";
                        echo "<h2>$row[1]<br></h2>";
                        echo "$row[3]";
                        echo "</article>";
                        echo "</div>";
                    }

                    // очищаем результат
                    mysqli_free_result($result);
                }
                // закрываем подключение
                mysqli_close($link);
                ?>
            </section>
        </div>


        <script src="js/main.js"></script>
    </body>
</html>
