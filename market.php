<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Market Place</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    
  <!-- Header -->
    <?php require 'partials/_header.php' ?>

    


<div class="container my-10">
  <div class="row">
  <?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "market";

  $conn = mysqli_connect($server, $username, $password, $database);
  if (!$conn) {
      die("Error: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM `shopping`";
  $result = mysqli_query($conn, $sql);
  $sno = 0;

  while ($row = mysqli_fetch_assoc($result)) {
      $sno = $sno + 1;
      if ($sno % 3 == 1) {
          echo "<div class='w-100'></div>";
      }
      echo "
      <div class='col-lg-3 col-md-3 col-sm-1'>
        <div class='card shadow-sm'>

        <img class='bd-placeholder-img card-img-top' width='100%' height='225' src=".$row['image']."> 
          
          <div class='card-body'>
            <p class='card-text'>" . $row['name'] . "</p>
            <div class='d-flex justify-content-between align-items-center'>
              <div class='btn-group'>
                <button type='button' class='btn btn-sm btn-outline-secondary'>Add To Cart</button>
                <button type='button' class='btn btn-sm btn-outline-secondary'>Quantity</button>
              </div>
              <small class='text-body-secondary'>9 mins</small>
            </div>
          </div>
        </div>
      </div>";
  }

  mysqli_close($conn);
  ?>
</div>
</div>




 
   






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>