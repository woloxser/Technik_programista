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
                echo "<br>".$line;
            }
        }
    ?>
</body>
</html>