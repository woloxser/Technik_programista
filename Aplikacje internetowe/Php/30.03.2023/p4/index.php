<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $p = fopen('dane.txt','r');
        if($p == false)
        {
            echo "<br>Nie można otworzyc pliku";
        }
        else
        {
            while(!feof($p))
            {
                $line = fgets($p);
                $arr = explode(",",$line);
                sort($arr);
                $dl = count($arr);
                
                for($i = 0; $i < $dl;$i++)
                {
                    echo $arr[$i].",";
                    
                }
                echo " AVG = ".avg($arr)."<br>";
            }
        }

        function avg($tab)
        {
            $w = 0;
            for($i = 0; $i < count($tab);$i++)
            {
                $w = $w + intval($tab[$i]);
            }
            return round($w/count($tab), 2);
        }
    ?>
</body>
</html>