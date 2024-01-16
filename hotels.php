<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-hotels</title>
</head>
<body>

<table class="table table-red table-hover w-50 mx-auto my-auto">
        <thead>
            <tr>
                <th>
                    Nome
                </th>
                <th>
                    Descrizione
                </th>
                <th>
                    Parcheggio
                </th>
                <th>
                    Voto
                </th>
                <th>
                    Distanza Dal Centro
                </th>
            </tr>
        </thead>
        <tbody>
        <?php if (isset($finalHotels) && is_array($finalHotels)) { ?>
    <?php foreach ($finalHotels as $hotel) { ?>
        <tr>
            <td>
                <?php echo $hotel['name']; ?>
            </td>
            <td>
                <?php echo $hotel['description']; ?>
            </td>
            <td>
                <?php echo $hotel['parking']; ?>
            </td>
            <td>
                <?php echo $hotel['vote']; ?>
            </td>
            <td>
                <?php echo $hotel['distance_to_center']; ?>
            </td>
        </tr>
        <?php } ?>
    <?php } ?>
</tbody>
    </table>

<div class="container">
        <div class="row">
            <form action="./hotels.php" method="GET">
                <div class="mb-3 form-check">
                    <select class="form-select mb-2 w-50 mx-auto my-auto mt-5" aria-label="Default select example" id="vote" name="vote">
                        <option selected value="0">Selezionare un minimo di stelle</option>
                        <option value="1">Una Stella</option>
                        <option value="2">Due Stelle</option>
                        <option value="3">Tre Stelle</option>
                        <option value="4">Quattro Stelle</option>
                        <option value="5">Cinque Stelle</option>
                    </select>
                </div>
                <div class="mb-3 form-check my-auto mx-auto text-center">
                <select class="form-select mb-2 w-50 mx-auto my-auto" aria-label="Default select example" id="parking" name="parking">
                    <option value="">Selezionare il parcheggio</option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>

                    <div class="container-btn d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Invia</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-md-12 my-auto mx-auto text-center">
                <h1>Risultati della tua ricerca : </h1>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>

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


//in questa parte dovrò usare filtered per chiamare il get

$parkingFilter = (isset($_GET['parking']) && is_numeric($_GET['parking']) && $_GET['parking'] == 1) ? true : false;

//in questa parte dovrò usare foreach per stamparlo in pagina
foreach ($hotels as $hotel) {

    echo "Nome: " . $hotel['name'] . "<br>";
    echo "Descrizione: " . $hotel['description'] . "<br>";
    echo "Parcheggio: " . $hotel['parking'] . "<br>";
    echo "Voto: " . $hotel['vote'] . "<br>";
    echo "Distanza dal centro: " . $hotel['distance_to_center'] . "<br>";
}



?>


