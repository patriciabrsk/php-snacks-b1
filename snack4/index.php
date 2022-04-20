<?php 
    // Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta

    $rand_array = [];
    for ($i = 0; $i < 15; $i++) {
        $random_num = rand();
        if(!in_array($random_num, $rand_array)) {
            array_push($rand_array, $random_num);
        }
    }
    var_dump($rand_array);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>
    <main>
        <?php 
            // echo "<table>";
            // echo $rand_array;
            // echo "</table>";
        ?>
    </main>
</body>
</html>