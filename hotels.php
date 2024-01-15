<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-hotels</title>
</head>
<body>

<!-- andrò a creare un form con una richiesta GET che permette di filtrare gli hotel che hanno il parcheggio- !-->
    
<form method="get">
    <label for="filter_parking">Mostra solo hotel con i parcheggi</label>
    <input type="checkbox" name="filter_parking" id="filter_parking">
    <button type ="submit">Filtra</button>
</form>

</body>
</html>


<!-- andrò a realizzare un array di hotels!-->

<?php

$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
];


//Inserisco qua il filter per filtrare per la ricerca dei hotel con solo parcheggi

    $filter_parking = isset($_GET['filter_parking']) && $_GET ['filter_parking'] ==='true';


//in questa parte dovrò usare foreach per stamparlo in pagina

foreach ($hotels as $hotel) {

    if ($filter_parking && !$hotel['parking'])

    echo "Nome: " . $hotel['name'] . "<br>";
    echo "Descrizione: " . $hotel['description'] . "<br>";
    echo "Parcheggio: " . $hotel['parking'] . "<br>";
    echo "Voto: " . $hotel['vote'] . "<br>";
    echo "Distanza dal centro: " . $hotel['distance_to_center'] . "<br>";
}
    ?>
