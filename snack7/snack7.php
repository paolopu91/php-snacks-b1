<!-- 
## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
 Stampare Nome, Cognome e la media dei voti di ogni alunno. 
-->

<?php
$classePrimaB = [
    [
        "name"=>"Daniele",
        "surname"=>"Lico",
        "voti" =>[
             7,
             8,
             5,
             6,
        ],
    ],
    [
        "name"=>"Flavio",
        "surname"=>"Gonnellini",
        "voti" =>[
             6,
             6,
             4,
            8,
        ],
    ],
    [
        "name"=>"Marcello",
        "surname"=>"Micarelli",
        "voti" =>[
            7,
            5,
             8,
            4,
        ],
    ],
    [
        "name"=>"Giuseppe Andrea",
        "surname"=>"Cencioni",
        "voti" =>[
             7,
             5,
             5,
             9,
        ],
    ],
];

//sommo i numeri dentro il mio array di voti
var_dump($classePrimaB);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Prima B</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <h1 class="text-center text-primary">SEZIONE PRIMA B</h1>
    </header>
    <main>
        <div class="container text-center py-5">
            <?php for($i = 0; $i<count($classePrimaB); $i++ ){

            ?>
            <div>
                <h2>
                <!-- name -->
                <?php echo  "<strong>Nome Alunno</strong> : " . $classePrimaB[$i]["name"]?>
                </h2>

                <h2>
                    <!-- surname -->
                    <?php echo "<strong>Cognome Alunno</strong>: " . $classePrimaB[$i]["surname"]?>
                </h2>
            </div>
            

                <h5>
                    <!-- media voti -->
                    <?php  

                    $somma = array_sum($classePrimaB[$i]["voti"]);

                    $media = $somma / count($classePrimaB[$i]["voti"]);

                    echo "Media scolastica :" .$media;
                    ?>
                </h5>
            <?php } ?>
        </div>
    </main>
</body>
</html>