<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
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

$parkingFilter = (isset($_GET['parking'])) && $_GET['parking'] == 1 ? true : false;


$finalHotels = $hotels;

if ( (isset($_GET['parking'])) && $_GET['parking'] == 1  ) {
    $temporaryArray = [];

    foreach ($finalHotels as $hotel) {
        if ($hotel['parking'] === true){
            $temporaryArray[] = $hotel;
        }
    }

    $finalHotels = $temporaryArray;
}

if ( (isset($_GET['vote'])) && $_GET['vote'] != 0 && is_numeric($_GET['vote']) ) {
    $temporaryArray = [];

    foreach ($finalHotels as $hotel) {
        if ($hotel['vote'] >= $_GET['vote']){
            $temporaryArray[] = $hotel;
        }
    }

    $finalHotels = $temporaryArray;
}


?>

<h1 class="text-center mt-5">
    HOTELS</h1>
<div class="container-table d-flex justify-content-center mt-5">
    <table class="table w-50">
        <thead>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Description
                </th>
                <th>
                    Parking
                </th>
                <th>
                    Vote
                </th>
                <th>
                    Distance to center
                </th>
            </tr>
        </thead>
        <tbody>
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
        </tbody>
    </table>
    </div>

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



</body>

</html>
