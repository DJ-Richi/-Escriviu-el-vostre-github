<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Pàgina amb PHP</title>
</head>
<body>

    <h1>Benvingut!</h1>

    <p>
        <?php
            $missatge = "Aquest missatge està generat amb PHP dins d'un paràgraf HTML.";
            echo $missatge;
        ?>
    </p>

</body>
</html>
