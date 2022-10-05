<html lang="ru">
<head>
    <title>Makeev Pavel IKBO-30-20</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <?php
    $num = $_GET["num"];
    if($num){
        echo 'sosiska ' . $num . ' !';
    }
    else {
        echo "pososi bes sosiski";
    }
    ?>
</body>
</html>