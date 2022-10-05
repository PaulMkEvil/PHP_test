<html lang="ru">
<head>
    <title>Makeev Pavel IKBO-30-20</title>
    <link rel="stylesheet" href="task.css" type="text/css" />
</head>
<body>
    <table>
        <?php
        $number = $_GET['num'];
            switch($number){
                case 1:
                    echo "<div class='d1'></div>";
                    break;
                case 2:
                    echo "<div class='d2'></div>";
                    break;
                case 3:
                    echo "<div class='d3'></div>";
                    break;
                case 4:
                    echo "<div class='d13'></div>";
                    break;
            }
        ?>
    </table>
</body>
</html>