<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arreglo</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form method="POST" action="">
    <button type="submit" name="calcular">calcular</button>
     </form>
<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['calcular'])) {
        
    $arreglo = [];
   for ($i = 0; $i < 50; $i++) {
    $arreglo[] = rand(1, 50);
    }
    echo implode(", ",$arreglo);
    }
    ?>
</body>
</html>