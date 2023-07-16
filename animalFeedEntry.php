<?php

  // $usernameExists = false; 
  $enter = false;
  $productExists = false; 

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';

    $product_type = $_POST['product_type'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_quantity = $_POST['product_quantity'];
    // $image = $_POST['photo'];

    if(isset($_FILES['product_image'])){
      $product_image_name = $_FILES['product_image']['name'];
      $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
      $product_image_size = $_FILES['product_image']['size'];
      $product_image_new_name = rand() . $product_image_name;
      // echo $product_image_name;
      if($product_image_size > 5242880){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Product image is very big! Maximum size is 5MB.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
      }
      else{
        // $sql = "SELECT * FROM `$type` WHERE `name` LIKE '$productName' ";
        // $result = mysqli_query($conn, $sql);
        // $num = mysqli_num_rows($result);
        // if($num > 0){
        //   $productExists = true; 
        // }
        // else{
          $sql = "INSERT INTO `products` (`product_id`, `product_type`, `product_name`, `product_price`, `product_quantity`, `product_image`) VALUES (NULL, '$product_type', '$product_name', '$product_price', '$product_quantity', '$product_image_new_name')";
          $result = mysqli_query($conn, $sql);
          if($result){
            $enter = true;
            // $showAlert = true;
            move_uploaded_file($product_image_tmp_name, "uploads/" . $product_image_new_name);
          }
          else{
            echo "Failed to Update record successfully! refresh the page (F5) and try again.<br>";
          }
      //   }
      }
    }
  }

?>

<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agro-Bd</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js"
      integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous">
      </script>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/headerNestedDropdown.css" />
    <link rel="stylesheet" href="css/MyInformation.css" />



    <style>
      .body {
        display: flex;
        justify-content: center;
        margin-left: auto;
        margin-right: auto;
        flex-direction: column;
      }

      form {
        min-width: 700px;
      }

      .ad {
        background-color: #575050;
        color: #ffffff !important;
      }
    </style>

  </head>

  <body>
    <!-- css first -->
    <script>0</script>

    <!-- Header -->
    <?php require 'partials/_staffHeader.php'?>

    <!-- Alerts -->
    <?php

      if($enter){
      echo '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your DataBase has been Updated!!!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          ';
      }

      if($productExists){
        echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Error!</strong> Product name already exists!!!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
      }

    ?>

    <!-- body -->

    <div class="container" style="max-width: 1600px; margin-top: 95px; margin-bottom: 200px; ">
      <div class="row d-flex justify-content-center" style="margin-bottom:65px;">
        <u class="col-auto">
          <h2 style=" ">Product Entry</h2>
        </u>
        <!-- <hr/> -->
        <p class="col-12" style="text-align: center;"><span style="color: black">Check before you enter!</span></p> <br>
      </div>


      <!-- Form -->
      <div class="body my-4" style="max-width: 720px;">
        <form action="" method="post"  enctype ="multipart/form-data" style="min-width: 720px;">


        <!-- product_type -->
          <div class="form-group row mt-2 mb-2">
            <label for="product_type" class="col-sm-3 col-form-label" style="padding-left: 15px; margin-right: -15px;">Product Type: <span style="color: red">*</span></label>
            <div class="col-sm-9">
              <select class="form-select" id="product_type" name="product_type" aria-label="Floating label select example" required>
                <!-- <option selected>Select product type</option> -->
                  <option value="">Select type</option>
                  <option value="Cattle Feed">Cattle Feed</option>
                  <option value="Poultry Feed">Poultry Feed</option>
                  <option value="Fish Feed">Fish Feed</option>
              </select>
            </div>
          </div>

          <!-- product_name -->
          <div class="form-group row mt-2 mb-2">
            <label for="product_name" class="col-sm-3 col-form-label" style="padding-left: 15px; margin-right: -15px;">Name: <span style="color: red">
                *</span></label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="product_name" name="product_name" required>
            </div>
          </div>

          <!-- product_price -->
          <div class="form-group row mt-2 mb-2">
            <label for="product_price" class="col-sm-3 col-form-label" style="padding-left: 15px; margin-right: -15px;">Price: <span style="color: red">
                *</span></label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="product_price" name="product_price" required onkeypress="return isNumberKey(event)">
            </div>
          </div>
          
          <!-- product_image -->
          <div class="form-group row mt-2 mb-2">
            <label for="product_image" class="col-sm-3 col-form-label" style="padding-left: 15px; margin-right: -15px;">Image: <span style="color: red">*</span></label>
            <div class="col-sm-9">
              <!-- <img src="uploads/<?php //echo $row['photo'];?>" alt=""> -->
              <input type="file" accept="image/*" name="product_image" class="form-control" id="product_image" required/>
            </div>
          </div>

          <!-- product_price -->
          <div class="form-group row mt-2 mb-2">
            <label for="product_quantity" class="col-sm-3 col-form-label" style="padding-left: 15px; margin-right: -15px;">Quantity: <span style="color: red">
                *</span></label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="product_quantity" name="product_quantity" required onkeypress="return isNumberKey(event)">
            </div>
          </div>

          <div>
            <input
              type="submit"
              name="enter"
              class="btn"
              id="submit"
              value="enter"
              onclick="return confirm('Are you sure?');"
              style="float:right; margin-right:22px; margin-top:7px; background-color: rgba(44, 19, 225, 0.91); color: white;" 
            />
          </div>

        </form>
      </div>
    </div>



    <!-- footer -->
    <?php require 'partials/_footer.php'?>



    <script>
      // Start carousel and set auto-cycle interval
      document.addEventListener("DOMContentLoaded", function () {
        var myCarousel = document.getElementById("carouselExampleCaptions");
        var carousel = new bootstrap.Carousel(myCarousel, {
          interval: 3000, // Change slide every 3 seconds (3000 milliseconds)
          wrap: true // Enable looping of slides
        });
      });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
      integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function () {
        $('.table').DataTable();
      });
    </script>


    <script>
      let current_url = document.location;
      document.querySelectorAll(".navbar .color").forEach(function (e) {
        if (e.href == current_url) {
          e.classList += " current";
        }
      });
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