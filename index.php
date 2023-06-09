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
  $showParking = false;
  if (isset ($_POST ['parking'])){
    $showParking = true;
  }elseif (isset($_POST['show_all'])) {
    $showParking = false;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
  <title>hotel</title>
</head>
<body>
  <div class="container text-center">
    <form action="index.php" method="POST">
      <?php if (!$showParking): ?>
      <button type="submit" name="parking" class="btn btn-warning">Mostra solo gli hotel con parcheggio</button>
      <?php else: ?>
      <button type="submit" name="show_all" class="btn btn-warning"> Mostra tutti gli Hotel</button>  
      <?php endif; ?>
        
    </form>
  <ul>
    <?php foreach($hotels as $hotel): ?>
      <?php if ($showParking && !$hotel['parking']) continue; ?>
    <li>
      <h2> <?php echo $hotel['name']; ?> </h2>
      <p> <?php echo $hotel['description']; ?> </p>
      <p>Parking : <?php echo $hotel ['parking'] ? 'Yes' : 'No'; ?> </p>
      <p>Vote : <?php echo $hotel ['vote']; ?></p>
      <p>Distance to center: <?php echo $hotel['distance_to_center']; ?> km </p>
    </li>  
    <?php endforeach; ?>
  </ul>


  </div>


</body>

<style>
        body {
            background-color: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .btn {
            background-color: #ff9800;
            border: none;
            color: white;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 20px;
        }

        .btn {
            margin-bottom: 60px;
            padding: 20px 20px;
        }
    </style>

</html>