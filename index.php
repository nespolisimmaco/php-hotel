<?php
// Hotels array
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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Bootsrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
  <h1>Hotel</h1>
  <!-- Table -->
  <table class="table table-striped">
    <!-- Head of table -->
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Hotel</th>
        <th scope="col">Description</th>
        <th scope="col">Parking</th>
        <th scope="col">Vote</th>
        <th scope="col">Distance to center</th>
      </tr>
    </thead>
    <!-- Head of table -->

    <!-- Table body -->
    <tbody>
      <!-- For loop -->
      <?php foreach ($hotels as $key => $hotel) { ?>
        <!-- Table row -->
        <tr>
          <th scope="row"><?php echo $key + 1; ?></th>
          <td><?php echo $hotel['name']; ?></td>
          <td><?php echo $hotel['description']; ?></td>
          <td><?php echo $hotel['parking']; ?></td>
          <td><?php echo $hotel['vote']; ?></td>
          <td><?php echo $hotel['distance_to_center']; ?></td>
        </tr>
        <!-- End Table row -->
      <?php } ?>
      <!-- End For loop -->
    </tbody>
    <!-- End Table body -->
  </table>
  <!-- End Table -->
</body>

</html>