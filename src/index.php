<?php

$date = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
setcookie("produto", "TV Panasonic", $date->getTimestamp() + 60);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello World!</h1>
    <?php

    if (isset($_COOKIE['produto'])) {

        echo '<p><b>Produto:</b> ' . $_COOKIE['produto'] . '</p>';
    }

    phpinfo();

    ?>
</body>

</html>