<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Targeta Personal</title>

    <style>
        .targeta {
            width: 300px;
            padding: 20px;
            border-radius: 10px;
            background-color: #f2f2f2;
            text-align: center;
            font-family: Arial, sans-serif;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            margin: 40px auto;
        }

        .targeta img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="targeta">
    <?php
        $nom = "Ricard";
        $data = date("d/m/Y");
        $missatge = "Benvingut a la meva targeta personal!";
        $imatge = "https://i.imgur.com/4ZQZ4ZC.jpeg"; // Pots posar una imatge local
    ?>

    <img src="<?php echo $imatge; ?>" alt="Foto personal">

    <h2><?php echo $nom; ?></h2>

    <p><?php echo $missatge; ?></p>

    <p>Data actual: <?php echo $data; ?></p>
</div>

</body>
</html>
