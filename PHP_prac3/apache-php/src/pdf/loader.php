<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Магазин игрушек</title>
    <style>
        * {
            font-family: Carlito;
        }

        body {
            height: 100%;
            width: 100%;
            background-image: url(https://2.bp.blogspot.com/-T4DKrOaEZA8/XR_GXTi1TzI/AAAAAAAAEQc/uAY-2EA2gL0KR-VbLqTwcGndltyToh76QCKgBGAs/w0/toy-story-4-characters-uhdpaper.com-4K-27.jpg);
            background-size: cover;
        }

        a {
            display: block;
            font-size: 25px;
            padding: 15px;
            text-decoration: none;
            color: black;
            background: rgb(156, 156, 225);
            width: fit-content;
            margin: 10px;
            border-radius: 5px;
            box-shadow: 10px 5px 5px black;
        }

        .container {
            background: white;
            width: 450px;
            height: 700px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
<form class="container" enctype="multipart/form-data" action="uploadpdf.php" method="POST">
    <div>
    <input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>
    <br>
    <label class="custom-file-label" for="file_field">Отправить этот файл:</label>
    <br>
    <input class="custom-file-input" id="file_field" name="userfile" type="file"/>
    </div>
    <br>
    <input  type="submit" value="Отправить файл"/>

    <?php
$files = scandir('./files');
if (count($files) <= 2) {
    echo "<h2>Нет загруженных файлов</h2>";
} else {
    echo "<h2>Загруженные файлы</h2>";
    foreach ($files as $file) {
        if ($file != "." and $file != "..") {
            echo "<div ><a  href='http://localhost:8080/pdf/uploadpdf/".$file."' download>".$file."</a></div>";
        }
    }
}
?>
</form>
</body>
</html>