<?php
session_start();
?>
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
    <button type="submit" name="calcular">Calcular3num mas grandes</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['calcular'])) {
    if (!isset($_SESSION['arreglo'])) {
        $_SESSION['arreglo'] = [];
        for ($i = 0; $i < 50; $i++) {
            $_SESSION['arreglo'][] = rand(1, 100);
        }
    }
    echo implode(", ", $_SESSION['arreglo']); 
        $c = $_SESSION['arreglo']; 
        rsort($c);                
        echo "<h2>Los 3 números más grandes:</h2>". $c[0]. " ". $c[1]. " ". $c[2];
    }
    ?>
    
</body>
</html>
