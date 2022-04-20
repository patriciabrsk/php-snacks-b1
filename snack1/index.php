
<?php 
    /**
    * Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
    * Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    * Stampiamo a schermo tutte le partite con questo schema.
    * Olimpia Milano - Cantù | 55-60
    *
    */
    $basketballGames = [
        [
            "team1" => "New York Knicks",
            "team2" => "Boston Celtics",
            "team1Pts" => "85",
            "team2Pts" => "62"
        ],
        [
            "team1" => "Bologna",
            "team2" => "Milano",
            "team1Pts" => "94",
            "team2Pts" => "70"
        ]
    ];

    // for($i=0, $i < count($basketballGames); $i++;) {
    //     echo $basketballGames[$i]["team1"] . " - " . $basketballGames[$i]["team2"] . 
    //     " | " . $basketballGames[$i]["team1Pts"] . " - " . $basketballGames[$i]["team2Pts"];
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <main>
        <?php for($i=0, $i < count($basketballGames); $i++;) { ?>
            <p><?php echo $basketballGames[$i]["team1"] . " - " . $basketballGames[$i]["team2"]; ?> | 
            <?php echo $basketballGames[$i]["team1Pts"] . " - " . $basketballGames[$i]["team2Pts"];?>
            </p>
        <?php }?>
    </main>
</body>
</html>