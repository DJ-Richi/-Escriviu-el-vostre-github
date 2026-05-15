<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Taula de Presentació</title>
</head>
<body>

<table border="1" cellpadding="8">
    <tr>
        <td>Nom</td>
        <td>
            <?php
                $nom = "Ricard";
                echo $nom;
            ?>
        </td>
    </tr>

    <tr>
        <td>Edat</td>
        <td>
            <?php
                $edat = 18;
                echo $edat;
            ?>
        </td>
    </tr>

    <tr>
        <td>Ciutat</td>
        <td>
            <?php
                $ciutat = "Batea";
                echo $ciutat;
            ?>
        </td>
    </tr>
</table>

</body>
</html>
