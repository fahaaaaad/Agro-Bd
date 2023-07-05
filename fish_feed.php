<?php


include 'partials/_dbconnect.php';
session_start();

if (isset($_POST['add_to_cart'])) {
    if (isset($_SESSION['cart'])) {

      $session_array_id = array_column($_SESSION['cart'],"id");

    if(!in_array($_POST['id'],$session_array_id)){

         // Add the item to the cart
        $session_array = array(
            'id' => $_POST['id'],
            'name' => $_POST['product_name'],
            'price' => $_POST['product_price'],
            'quantity' => $_POST['quantity']
        );

        $_SESSION['cart'][] = $session_array;

    }



    } else {
        // Add the item to the cart
        $session_array = array(
            'id' => $_POST['id'],
            'name' => $_POST['product_name'],
            'price' => $_POST['product_price'],
            'quantity' => $_POST['quantity']
        );

        $_SESSION['cart'][] = $session_array;
    }
}
// session_destroy();

if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'partials/_dbconnect.php';
  if(isset($_POST['submit'])){
    // Retrieve order form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
  
    // Retrieve product information
    $productNames = $_POST['product_name'];
    $productPrices = $_POST['product_price'];
    $productQuantities = $_POST['product_quantity'];
  
  
  // Validate required fields
    if (!empty($name) && !empty($email) && !empty($phone) && !empty($address) && !empty($productNames) && !empty($productPrices) && !empty($productQuantities)) {
        // Insert order information into the database
        $sql = "INSERT INTO orders (name, email, phone, address, product_name, product_price, product_quantity) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        
        if ($stmt) {
            // Bind parameters to the prepared statement
            mysqli_stmt_bind_param($stmt, "ssssssd", $name, $email, $phone, $address, $productName, $productPrice, $productQuantity);
            
            // Loop through the product information and execute the prepared statement
            for ($i = 0; $i < count($productNames); $i++) {
                $productName = $productNames[$i];
                $productPrice = $productPrices[$i];
                $productQuantity = $productQuantities[$i];
                
                mysqli_stmt_execute($stmt);
            }
            
            mysqli_stmt_close($stmt);
        }
        
        // Clear form values after submission
        $name = $email = $phone = $address = '';
        
        // Clear the cart after successful submission if desired
        $_SESSION['cart'] = array();
    } else {
        // Required fields are missing, handle the error as desired
        // You can set an error message or perform any necessary actions
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
      <img class="card-img" src="fish.jpg" alt="Card image" style="width: 100%; height: auto; max-height: 500px;">




    </div>
    
      <!-- who we are text -->
    <div class="container my-5 text-center"> <!-- Added text-center class -->
      <div class="d-sm-flex flex-sm-column align-items-center"> <!-- Added align-items-center class -->
        <h1 class="section-header landing-section-title title-font">
          Fish Feed 
        </h1>

        <div class="landing-section-content">
          <div>Unlock the potential of your Cattle farm with our comprehensive range of high-quality feeds for efficient and profitable farming. </div>
          <div>Grow your cattles with top-quality feeds tailored for success.</div>
        </div>
      </div>
    </div>


<div class="container-fluid">
  <div class="row">
  <?php
  include 'partials/_dbconnect.php';

  $sql = "SELECT * FROM `fishfeed`";
  $result = mysqli_query($conn, $sql);
  $sno = 0;

  while ($row = mysqli_fetch_assoc($result)) {
    $sno = $sno + 1;
    if ($sno % 5 == 1) {
      echo "
        <div class='w-100'></div>";
    }
    echo "<div class='col-lg-2 col-md-4 col-sm-1 mx-2 my-2'>
        <form method='post' action=''>
          <div class='card shadow-sm'>
            <img class='bd-placeholder-img card-img-top' width='100%' height='225' src='uploads/".$row['image']."'>
            <div class='card-body'>
              <p class='card-text'>" . $row['name'] . "</p>
              <p class='card-text'>Price:"  . $row['price'] . "Tk</p>
              <div class='d-flex justify-content-between align-items-center'>
                <div class='btn-group'>
                <input type='hidden' name='product_name' value=" . $row['name'] . ">
                <input type='hidden' name='product_price' value=" . $row['price'] . ">
                <input type='hidden' name='id' value=" . $row['sno'] . ">
                <input type='number' name= 'quantity' value='1' class='form-control'>
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


<!-- add to cart and buying info -->
<div class="container my-5">
  <div class="row ">
      <div class="col-md-5 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Your cart</span>
          
        </h4>
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

    if (!empty($_SESSION['cart'])) {
      foreach ($_SESSION['cart'] as $key => $value) {
        $item_price = $value['price'] * $value['quantity'];
        $total_price += $item_price;
        $output .= "<tr>
                      <td>" . $value['id'] . "</td>
                      <td>" . $value['name'] . "</td>
                      <td>" . $value['price'] . "Tk</td>
                      <td>" . $value['quantity'] . "</td>
                      <td>Tk" . number_format($item_price) . "</td>
                      <td>
                        <a href='animal_feed.php?action=remove&id=".$value['id']."' class='btn btn-sm btn-outline-danger btn-block'>Remove</a>
                      </td>
                    </tr>";
      }
    } else {
      $output .= "<tr><td colspan='6'>Your cart is empty.</td></tr>";
    }

    $output .= "<tr>
                  <td colspan='4' class='text-end'><strong>Total:</strong></td>
                  <td colspan='2'>Tk" . number_format($total_price) . "</td>
                </tr>";
    
    $output .= "</table>";
    echo $output;



    if(isset($_GET['action'])){
      if($_GET['action'] == "remove"){
        foreach ($_SESSION['cart'] as $key => $value) {
          if($value['id'] == $_GET['id']){
            unset($_SESSION['cart'][$key]);
          }
        }
      }
    }


// <a href='animal_feed.php?action=remove&id=".$value['id']."' class='btn btn-sm btn-outline-danger btn-block'>Remove</a>
                          // <a href='animal_feed.php?action=remove&id=".$value['id']."'>
                          //   <button class='btn btn-sm btn-outline-danger btn-block'>Remove</button>
                          // </a>

                        // <form method='post' action=''>
                        //   <input type='hidden' name='id' value='" . $value['id'] . "'>
                        //   <button type='submit' name='remove_from_cart' class='btn btn-sm btn-outline-danger' id=d". $value['name'].">Remove</button>
                        // </form>

    // Process the form submission
    // if (isset($_GET['remove_from_cart'])) {
    //   $remove_id = $_GET['id'];
    //   if (array_key_exists($remove_id, $_SESSION['cart'])) {
    //     unset($_SESSION['cart'][$remove_id]);
    //     // You can also add a success message here if needed
    //     header("Location: your_cart_page.php"); // Redirect to the cart page after removing the item
    //     exit; // Add this line to prevent further execution of the script
    //   }
    // }

//  Removing Data from the DataBase
// if(isset($_GET['delete'])){
//   $remove_id = $_GET['delete'];
//     if (array_key_exists($remove_id, $_SESSION['cart'])) {
//       unset($_SESSION['cart'][$remove_id]);
//       // You can also add a success message here if needed
//       header("Location: your_cart_page.php"); // Redirect to the cart page after removing the item
//       exit; // Add this line to prevent further execution of the script
//     }






  // $sql = "DELETE FROM `myinformation` WHERE `username` = '$username'";
  // $result = mysqli_query($conn, $sql);

  // $sql = "DELETE FROM `login` WHERE `username` = '$username'";
  // $result = mysqli_query($conn, $sql);
  // if($result){
  //   $delete = true;
  // }
// }

    ?>
      
      </div>







      <!-- <div class="container my-5 text-center">
        <h1 class="section-header landing-section-title title-font">
          Billing address
        </h1>
      </div>
      <div class="col-md-7 col-lg-8">
        <form class="needs-validation was-validated" novalidate="">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Username</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" placeholder="Username" required="">
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-body-secondary">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Address 2 <span class="text-body-secondary">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">Country</label>
              <select class="form-select" id="country" required="">
                <option value="">Choose...</option>
                <option>United States</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">State</label>
              <select class="form-select" id="state" required="">
                <option value="">Choose...</option>
                <option>California</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="zip" placeholder="" required="">
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Save this information for next time</label>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Payment</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
              <label class="form-check-label" for="credit">Credit card</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="debit">Debit card</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Name on card</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required="">
              <small class="text-body-secondary">Full name as displayed on card</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Credit card number</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required="">
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Expiration</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
        </form>
      </div> -->

      <!-- Order form -->
            <!-- <div class="col-md-7">
                <h4 class="mb-3">Order Form</h4>
                <form method="post" action="<?php //echo $_SERVER['PHP_SELF']; ?>">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" name="phone" id="phone" class="form-control" onkeypress="return isNumberKey(event)" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea name="address" id="address" class="form-control" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div> -->

<div class="col-md-7">
    <!-- Order form -->
    <h4 class="mb-3">Order Form</h4>
    <form method="post" action="">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="tel" name="phone" id="phone" class="form-control" onkeypress="return isNumberKey(event)" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea name="address" id="address" class="form-control" rows="4" required></textarea>
        </div>

        <?php foreach ($_SESSION['cart'] as $key => $value) : ?>
            <input type="hidden" name="product_name[]" value="<?php echo $value['name']; ?>">
            <input type="hidden" name="product_price[]" value="<?php echo $value['price']; ?>">
            <input type="hidden" name="product_quantity[]" value="<?php echo $value['quantity']; ?>">
        <?php endforeach; ?>

        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
        <input type="submit" name="submit" value="submit" class="btn btn-success" style="float:right; margin-right:30px; margin-bottom:120px; width:100px;" >

    </form>





</div>

    </div>
</div>



    <!-- footer -->
    <?php require 'partials/_footer.php'?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script>

      // deletes = document.getElementsByClassName('delete');
      // Array.from(deletes).forEach((element)=>{
      //   element.addEventListener("click", (e) => {
      //     console.log("edit ");
      //     name = e.target.id.substr(1);
      //     if(confirm("Are you sure you want to remove this entry!")){
      //       console.log("yes");
      //       window.location = `animal_feed.php?delete=${name}`;
      //     }
      //     else{
      //       console.log("no");
      //     }
      //   })
      // })

    </script>

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

<?php

// if (isset($_GET['action'])) {
//     if ($_GET['action'] == "remove") {
//         foreach ($_SESSION['cart'] as $key => $value) {
//             if ($value['id'] == $_GET['id']) {
//                 unset($_SESSION['cart'][$key]);
//             }
//         }
//     }
// }

?>
