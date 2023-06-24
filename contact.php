<?php


  // $NowDate =  new DateTime( "now", new DateTimeZone( "Asia/Dhaka"));
  // // echo $NowDate ;

  // $NowDateInString = strtotime($NowDate->format( 'Y-m-d'));
  // // // echo $NowDateInString;
  // // $NowTimeInString = strtotime($NowDate->format(' H:i'));
  // // // echo $NowTimeInString;
  // // $FixedTimeInStringForEvening = strtotime(' 17:00');
  // // echo $FixedTimeInStringForEvening;



  $success = false;
  $duplicate = false;
  $Error = false;

    // Problems Submit //
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'partials/_dbconnect.php';

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $problem = $_POST['problem'];

    $sql = "SELECT * FROM `problems` WHERE `email` = '$email' ";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 0){
      $sql = "INSERT INTO `emailCollection` (`sno`, `name`,`email`,`date`) VALUES (NULL, '$name','$email',  current_timestamp());";
      $result = mysqli_query($conn, $sql);
      $sql = "INSERT INTO `problems` (`sno`, `name`, `mobile`, `email`, `problem`, `date`) VALUES (NULL, '$name', '$mobile', '$email', '$problem', current_timestamp());";
      $result = mysqli_query($conn, $sql);
      if($result){
        $success = true;
      }
      else{
        $Error = true;
      }
    }
    elseif($num > 0){
      $sql = "SELECT * FROM `problems` WHERE `name` LIKE '$name' AND `mobile` LIKE '$mobile' AND `email` LIKE '$email' AND `problem` LIKE '$problem' ";
      $result = mysqli_query($conn, $sql);
      $num = mysqli_num_rows($result);
      if($num > 0){
        $duplicate = true;
      }
      else{
        $sql = "INSERT INTO `problems` (`sno`, `name`, `mobile`, `email`, `problem`, `date`) VALUES (NULL, '$name', '$mobile', '$email', '$problem', current_timestamp());";
        $result = mysqli_query($conn, $sql);
        if($result){
          $success = true;
        }
        else{
          $Error = true;
        }
      }
    }
    else{
      $Error = true;
    }
  }
?>

<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/headerNestedDropdown.css" />
  </head>

  <body class="bg-body-tertiary">
    <!-- css first -->
    <script>0</script>

    <!-- Header -->
    <?php require 'partials/_header.php'?>

    <?php
      if($success){
        echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success!</strong>Your query have been Updated!!!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
      }
      if($duplicate){
        echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Error!</strong>You have already submitted!!!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
      }
      if($Error){
        echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Error!</strong>We are having some tecnical issues please try again after some time if this problem still continues please email us directly!!!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
          }
    ?>

    <!-- body -->

    <div class="" style="max-width: 1060px; margin-top: 70px; margin-left: auto; margin-right: auto;">
      <div class="row d-flex justify-content-center" style="margin-bottom:79px;">
        <h2 class="col-auto" style=" "> Contact Us</h2>
        <hr />
        <p class="col-auto">We would love to hear from you!</p>
      </div>



      <!-- Left Side -->
      <div class="row">
        <div class="col-6" style="">
          <form action="" method="post">

            <h3 class="h3 mb-3">For general queries</h3>
            <h6 class="h6">We are happy to provide answers to any questions you have</h6>
            <h6 class="mb-4"><span style="color: red">(We will contact within 24 hours)</span></h6>
            <div class="mb-3">
              <label for="name" class="form-label"><b>Your Name</b><span style="color: red"> *</span></label>
              <input type="text" name="name" class="form-control" id="name" required placeholder="John Whick">
            </div>

            <div class="mb-3">
              <label for="mobile" class="form-label"><b>Mobile Number</b><span style="color: red"> *</span></label>
              <input name="mobile" type="text" class="form-control" id="mobile" required placeholder="01xxxxxxxxx"
                onkeypress="return isNumberKey(event)" />
            </div>

            <div class="mb-3">
              <label for="email" class="form-label"><b>Email address</b><span style="color: red"> *</span></label>
              <input type="email" name="email" class="form-control" id="email" required placeholder="name@example.com">
            </div>
            <div class="mb-3">
              <label for="problem" class="form-label"><b>Your Query</b></label>
              <textarea class="form-control" name="problem" id="problem" rows="3"
                placeholder="Tell us about your project or query (Optional)"></textarea>
            </div>

            <!-- Submit button -->
            <div class="mb-3">
              <input type="submit" name="Send" class="btn btn-success" id="Send" value=" Send "
                style="display: grid;  width:100px; " />
            </div>

            <div class="mb-3 col-12" style="display: grid;">
              <p style="color: rgb(155, 154, 154)">By clicking the button "Submit", you give your consent for collecting
                of your personal information and
                agree to the
                <a href="#">privacy policy</a>.
              </p>
            </div>

          </form>
        </div>



        <!-- Right Side Form -->
        <div class="col-6" style="">
          <form action="" method="post"
            style="max-width: 400px; margin-left: auto; margin-right: auto; margin-top: 120px;">

            <div class="form-group mb-3">
              <div>
                <label><b>For general inquiries:</b></label>
              </div>
              <div>
                <a href="mailto:info@agro-bd.com">info@agro-bd.com</a>
              </div>
            </div>
            <div class="form-group mb-3">
              <div>
                <label><b>Get in touch with our founders:</b></label>
              </div>
              <div>
                <a href="mailto:founders@agro-bd.com">founders@agro-bd.com</a>
              </div>
            </div>
            <div class="form-group mb-3">
              <div>
                <label><b>Career opportunities:</b></label>
              </div>
              <div>
                <a href="mailto:carear@agro-bd.com">carear@agro-bd.com</a>
              </div>
            </div>
            <div class="form-group mb-3">
              <div>
                <label><b>You can reach us on:</b></label>
              </div>
              <div>
                <a href="mailto:+8801853-438156">+8801853-438156</a>
              </div>
            </div>
            <div class="form-group mb-3">
              <p><b>Calling Hours: </b>Sat -Thurs, 10am-6pm <br>
              <b>Address: </b>House - 8E, Road - 81, Gulshan 2, Dhaka 1212 <br>
              <b>Visiting Hours: </b>Sun-Thurs, <br>
              <span style="color: #686868">(appointment basis)</span></p>
            </div>

          </form>
        </div>


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
    <script>
      function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
          return false;
        return true;
      }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"></script>

  </body>

</html>