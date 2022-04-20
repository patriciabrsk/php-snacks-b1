<?php 
    // Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta

    $rand_array = [];
    while (count($rand_array) < 15) {
        $rand_num = rand(1,100);
        if(!in_array($rand_num, $rand_array)) {
            $rand_array[] = $rand_num;
        }
    }
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
            var_dump($rand_array);
        ?>
    </main>
</body>
</html>