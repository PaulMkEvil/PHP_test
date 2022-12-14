<html lang="ru">
<head>
    <title>Makeev Pavel IKBO-30-20</title>
    <link rel="stylesheet" href="task.css" type="text/css" />
</head>
<body>
    <table>
        <?php
            $array = insertion_sort(explode(",", $_GET['arr'])); 

            for ($i = 0; $i < count($array); $i++) {
                echo $array[$i] . " ";
            }

            function swap (&$array,$key1,$key2) 
            {
                list($array[$key1],$array[$key2]) = array($array[$key2],$array[$key1]);
                /* еще один вариант с третьей переменной
                $temp = $array[$key1];
                $array[$key1] = $array[$key2];
                $array[$key2] = $temp; 
                */
            }

            function insertion_sort ($s) 
            {
                $i = $j = 0; // счетчики
                if (is_array($s)) {
                    $n = count($s);
                } else {
                    $s = (string)$s;
                    $n = mb_strlen($s);
                }	
                for ($i=1; $i<$n; $i++) {
                    $j = $i;
                    while (($j>0) && ($s[$j] < $s[$j-1])) {
                        swap($s,$j,$j-1);
                        $j = $j-1;
                    }
                }
                return $s;
            }
        ?>
    </table>
</body>
</html>