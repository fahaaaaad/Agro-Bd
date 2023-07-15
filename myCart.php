<?php

  session_start();
  $delete = false;
  $confirm = false ;
  include 'partials/_dbconnect.php';

  //  Removing Data from the DataBase
  if(isset($_GET['delete'])){
    $product_id = $_GET['delete'];
    $sql = "DELETE FROM `orders` WHERE `username` LIKE '{$_SESSION['username']}' AND `product_id` = '$product_id' AND `order_confirm` LIKE 'false' ";
    $result = mysqli_query($conn, $sql);
    if($result){
      $delete = true;
    }
  }

  //  Cart confirming
  if (isset($_POST['confirm'])) {
    $address = $_POST['address'];
    $sql = "SELECT * FROM `orders` WHERE `username` = '{$_SESSION['username']}' AND `order_confirm` = 'false' ";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      $updateSql = "UPDATE `orders` SET `address` = '$address', `order_confirm` = 'true' WHERE `orders`.`username` = '{$_SESSION['username']}'  ";
      $updateResult = mysqli_query($conn, $updateSql);
      if ($updateResult) {
        $confirm = true;
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

    <!-- Alerts -->
    <?php

          if($delete){
            echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Success!</strong> Your selected item has been deleted successfully from your cart!
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ';
          }
          if($confirm){
            echo'
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Your order has been confirmed!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
            ';
          }

    ?>

      <!-- who we are text -->
    <div class="container my-5 text-center"> <!-- Added text-center class -->
      <div class="row d-flex justify-content-center" style="margin-bottom:79px;">
        <u class="col-auto" ><h2 style=" ">My cart</h2></u>
        <!-- <hr/> -->
        <p class="col-12" style="text-align: center;"><span style="color: black">After confirmation you can not remove any product from your cart,<br>Please check before you confirm!!</span></p> <br>
      </div>
    </div>


    <!-- add to cart and buying info -->
    <div class="container my-5">
      <div class="row ">


        <!-- Order confirm form -->
        <div class="col-md-5">
          <h4 class="mb-3">Delivery Address</h4>
          <form method="post" action="">

              <div class="mb-3">
                  <label for="address" class="form-label"><span style="color: black">Delivery address:</span></label>
                  <textarea name="address" id="address" class="form-control" rows="4" required placeholder="Write down the address where you want your product to be delivered"></textarea>
              </div>
              <!-- confirm  -->
              <input type="submit" name="confirm" value="Confirm" class="btn btn-success" style="float:right; margin-right:30px; margin-bottom:120px; width:100px;" >

          </form>
        </div>



        <!--  My Cart -->
        <div class="col-md-7 order-md-last">
          <span class="text-primary">  
            <h4 class="d-flex justify-content-between align-items-center mb-3">
              Your cart
            </h4>
          </span>
          <?php


            $output = " ";
            $output .= "<table class='table table-bordered table-striped'>
                          <tr>
                            <th>ID</th>
                            <th>Item Name</th>
                            <th>Item Price</th>
                            <th>Item Quantity</th>
                            <th>Total Price</th>
                            <th>Action</th>
                          </tr>";

            $total_price = 0;

            $sql = "SELECT * FROM `orders` WHERE `username` LIKE '{$_SESSION['username']}' AND `order_confirm` LIKE 'false' ";
            $result = mysqli_query($conn, $sql);
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                $item_price = $row['product_price'] * $row['product_quantity'];
                $total_price += $item_price;
                $output .= "<tr>
                              <td>" . $row['product_id'] . "</td>
                              <td>" . $row['product_name'] . "</td>
                              <td>" . $row['product_price'] . "Tk</td>
                              <td>" . $row['product_quantity'] . "</td>
                              <td>Tk" . number_format($item_price) . "</td>

                              <td style='min-width: 110px;''>
                                <button class='delete btn btn-sm btn-outline-danger btn-block' id=d". $row['product_id'].">Delete</button>
                              </td>
                            </tr>";
              }
            } 
            else {
              $output .= "<tr><td colspan='6'>Your cart is empty.</td></tr>";
            }
                              // <td>
                              //   <a href='?action=remove&id=".$row['product_id']."' class='btn btn-sm btn-outline-danger btn-block'>Remove</a>
                              // </td>

            $output .= "<tr>
                          <td colspan='4' class='text-end'><strong>Total:</strong></td>
                          <td colspan='2'>Tk" . number_format($total_price) . "</td>
                        </tr>";
            
            $output .= "</table>";
            echo $output;


          ?>
        </div>


      </div>
    </div>



    <!-- body -->





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
    <script>
      deletes = document.getElementsByClassName('delete');
      Array.from(deletes).forEach((element)=>{
        element.addEventListener("click", (e) => {
          console.log("edit ");
          product_id = e.target.id.substr(1);
          if(confirm("Are you sure you want to remove this entry!")){
            console.log("yes");
            window.location = `myCart.php?delete=${product_id}`;
          }
          else{
            console.log("no");
          }
        })
      })
    </script>

  </body>
</html>

