<!-- 

## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60

-->

<?php 
$basketGames = [
    [
        "homeTeam" => "Atlanta Hawks",
        "visitingTeam" => "Boston Celtics",
        "pointsHomeTeam" => rand(40, 150),
        "pointsVisitingTeam" => rand(40,150),
    ],
    [
        "homeTeam" => "Chicago Bulls",
        "visitingTeam" => "Charlotte Hornets",
        "pointsHomeTeam" => rand(40, 150),
        "pointsVisitingTeam" => rand(40,150),
    ],
    [
        "homeTeam" => "Brooklyn Nets",
        "visitingTeam" => "Cleveland Cavaliers",
        "pointsHomeTeam" => rand(40, 150),
        "pointsVisitingTeam" => rand(40,150),
    ],
    [
        "homeTeam" => "Miami Heat",
        "visitingTeam" => "New York Knicks",
        "pointsHomeTeam" => rand(40, 150),
        "pointsVisitingTeam" => rand(40,150),
    ],
    [
        "homeTeam" => "Detroit Pistons",
        "visitingTeam" => "Orlando Magic",
        "pointsHomeTeam" => rand(40, 150),
        "pointsVisitingTeam" => rand(40,150),
    ],
    [
        "homeTeam" => "Philadelphia 76R",
        "visitingTeam" => "Indiana Pacers",
        "pointsHomeTeam" => rand(40, 150),
        "pointsVisitingTeam" => rand(40,150),
    ],
    [
        "homeTeam" => "Toronto Raptors",
        "visitingTeam" => "Milwaukee Bucks",
        "pointsHomeTeam" => rand(40, 150),
        "pointsVisitingTeam" => rand(40,150),
    ],
    [
        "homeTeam" => "Dallas Mavericks",
        "visitingTeam" => "Denver Nuggets",
        "pointsHomeTeam" => rand(40, 150),
        "pointsVisitingTeam" => rand(40,150),
    ],
];

// var_dump($basketGames);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BaketGames</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <header>
    <!-- title snack -->
    <div>
        <h1 class="text-primary text-center">BASKET GAMES</h1>
    </div>
    </header>

    <main>
    <!-- result of array in php -->
    <div class="container text-center">
    <?php for($i; $i<count($basketGames); $i++){
        ?>
        <span>
            <?php echo $basketGames[$i]["homeTeam"]; ?> 
        </span>
        <span> <?php echo $basketGames[$i]["PointsHomeTeam"]; ?> </span>
        <br>
        <span>
            <?php echo $basketGames[$i]["visitingTeam"]; ?> 
        </span>
        <span> 
            <?php echo $basketGames[$i]["PointsVisitingTeam"]; ?> 
        </span>
        
    <?php } ?>
    </div>
    </main>

</body>
</html>



