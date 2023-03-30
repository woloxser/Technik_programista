<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "index.php" method="post">
        <p>Zdanie: <input type = "text" name = "sentence"></p>
        <p>Szukany wyraz: <input type = "text" name = "looked"></p>
        <p><input type = "submit" value="Szukaj"></p>
    </form>



    <?php
        if($_POST)
        {
            $zdanie = $_POST['sentence'];
            $szukane = $_POST['looked'];

            $tab = explode(" ",$zdanie);

            if(in_array($szukane,$tab))
            {
                echo "Wyraz jest w zdaniu";
            }
            else
            {
                echo "Nie ma tego wyrazu w zdaniu";
            }
        }
    ?>
</body>
</html>