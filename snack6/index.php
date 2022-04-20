<?php 
    // Utilizzare questo array: https://pastebin.com/CkX3680A. 
    // Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>

    <style>
        main.container {
            display: flex;
            margin: 50px;
            justify-content: center;
            align-items: center;
        }
        .teachers {
            background-color: grey;
            margin-right: 10px;
        }
        .teachers, 
        .pm {
            padding: 15px;
            color: white;
            width: 200px;
        }
        .pm {
            background-color: green;
        }
    </style>
</head>
<body>
    <main class="container">
        <div class="teachers">
            <p>
                <?php 
                    for($i = 0; $i < count($db["teachers"]); $i++) {
                        echo $db["teachers"][$i]["name"] . " " . $db["teachers"][$i]["lastname"];
                    }
                ?>
            </p>
        </div>
        <div class="pm">
            <p>
                <?php 
                    for($i = 0; $i < count($db["pm"]); $i++) {
                        echo $db["pm"][$i]["name"] . " " . $db["pm"][$i]["lastname"];
                    }
                ?>
            </p>
        </div>
    </main>
</body>
</html>
