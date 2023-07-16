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

    <!-- <style>
      a:hover {
        color: white;
      }
    </style> -->

  </head>

  <body>
    <!-- css first -->
    <script>0</script>

    <!-- Header -->
    <?php require 'partials/_staffHeader.php'?>

    <!-- body -->

    <div class="container"style="max-width: 1600px; margin-top: 70px; margin-bottom: 200px; ">
      <div class="row d-flex justify-content-center" style="margin-bottom:79px;">
        <u class="col-auto" ><h2 style=" ">Staff Information</h2></u>
        <!-- <hr/> -->
        <p class="col-12" style="text-align: center;"><span style="color: black">You should maintain staffs privacy,<br>these are our very valuable staffs do not share there information with others!!</span></p> <br>
      </div>
      <div class="container my-4" style="min-width: 1600px;">


        <table id="example" class="table table-striped table-bordered" style="min-width: 1600px; width:100%">
          <thead>
            <tr>
              <th>SN.</th>
              <th>UserName</th>
              <th>Name</th>
              <th>Email</th>
              <th>2nd Email</th>
              <th>Mobile</th>
              <th>2nd Mobile</th>
              <th>Birthday</th>
              <th>Gender</th>
              <th>Religion</th>

            </tr>
          </thead>
          <tbody>
            <!-- php MySQL query -->
            <?php
              $sql = "SELECT * FROM `staff`";
              $result = mysqli_query($conn,$sql);
              // $num = mysqli_num_rows($result);
              $sn = 0;
              while($row = mysqli_fetch_assoc($result)){
                $sn = $sn + 1;
                echo "<tr>
                        <td>". $sn. "</td>
                        <td>". $row['username']. "</td>
                        <td>". $row['name']. "</td>
                        <td>". $row['email']. "</td>
                        <td>". $row['email2']. "</td>
                        <td>". $row['mobile']. "</td>
                        <td>". $row['mobile2']. "</td>
                        <td>". $row['dateOfBirth']. "</td>
                        <td>". $row['gender']. "</td>
                        <td>". $row['religion']. "</td>
                      </tr>";
              }
            ?>
          </tbody>


        </table>
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

  </body>
</html>