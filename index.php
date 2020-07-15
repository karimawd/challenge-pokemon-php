<?php
if (isset($_GET['poke'])); {
    $pokeData = file_get_contents('https://pokeapi.co/api/v2/pokemon/' . $_GET['poke']);
    $dataSorting = json_decode($pokeData, true);
    $id = $dataSorting['id'];
    var_dump($dataSorting);  // (dump info about a variable. Displays structured info such as type and value of the given variable)
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Ajax Pokédex">
    <meta name="keywords" content="Pokémon game">
    <meta name="author" content="Yuri & Said">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <title>Pokémon Game</title>
</head>
<body>

<div class="container">
    <!-- Header -->
    <header>
        <span><img src="img/pokeball.png"></span><img src="img/pokemon.png" id="pokemon"><span><img src="img/pokeball.png"></span></h1>
    </header>
    <!-- Main -->
    <main>
        <form method="get" action="index.php" class="input-field">
            <input id="input" type="text" autocomplete="off" name="poke" placeholder="ID or Name Pokemon">
            <input id="button" aria-label="startSearch" type="submit" class="btn btn-danger" value="I choose you">
        </form>
        <section id="background">
            <div class="img-text" id="img-photo">
                <div id="pokeId" class="text-center"></div>
                <div id="name" class="text-center"></div>
                <div id="sprite"></div>
                <div id="moves" class="text-center"></div>
                <button id="prev" aria-label="previousSearch" type="button" class="btn btn-primary"></button>
                <button id="next" aria-label="nextSearch" type="button" class="btn btn-danger"></button>
            </div>
        </section>
    </main>
</div>

</body>
</html>