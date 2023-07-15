<?php

  session_start();

  // Check if the user is not logged in
  if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
      header("Location: index.php"); // Redirect to the login page
      exit;
  }

?>
<?php

  $showAlert = false;
  $showAlert2 = false;
  $NotSame = false;
  $Error = false;
  $Error2 = false;
  $WrongPassword = false;

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
    <link rel="stylesheet" href="css/MyInformation.css" />

    <style>
      .mx-2 > *:not(:last-child) {
        margin-right: 5px;
      }
    </style>

  </head>

  <body class="bg-body-tertiary">
    <!-- css first -->
    <script>0</script>

    <!-- Header -->
    <?php require 'partials/_header.php';
      $showAlert = false;
      // Profile change
      if(isset($_POST['Save'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
        $interest = mysqli_real_escape_string($conn, $_POST['interest']);
        
        $sql = "UPDATE `user` SET `name` = '$name', `mobile` = '$mobile' WHERE `user`.`username` = '{$_SESSION['username']}' ";
        $result = mysqli_query($conn, $sql);
        if($result){
          $showAlert2 = true;
        }
        else{
          echo '
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong>Try again later !!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              ';
        }
      }

      if($showAlert2){
        echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success!</strong>Your Profile have been Updated!!!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
      }




        // Passward Change //
      if(isset($_POST['Change'])){
        $CurrentPassword = $_POST['CurrentPassword'];
        $NewPassword = $_POST['NewPassword'];
        $NewPasswordRetype = $_POST['NewPasswordRetype'];

        $sql = "SELECT * FROM `user` WHERE `username` = '{$_SESSION['username']}' ";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if($num == 1){
          while($row = mysqli_fetch_assoc($result)){
            $password = $row['password'];
          }
            if($CurrentPassword == $password){
              if($NewPassword == $NewPasswordRetype){
                $sql = "UPDATE `user` SET `password` = '$NewPassword' WHERE `user`.`username` = '{$_SESSION['username']}' ";
                $result = mysqli_query($conn, $sql);
                if($result){
                  $showAlert = true;
                }
                else{
                  $Error2 = true;
                }
              }
              else{
                $NotSame = true;
              }
            }
            else{
              $WrongPassword = true;
            }
          
        }
        else{
          $Error = true;
        }
      }



      if($showAlert){
        echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success!</strong>Your Password have been Updated!!!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
      }
      if($Error2){
        echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Error!</strong>Please try again after some time!!!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
      }
      if($NotSame){
        echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Error!</strong>New Password and Retype must be Same!!!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
      }
      if($WrongPassword){
        echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Error!</strong> Your given password does not match with the one in database! Check your old password again!!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
      }
      if($Error){
        echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Error!</strong>Please logout then login again!!!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
          }
    ?>

    <!-- body -->

    <div class="" style="max-width: 1016px; margin-top: 70px; margin-left: auto; margin-right: auto;">
      <div class="row d-flex justify-content-center" style="margin-bottom:79px;">
        <h3 class="col-auto" style=""> My Profile</h3>
        <hr />
      </div>



      <!-- Left Side -->
      <div class="row">
        <div class="col-6" style="">
          <form action="" method="post">
            <u>
              <h5 class="h5 mb-3">My Information:</h5>
            </u>
            <?php
            $sql = "SELECT * FROM `user` WHERE `username` = '{$_SESSION['username']}'";
              $result = mysqli_query($conn,$sql);
              if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
            
            ?>

              <div class="input-group">
                <label for="name"><span style="color: black">Name:</span></label>
                <input type="text" name="name" class="form-control" id="name" value="<?php echo $row['name']; ?>" />
              </div>

              <!-- <div class="input-group">
                <label for="email"><span style="color: black">Email:</span></label>
                <input type="text" name="email" class="form-control" id="email" required value="<?php //echo $row['email']; ?>" />
              </div> -->

              <div class="input-group">
                <label for="mobile"><span style="color: black">Mobile Number:</span></label>
                <input type="text" name="mobile" class="form-control" id="mobile" value="<?php echo $row['mobile']; ?>" onkeypress="return isNumberKey(event)"  minlength="11"  maxlength="11"/>
              </div>

              <div class="input-group">
                <label for="interest"><span style="color: black">Interest:</span></label>
                <textarea class="form-control" name="interest" id="interest" rows="3" placeholder="What type of project you want to fund." value="<?php echo $row['interest']; ?>" ></textarea>
              </div>
<!-- 
              <div class="input-group">
                  <label for="address"><span style="color: black">Address:</span></label>
                  <textarea name="address" id="address" class="form-control" rows="4" required placeholder="necessary for product purchase."></textarea>
              </div> -->

              <?php
            }
          }
              ?>
            <!-- Submit button -->
            <div>
              <input type="submit" name="Save" class="btn btn-success" id="Save" value=" Save "
                style="float:right; margin-right:30px; margin-bottom:120px; width:100px;" />
            </div>

          </form>
        </div>


        <!-- Right Side Form -->
        <div class="col-6" style="">
          <form action="" method="post" style="max-width: 400px; margin-left: auto; margin-right: auto;">
            <u>
              <h5 class="h5 mb-3">Password Change (By User):</h5>
            </u>
            <div class="form-group">
              <span style="color: Red">Password must contain Eight(8) digits</span>
            </div>
            <div class="form-group">
              <label for="CurrentPassword">Current(Password):</label>
              <input type="password" name="CurrentPassword" class="form-control" id="CurrentPassword" value="" />
            </div>
            <div class="form-group">
              <label for="NewPassword">Type(New Password):</label>
              <input type="password" name="NewPassword" class="form-control" id="NewPassword" minlength="8" value="" />
            </div>
            <div class="form-group">
              <label for="NewPasswordRetype">Retype(Password):</label>
              <input type="password" name="NewPasswordRetype" class="form-control" id="NewPasswordRetype" minlength="8"
                value="" />
            </div>

            <!-- Change button -->
            <div>
              <input type="submit" name="Change" class="btn btn-danger" id="Change" value=" Change "
                style="float:right; margin-right:12px; margin-top:12px;" />
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