<?php
    $count = 0;
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>php-hotel</title>
</head>
<body>
    <header class="d-flex justify-content-center">
        <h1>
            PHP Hotel
        </h1>
    </header>
    <main>
        <section>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Parking</th>
                            <th scope="col">Vote</th>
                            <th scope="col">Distance_to_center</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach($hotels as $hotel){
                            $count++;
                    ?>
                        <tr>
                            <th scope="row"><?php echo $count ?></th>
                                <?php
                                    echo '<td>'.$hotel['name'].'</td>';
                                    echo '<td>'.$hotel['description'].'</td>';
                                    if($hotel['parking'] == true){
                                        echo '<td>'.'disponibili'.'</td>';
                                    }
                                    else{
                                        echo '<td>'.'finiti'.'</td>';
                                    }
                                    echo '<td>'.$hotel['vote'].'</td>';
                                    echo '<td>'.$hotel['distance_to_center'].'Km'.'</td>';
                                ?>
                        </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                </table>
        </section>
    </main>
</body>
</html>