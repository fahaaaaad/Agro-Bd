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
    <title>Agro-Bd</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/headerNestedDropdown.css" />
    <link rel="stylesheet" href="css/MyInformation.css" />
  </head>

  <body>
    <!-- css first -->
    <script>0</script>

    <?php 

        //  Header //
      require 'partials/_staffHeader.php';


  $showAlert = false;
  if(isset($_POST['Save'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $email2 = mysqli_real_escape_string($conn, $_POST['email2']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $mobile2 = mysqli_real_escape_string($conn, $_POST['mobile2']);
    $dateOfBirth = mysqli_real_escape_string($conn, $_POST['dateOfBirth']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $religion = mysqli_real_escape_string($conn, $_POST['religion']);
    
    $sql = "UPDATE `myInformation` SET `name` = '$name', `email` = '$email', `email2` = '$email2', `mobile` = '$mobile',`mobile2` = '$mobile2', `dateOfBirth` = '$dateOfBirth', `gender` = '$gender', `religion` = '$religion' WHERE `myInformation`.`username` = '{$_SESSION['username']}' ";
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
          <strong>Success!</strong>Your Password have been Updated!!!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
  }




        // Passward Change //
      if(isset($_POST['Change'])){
        $CurrentPassword = $_POST['CurrentPassword'];
        $NewPassword = $_POST['NewPassword'];
        $NewPasswordRetype = $_POST['NewPasswordRetype'];

        // if($teacher){
        //   $sql = "SELECT * FROM `tlogin` WHERE `loginIdT` = '{$_SESSION['loginID']}' ";
        // }
        // if($driver){
        //   $sql = "SELECT * FROM `dlogin` WHERE `loginIdD` = '{$_SESSION['loginID']}' ";
        // }
        $sql = "SELECT * FROM `login` WHERE `username` = '{$_SESSION['username']}' ";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if($num == 1){
          while($row = mysqli_fetch_assoc($result)){
            $password = $row['password'];
          }
            if($CurrentPassword == $password){
              if($NewPassword == $NewPasswordRetype){
                // if($teacher){
                //   $sql = "UPDATE `tlogin` SET `password` = '$NewPassword' WHERE `tlogin`.`loginIdT` = '{$_SESSION['loginID']}' ";
                // }
                // if($driver){
                //   $sql = "UPDATE `dlogin` SET `password` = '$NewPassword' WHERE `dlogin`.`loginIdD` = '{$_SESSION['loginID']}' ";
                // }
                $sql = "UPDATE `login` SET `password` = '$NewPassword' WHERE `login`.`username` = '{$_SESSION['username']}' ";
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
      if($NotSame){
        echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Error!</strong>New Password and Retype must be Same!!!
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
      if($Error2){
        echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Error!</strong>Please try again after some time!!!
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
    ?>

    <!-- body -->

    <div class="" style="max-width: 1060px; margin-top: 70px; margin-left: auto; margin-right: auto;">
      <div class="row d-flex justify-content-center" style="margin-bottom:79px;">
        <h3 class="col-auto" style=" "> My Page</h3>
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
            $sql = "SELECT * FROM `myInformation` WHERE `username` = '{$_SESSION['username']}'";
              $result = mysqli_query($conn,$sql);
              if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
            
            ?>
              <div class="input-group">
                <label for="name"><span style="color: black">Name:</span></label>
                <input type="text" name="name" class="form-control" id="name" value="<?php echo $row['name']; ?>" />
              </div>
              <div class="input-group">
                <label for="email"><span style="color: black">Email:</span></label>
                <input type="text" name="email" class="form-control" id="email" required value="<?php echo $row['email']; ?>" />
              </div>
              <div class="input-group">
                <label for="email2"><span style="color: black">2nd Email:</span></label>
                <input type="text" name="email2" class="form-control" id="email2" placeholder="Alternate (optional)"
                  value="<?php echo $row['email2']; ?>" />
              </div>
              <div class="input-group">
                <label for="mobile"><span style="color: black">Mobile Number:</span></label>
                <input type="text" name="mobile" class="form-control" id="mobile" value="<?php echo $row['mobile']; ?>" />
              </div>
              <div class="input-group">
                <label for="mobile2"><span style="color: black">2nd Mobile Number:</span></label>
                <input type="text" name="mobile2" class="form-control" id="mobile2" placeholder="Alternate (optional)"
                  value="<?php echo $row['mobile2']; ?>" />
              </div>
              <div class="input-group">
                <label for="dateOfBirth"><span style="color: black">Date of Birth:</span></label>
                <input type="date" name="dateOfBirth" class="form-control" id="dateOfBirth" value="<?php echo $row['dateOfBirth']; ?>" />
              </div>
              <div class="input-group">
                <label for="gender"><span style="color: black">Gender :</span></span></label>
                <select type="select" name="gender" class="form-control" id="gender" required>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Others">Others</option>
                </select>
                  <script type="text/javascript">
                    document.getElementById('gender').value = "<?php echo $row['gender'];?>";
                  </script>
              </div>
              <div class="input-group">
                <label for="religion"><span style="color: black">Religion:</span></label>
                <select type="select" name="religion" class="form-control" id="religion" required>
                  <option value="Islam">Islam</option>
                  <option value="Hinduism">Hinduism</option>
                  <option value="Christianity">Christianity</option>
                  <option value="Buddhism">Buddhism</option>
                  <option value="Other">Other</option>
                </select>
                  <script type="text/javascript">
                    document.getElementById("religion").value = "<?php echo $row["religion"];?>";
                  </script>
              </div>
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
              <span style="color: Red">Password must contain five(5) digits</span>
            </div>
            <div class="form-group">
              <label for="CurrentPassword">Current(Password):</label>
              <input type="password" name="CurrentPassword" class="form-control" id="CurrentPassword" value="" />
            </div>
            <div class="form-group">
              <label for="NewPassword">Type(New Password):</label>
              <input type="password" name="NewPassword" class="form-control" id="NewPassword" minlength="5" value="" />
            </div>
            <div class="form-group">
              <label for="NewPasswordRetype">Retype(Password):</label>
              <input type="password" name="NewPasswordRetype" class="form-control" id="NewPasswordRetype" minlength="5"
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
      integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"></script>


    <script>
        let current_url = document.location;
        document.querySelectorAll(".navbar .color").forEach(function(e){
          if(e.href == current_url){
              e.classList += " current";
          }
        });
    </script>


  </body>

</html>