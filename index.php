<?php

$huruf = "Halo dari backend";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <h1>Header Web</h1>
    </header>

    <main>
        <p>Dari backend</p>

        <?php echo $huruf; ?>

        <button id="btnKlik">Klik Saya</button>
    </main>

    <script src="js/script.js"></script>

</body>
</html>