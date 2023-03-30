<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type = "text" name = "numbers">
        <input type = "submit" value = "posortuj">
    </form>


    <?php
        if($_POST)
        {
            $num = $_POST['numbers'];

            $tab = explode(",",$num);
            sort($tab);
            $dl = count($tab);

            for($i = 0; $i < $dl;$i++)
            {
                echo " ".$tab[$i];
            }
        }
    ?>
</body>
</html>