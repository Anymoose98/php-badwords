<?php
    var_dump($_GET);
    $testo = $_GET['testo'];
    $parola = $_GET["parola"];

    $newTesto = str_replace($parola , "***" , $testo)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Pagina Censura</title>

</head>
<body class="m-3">
    <h3>Testo originale</h3>
    <p><?php echo $testo ?></p>

    <h3>Testo censurato</h3>
    <p> <?php echo $newTesto ?></p>
    
</body>
</html>