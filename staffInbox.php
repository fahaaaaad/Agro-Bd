<?php
?>
<?php

  $showAlert = false;

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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">


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
    <?php require 'partials/_staffHeader.php';
$showAlert = false;
if(isset($_POST['Send'])){
  $messege = $_POST['messege'];
  $center_person = $_POST['center_person'];

  $sql = "INSERT INTO `inbox` (`id`, `sender`, `center_person`, `messege`, `sent_time`) VALUES (NULL, '{$_SESSION['username']}', '$center_person', '$messege', current_timestamp()); ";
  $result = mysqli_query($conn, $sql);
  if($result){
    $showAlert = true;
    // Redirect to a different page to avoid form resubmission
    header("Location: users.php?alert=success");
    exit(); // Ensure that the script stops executing after the redirect
  }
  else{
    echo '
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Try again later!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    ';
  }
}


      // if($showAlert){
      //   echo '
      //       <div class="alert alert-success alert-dismissible fade show" role="alert">
      //         <strong>Success!</strong>Your messege has been sent!!!
      //         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      //       </div>
      //       ';
      // }

    ?>

    <!-- body -->

    <div class="" style="max-width: 1200px; margin-top: 70px; margin-left: auto; margin-right: auto;">
      <div class="row d-flex justify-content-center" style="margin-bottom:79px;">
        <h3 class="col-auto" style=""> My Inbox</h3>
        <hr />
      </div>



      <!-- Left Side -->
      <div class="row" style="margin-bottom:100px;">
        <div class="col-5" style="">
          <form action="" method="post">

            <h3 class="h3 mb-3">Your messege</h3>
            <h6 class="h6">We are happy to provide answers to any questions you have</h6>
            <h6 class="mb-4"><span style="color: red">(We will contact within 24 hours)</span></h6>

            <div class="mb-3">
              <label for="center_person" class="form-label"><b>Center person</b><span style="color: red"> *</span></label>
              <input type="text" name="center_person" class="form-control" id="center_person" required placeholder="John Whick">
            </div>

            <div class="mb-3">
              <label for="messege" class="form-label"><b>Your Messege</b><span style="color: red"> *</span></label>
              <textarea class="form-control" name="messege" id="messege" rows="3"
                placeholder="Tell us about your project or query (Optional)" required></textarea>
            </div>

            <!-- Submit button -->
            <div class="mb-3">
              <input type="submit" name="Send" class="btn btn-success" id="Send" value=" Send "
                style="display: grid;  width:100px; " onclick="return confirm('Do you really want to send this messege?\nYou can not delete after sending!');"/>
            </div>

          </form>
        </div>


        <!-- Right Side Form -->
        <div class="col-7" style="">
          <!-- <div class="container my-4"> -->
            <table id="data" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <tr>
                  <th>SN.</th>
                  <th>Time</th>
                  <th>Center person</th>
                  <th>sender</th>
                  <th>Messege</th>
                </tr>
              </thead>
              <tbody>
                <!-- php MySQL query -->
                <?php
                $sql = "SELECT * FROM `inbox` ";
                $result = mysqli_query($conn, $sql);
                $sn = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                  $sn = $sn + 1;
                  echo "<td>" . $sn . "</td>";
                  echo "<td>" . $row['sent_time'] . "</td>";
                  echo "<td>" . $row['center_person'] . "</td>";
                  echo "<td>" . $row['sender'] . "</td>";
                  echo "<td>" . $row['messege'] . "</td>";
                  echo "</tr>";
                }
                ?>
              </tbody>
            </table>
          <!-- </div> -->
        </div>
      </div>
    </div>

    <!-- footer -->
    <?php require 'partials/_footer.php'?>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>



    <script>
      $(document).ready(function () {
        $('.table').DataTable();
      });
    </script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>


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