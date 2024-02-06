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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- CSS -->
    <!-- <link rel="stylesheet" href="css/12-col.css"> -->
    <link rel="stylesheet" href="css/style.css">

    <title>PHP Hotel</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center pt-4">
            PHP HOTEL
        </h1>

        <div>
            <table class="table">
                <thead class="thead-dark text-center">
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distance to Center</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                        foreach ($hotels as $hotel) {
                            echo '<tr>';
                            echo '<td>'.$hotel['name'].'</td>';
                            echo '<td>'.$hotel['description'].'</td>';
                            echo '<td>'.($hotel['parking'] ? 'Available' : 'Not Available').'</td>';
                            echo '<td>'.$hotel['vote'].'/5</td>';
                            echo '<td>'.$hotel['distance_to_center'].' Km</td>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>