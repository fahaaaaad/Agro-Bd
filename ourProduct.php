<?php

  session_start();

  include 'partials/_dbconnect.php';

  if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_quantity = $_POST['product_quantity'];

    $sql="SELECT * FROM `user` WHERE `username` LIKE '{$_SESSION['username']}' ";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      $name = $row['name'];
      $email = $row['email'];
      $phone = $row['mobile'];
      // $address = $row['sent_time'];
    }


    $sql = "SELECT * FROM `products` WHERE `product_id` = '$product_id' ";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['product_quantity'] > $product_quantity) {
            $updated_product_quantity = $row['product_quantity'] - $product_quantity;
            $updateSql = "UPDATE `products` SET `product_quantity` = '$updated_product_quantity' WHERE `products`.`product_id` = $product_id ";
            $updateResult = mysqli_query($conn, $updateSql);

            if ($updateResult) {
                $sql = "INSERT INTO `orders` (`order_id`, `username`, `name`, `email`, `phone`, `address`, `order_time`, `product_id`, `product_name`, `product_price`, `product_quantity`, `order_confirm`, `mark`) VALUES (NULL, '{$_SESSION['username']}', '$name', '$email', '$phone', NULL, current_timestamp(), '$product_id', '$product_name', '$product_price', '$product_quantity', 'false', 'unmarked')";
                $insertResult = mysqli_query($conn, $sql);

                if ($insertResult) {
                    // Display a pop-up or perform an action
                    echo "<script>alert('Added to cart successfully!');</script>";
                } else {
                    // Handle the case when the query execution fails
                    echo "Error: " . mysqli_error($conn);
                }
            }
        } else {
            echo '
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> There are not enough products available!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            ';
        }
    }
}



?>


<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Poultry Feed</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>


    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/headerNestedDropdown.css" />
  </head>
  <body>

    <!-- Header -->
    <?php require 'partials/_header.php' ?>


    <div class="card bg-dark text-white">
      <img class="card-img" src="cow2.jpg" alt="Card image" style="width: 100%; height: auto; max-height: 500px;">
    </div>


      <!-- who we are text -->
    <div class="container my-5 text-center"> <!-- Added text-center class -->
      <div class="d-sm-flex flex-sm-column align-items-center"> <!-- Added align-items-center class -->
        <h1 class="section-header landing-section-title title-font">
          Our Products 
        </h1>

        <div class="landing-section-content">
          <div>Unlock the potential of your Cattle, fish and poultry farm with our comprehensive range of high-quality feeds for efficient and profitable farming. </div>
          <div>Grow your animals with top-quality feeds tailored for success.</div>
        </div>
      </div>
    </div>


    <!-- body -->
    <div class="container-fluid">
      <div class="row  mb-4" style="justify-content: center;">
        <?php
          include 'partials/_dbconnect.php';

          $sql = "SELECT * FROM `products`";
          $result = mysqli_query($conn, $sql);
          $sno = 0;

            // action='".$_SERVER['PHP_SELF']."'

          while ($row = mysqli_fetch_assoc($result)) {
            $sno = $sno + 1;
            if ($sno % 5 == 1) {
              echo "
                <div class='w-100'></div>";
            }
            echo "<div class='col-lg-2 col-md-4 col-sm-1 mx-2 my-2'>
                <form method='post' action=''>
                  <div class='card shadow-sm'>
                    <img class='bd-placeholder-img card-img-top' width='100%' height='225' src='uploads/".$row['product_image']."'>
                    <div class='card-body'>
                      <h5 class='card-text'>" . $row['product_type'] . "</h5>
                      <p class='card-text'><b>Name:</b> " . $row['product_name'] . "</p>
                      <p class='card-text'><b>Price:</b> "  . $row['product_price'] . "Tk</p>
                      <p class='card-text'><b>Stock:</b> "  . $row['product_quantity'] . "</p>
                      <div class='d-flex justify-content-between align-items-center'>
                        <div class='btn-group'>
                        <input type='hidden' name='product_id' value=" . $row['product_id'] . ">
                        <input type='hidden' name='product_name' value=" . $row['product_name'] . ">
                        <input type='hidden' name='product_price' value=" . $row['product_price'] . ">
                        <input type='number' name= 'product_quantity' value='1' class='form-control'>
                          <input type='submit' name = 'add_to_cart' class='btn btn-sm btn-outline-secondary' value='Add To Cart'>
                          
                        </div>
                      </div>
                    </div>
                  </div></form>
                </div>";
          }

          mysqli_close($conn);
        ?>
      </div>
    </div>




    <!-- footer -->
    <?php require 'partials/_footer.php'?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script>
      function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
          return false;
        return true;
      }
    </script>

  </body>
</html>

