
<?php

  $usernameExists = false; 
  $success = false;

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';

    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $religion = $_POST['religion'];

    $sql = "INSERT INTO `staff` (`sno`, `username`, `password`, `name`, `email`, `email2`, `mobile`, `mobile2`, `dateOfBirth`, `gender`, `religion`) VALUES (NULL, '$username', '12345', '$name', '$email', NULL, '$mobile', NULL, NULL, '$gender', '$religion'); ";
    $result = mysqli_query($conn, $sql);
    if($result){
      $success = true;
    }
    else{
      echo "Failed to Updated record successfully! refresh the page (F5) and try again.<br>";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>

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

      if($usernameExists){
        echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Error!</strong> username already exists!!!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';

      }

      if($success){
      echo '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your DataBase has been Updated!!!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          ';
      }

    ?>

    <!-- body -->

    <div class="container"style="max-width: 1600px; margin-top: 70px; margin-bottom: 200px; ">
      <div class="row d-flex justify-content-center" style="margin-bottom:79px;">
        <u class="col-auto" ><h2 style=" ">Staff Data Entry</h2></u>
        <!-- <hr/> -->
        <p class="col-12" style="text-align: center;"><span style="color: black">You can always ask what username they want!</span></p> <br>
      </div>
      <div class="body my-4" style="max-width: 720px;">

        <form action="" method="post" style="min-width: 720px;">
          <div class="form-group row mt-2 mb-2">
            <label for="name" class="col-sm-2 col-form-label" style="padding-left: 0px;">Name: <span style="color: red"> *</span></label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
          </div>

          <div class="form-group row mt-2 mb-2">
            <label for="username" class="col-sm-2 col-form-label" style="padding-left: 0px;">Username: <span style="color: red"> *</span></label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="username" name="username" required>
            </div>
          </div>

          <div class="form-group row mt-2 mb-2">
            <label for="email" class="col-sm-2 col-form-label" style="padding-left: 0px;">Email: <span style="color: red"> *</span></label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
          </div>

          <div class="form-group row mt-2 mb-2">
            <label for="mobile" class="col-sm-2 col-form-label" style="padding-left: 0px;">Mobile: <span style="color: red"> *</span></label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="mobile" name="mobile" onkeypress="return isNumberKey(event)" required>
            </div>
          </div>

          <div class="form-group row mt-2 mb-2">
            <label for="gender" class="col-sm-2 col-form-label" style="padding-left: 0px;">Gender:</label>
            <div class="col-sm-10">
              <select
                type="select"
                name="gender"
                class="form-control"
                id="gender"
              >
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
              </select>
            </div>
          </div>

          <div class="form-group row mt-2 mb-2">
            <label for="religion" class="col-sm-2 col-form-label" style="padding-left: 0px;">Religion:</label>
            <div class="col-sm-10">
              <select
                type="select"
                name="religion"
                class="form-control"
                id="religion"
              >
                <option value="Islam">Islam</option>
                <option value="Hinduism">Hinduism</option>
                <option value="Christianity">Christianity</option>
                <option value="Buddhism">Buddhism</option>
                <option value="Other">Other</option>
              </select>
            </div>
          </div>

          <div>
            <input
              type="submit"
              name="submit"
              class="btn"
              id="submit"
              value="Save"
              onclick="return confirm('Are you sure?');"
              style="float:right; margin-right:7px; margin-top:7px; background-color: rgba(44, 19, 225, 0.91); color: white;" 
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
        document.querySelectorAll(".navbar .color").forEach(function(e){
          if(e.href == current_url){
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