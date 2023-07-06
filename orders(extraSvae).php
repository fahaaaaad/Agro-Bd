

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



  </head>

  <body>
    <!-- css first -->
    <script>0</script>

    <!-- Header -->
    <?php require 'partials/_staffHeader.php'?>

    <!-- body -->

    <div class="container"style="max-width: 1260px; margin-top: 70px; margin-bottom: 200px; ">
      <div class="row d-flex justify-content-center" style="margin-bottom:79px;">
        <u class="col-auto" ><h2 style=" ">Our Orders</h2></u>
        <!-- <hr/> -->
        <p class="col-12" style="text-align: center;"><span style="color: black">You should maintain privacy policy,<br>these are our very valuable customers do not share their information with others!!</span></p> <br>
      </div>
      <div class="container my-4">

        <?php
          include 'partials/_dbconnect.php';

          // Fetch unique times and emails from the orders table
          $sql = "SELECT DISTINCT time, email FROM orders";
          $result = mysqli_query($conn, $sql);

          // Create an associative array to store the form values for each time and email
          $formValues = array();

          // Fetch the form values for each time and email
          while ($row = mysqli_fetch_assoc($result)) {
              $time = $row['time'];
              $email = $row['email'];

              // Fetch the form values from the database for the current time and email
              $sql = "SELECT * FROM orders WHERE time = '$time' AND email = '$email'";
              $orderResult = mysqli_query($conn, $sql);

              // Create an array to store the values for the current time and email
              $values = array();
              $values['time'] = $time;
              $values['email'] = $email;

              // Loop through the rows and store the relevant values
              while ($orderRow = mysqli_fetch_assoc($orderResult)) {
                  $values['name'] = $orderRow['name'];
                  $values['phone'] = $orderRow['phone'];
                  $values['address'] = $orderRow['address'];

                  $values['product_name'][] = $orderRow['product_name'];
                  $values['product_price'][] = $orderRow['product_price'];
                  $values['product_quantity'][] = $orderRow['product_quantity'];
              }

              // Add the values for the current time and email to the main array
              $formValues[] = $values;
          }

          mysqli_close($conn);
        ?>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>SN.</th>
              <th>Time</th>
              <th>Name</th>
              <th>Email address</th>
              <th>Mobile Number</th>
              <th>Address</th>
              <th>Product name</th>
              <th>Product price</th>
              <th>Product quantity</th>
            </tr>
          </thead>
          <tbody>
            <!-- php MySQL query -->
            <?php
            $sn = 0;
            foreach ($formValues as $values) {
              $sn++;
              echo "<tr>";
              echo "<td>" . $sn . "</td>";
              echo "<td>" . $values['time'] . "</td>";
              echo "<td>" . $values['name'] . "</td>";
              echo "<td>" . $values['email'] . "</td>";
              echo "<td>" . $values['phone'] . "</td>";
              echo "<td>" . $values['address'] . "</td>";

              // Loop through the product values and display them
              echo "<td>";
              foreach ($values['product_name'] as $productName) {
                  echo $productName . "<br>";
              }
              echo "</td>";

              echo "<td>";
              foreach ($values['product_price'] as $productPrice) {
                  echo $productPrice . "<br>";
              }
              echo "</td>";

              echo "<td>";
              foreach ($values['product_quantity']as $productQuantity) {
                  echo $productQuantity . "<br>";
              }
              echo "</td>";

              echo "</tr>";
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



<?php
include 'partials/_dbconnect.php';

// Update the mark column in the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['rowId'])) {
    $rowId = $_POST['rowId'];
    $updateSql = "UPDATE `orders` SET `mark` = IF(`mark` = 'marked', 'unmarked', 'marked') WHERE `sno` = ?";
    $updateStmt = mysqli_prepare($conn, $updateSql);
    mysqli_stmt_bind_param($updateStmt, 'i', $rowId);
    mysqli_stmt_execute($updateStmt);
    mysqli_stmt_close($updateStmt);
  }
}

// Retrieve the mark status from the database for all rows
$retrieveSql = "SELECT `sno`, `mark` FROM `orders`";
$retrieveResult = mysqli_query($conn, $retrieveSql);
$markValues = array();

while ($row = mysqli_fetch_assoc($retrieveResult)) {
  $markValues[$row['sno']] = $row['mark'];
}

mysqli_close($conn);
?>



<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Agro-Bd</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">


  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

  
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/headerNestedDropdown.css" />
  <style>
    .marked-row .btn-primary {
      background-color: gray !important;
    }
    .btn-primary {
      background-color: blue !important;
    }
  </style>

</head>

<body>
  <!-- Header -->
  <?php require 'partials/_staffHeader.php'?>

  <div class="container"style="max-width: 1260px; margin-top: 70px; margin-bottom: 200px; ">
    <div class="row d-flex justify-content-center" style="margin-bottom:79px;">
      <u class="col-auto" ><h2 style=" ">Our Orders</h2></u>
      <!-- <hr/> -->
      <p class="col-12" style="text-align: center;"><span style="color: black">You should maintain privacy policy,<br>these are our very valuable customers do not share their information with others!!</span></p> <br>
    </div>

  <div class="container my-4">
    <?php
    include 'partials/_dbconnect.php';

    // Fetch unique times and emails from the orders table
    $sql = "SELECT DISTINCT time, email FROM orders";
    $result = mysqli_query($conn, $sql);

    // Create an associative array to store the form values for each time and email
    $formValues = array();

    // Fetch the form values for each time and email
    while ($row = mysqli_fetch_assoc($result)) {
      $time = $row['time'];
      $email = $row['email'];

      // Fetch the form values from the database for the current time and email
      $sql = "SELECT * FROM orders WHERE time = '$time' AND email = '$email'";
      $orderResult = mysqli_query($conn, $sql);

      // Create an array to store the values for the current time and email
      $values = array();
      $values['time'] = $time;
      $values['email'] = $email;

      // Loop through the rows and store the relevant values
      while ($orderRow = mysqli_fetch_assoc($orderResult)) {
        $values['sno'] = $orderRow['sno'];
        $values['name'] = $orderRow['name'];
        $values['phone'] = $orderRow['phone'];
        $values['address'] = $orderRow['address'];
        $values['product_name'][] = $orderRow['product_name'];
        $values['product_price'][] = $orderRow['product_price'];
        $values['product_quantity'][] = $orderRow['product_quantity'];
      }

      // Add the values for the current time and email to the main array
      $formValues[] = $values;
    }

    mysqli_close($conn);
  ?>

  <table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <tr>
        <th>SN.</th>
        <th>Time</th>
        <th>Name</th>
        <th>Email address</th>
        <th>Mobile Number</th>
        <th>Address</th>
        <th>Product name</th>
        <th>Product price</th>
        <th>Product quantity</th>
        <th>Mark</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $sn = 0;
        foreach ($formValues as $values) {
          $sn++;
          $rowId = $values['sno'];
          $markValue = $markValues[$rowId] ?? '';

          // Add the mark status to the button and row classes
          $rowClass = ($markValue == 'marked') ? 'marked-row' : '';
          $markButtonClass = ($markValue == 'marked') ? 'btn-primary' : '';
          $markButtonValue = ($markValue == 'marked') ? 'Unmark' : 'Mark';

          echo "<tr id='row-" . $rowId . "' class='" . $rowClass . "'>";
          echo "<td>" . $sn . "</td>";
          echo "<td>" . $values['time'] . "</td>";
          echo "<td>" . $values['name'] . "</td>";
          echo "<td>" . $values['email'] . "</td>";
          echo "<td>" . $values['phone'] . "</td>";
          echo "<td>" . $values['address'] . "</td>";
          echo "<td>" . implode("<br>", $values['product_name']) . "</td>";
          echo "<td>" . implode("<br>", $values['product_price']) . "</td>";
          echo "<td>" . implode("<br>", $values['product_quantity']) . "</td>";
          echo "<td>";
          echo "<button class='btn mark-button " . $markButtonClass . "' type='button' data-row-id='" . $rowId . "'>" . $markButtonValue . "</button>";
          






          echo "</td>";
          echo "</tr>";
        }
      ?>
    </tbody>
  </table>
      </div>
      </div>

  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

  <script>
//     $(document).ready(function() {
//       $('#example').DataTable({
//         paging: true, // Enable pagination
//         lengthMenu: [10, 25, 50, 100], // Define the number of records per page options
//         pageLength: 10 // Set the initial number of records per page
//       });
//     });



// function toggleMark(button) {
//   var rowId = $(button).data('row-id');
//   var markButtonValue = $(button).text();

//   // Iterate over each row and send AJAX request for update
//   $('tr[id^="row-"]').each(function() {
//     var currentRowId = $(this).attr('id').replace('row-', '');

//     // Send AJAX request for each row
//     $.ajax({
//       type: "POST",
//       url: "orders.php",
//       data: {
//         rowId: currentRowId
//       },
//       success: function() {
//         var row = $("#row-" + currentRowId);
//         row.toggleClass("marked-row");
//         var button = row.find("button");
//         button.toggleClass("btn-primary");
//         button.text(markButtonValue === "Mark" ? "Unmark" : "Mark");
//       }
//     });
//   });
// }
$(document).ready(function() {
  // Attach the click event to a parent element using event delegation
  $(document).on('click', 'button.mark-button', function() {
    var button = $(this);
    var rowId = button.data('row-id');
    var markButtonValue = button.text();

    // Send AJAX request
    $.ajax({
      type: "POST",
      url: "orders.php",
      data: {
        rowId: rowId
      },
      success: function() {
        var row = $("#row-" + rowId);
        row.toggleClass("marked-row");
        button.toggleClass("btn-primary");
        button.text(markButtonValue === "Mark" ? "Unmark" : "Mark");
      }
    });
  });

  

  $('#example').DataTable({
    paging: true,
    lengthMenu: [10, 25, 50, 100],
    pageLength: 10
  });
});





  </script>



</body>
</html>


    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> -->





    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> -->

.side-navbar {
  position: fixed;
  top: 0;
  left: 0;
  width: 200px;
  height: 100vh;
  background-color: #343a40; /* Change the background color as per your preference */
  padding: 20px;
  overflow-y: auto;
  z-index: 1; /* Lower z-index to ensure main navbar appears above */
  display: flex;
  flex-direction: column;
  align-items: center; /* Align links in the center */
}

.side-navbar ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.side-navbar li {
  margin-bottom: 10px;
}

.side-navbar a {
  color: #fff; /* Change the text color as per your preference */
  text-decoration: none;
  font-size: 16px;
  display: block;
  padding: 8px 10px;
  border-radius: 4px;
  transition: background-color 0.3s ease;
}

.side-navbar a:hover {
  background-color: #495057; /* Change the hover background color as per your preference */
}

.side-navbar .active {
  background-color: #007bff; /* Change the active link background color as per your preference */
  color: #fff;
}
