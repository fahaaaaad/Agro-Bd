<?php

  // $usernameExists = false; 
  $enter = false;

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';

    $type = $_POST['type'];
    $productName = $_POST['productName'];
    $price = $_POST['price'];
    // $image = $_POST['photo'];

    if(isset($_FILES['photo'])){
      $photo_name = $_FILES['photo']['name'];
      $photo_tmp_name = $_FILES['photo']['tmp_name'];
      $photo_size = $_FILES['photo']['size'];
      $photo_new_name = rand() . $photo_name;
      echo $photo_name;
      if($photo_size > 5242880){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> photo is very big! Maximum size is 5MB.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
      }
      else{
        $sql = "INSERT INTO `$type` (`sno`, `name`, `image`, `price`) VALUES (NULL, '$productName', '$photo_new_name', '$price')";
        $result = mysqli_query($conn, $sql);
        if($result){
          $enter = true;
          $showAlert = true;
          move_uploaded_file($photo_tmp_name, "uploads/" . $photo_new_name);
        }
        else{
          echo "Failed to Updated record successfully! refresh the page (F5) and try again.<br>";
        }
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

    <?php

      if($enter){
      echo '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your DataBase has been Updated!!!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          ';
      }

    ?>

    <!-- body -->

    <div class="container" style="max-width: 1600px; margin-top: 95px; margin-bottom: 200px; ">
      <div class="row d-flex justify-content-center" style="margin-bottom:65px;">
        <u class="col-auto">
          <h2 style=" ">Animal Feed Entry</h2>
        </u>
        <!-- <hr/> -->
        <p class="col-12" style="text-align: center;"><span style="color: black">Check before you enter!</span></p> <br>
      </div>


      <!-- Form -->
      <div class="body my-4" style="max-width: 720px;">
        <form action="" method="post"  enctype ="multipart/form-data" style="min-width: 720px;">


          <div class="form-group row mt-2 mb-2">
            <label for="type" class="col-sm-3 col-form-label" style="padding-left: 15px; margin-right: -15px;">Product Type: <span style="color: red">*</span></label>
            <div class="col-sm-9">
              <select class="form-select" id="type" name="type" aria-label="Floating label select example" required>
                <!-- <option selected>Select product type</option> -->
                  <option value="">Select type</option>
                  <option value="cattleFeed">Cattle Feed</option>
                  <option value="poultryFeed">Poultry Feed</option>
                  <option value="fishFeed">Fish Feed</option>
              </select>
            </div>
          </div>

          <div class="form-group row mt-2 mb-2">
            <label for="productName" class="col-sm-3 col-form-label" style="padding-left: 15px; margin-right: -15px;">Product Name: <span style="color: red">
                *</span></label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="productName" name="productName" required>
            </div>
          </div>

          <div class="form-group row mt-2 mb-2">
            <label for="price" class="col-sm-3 col-form-label" style="padding-left: 15px; margin-right: -15px;">Price: <span style="color: red">
                *</span></label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="price" name="price" required>
            </div>
          </div>

          <div class="form-group row mt-2 mb-2">
            <label for="photo" class="col-sm-3 col-form-label" style="padding-left: 15px; margin-right: -15px;">Photo: <span style="color: red">*</span></label>
            <div class="col-sm-9">
              <!-- <img src="uploads/<?php //echo $row['photo'];?>" alt=""> -->
              <input type="file" accept="image/*" name="photo" class="form-control" id="photo" value=""/>
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