<?php
// Initialize $markValue with an empty string
  $markValue = '';

include 'partials/_dbconnect.php';

// Update the mark column in the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['rowId'])) {
    $rowId = $_POST['rowId'];
    $updateSql = "UPDATE `problems` SET `marked` = IF(`marked` = 'marked', 'unmarked', 'marked') WHERE `sno` = ?";
    $updateStmt = mysqli_prepare($conn, $updateSql);
    mysqli_stmt_bind_param($updateStmt, 'i', $rowId);
    mysqli_stmt_execute($updateStmt);
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

  <style>
    .marked-row .btn-primary {
      background-color: gray !important;
    }
  </style>

  </head>

  <body>
    <!-- Header -->
    <?php require 'partials/_staffHeader.php'?>

    <!-- Body -->
    <div class="container" style="max-width: 1385px; margin-top: 70px; margin-bottom: 200px; ">
      <div class="row d-flex justify-content-center" style="margin-bottom:79px;">
        <h2 class="col-auto">Queries</h2>
        <hr />
        <p class="col-auto"><span style="color: red">You should reply within 24 hours! as per our rules &
            regulation.</span></p>
      </div>
      <div class="container my-4">
        <table id="data" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>SN.</th>
              <th>Email address</th>
              <th>Time</th>
              <th>Name</th>
              <th>Mobile Number</th>
              <th>Query</th>
              <th>Action</th>
              <th>Mark</th>
            </tr>
          </thead>
          <tbody>
            <!-- php MySQL query -->
            <?php
            $sql = "SELECT * FROM `problems`";
            $result = mysqli_query($conn, $sql);
            $sn = 0;
            while ($row = mysqli_fetch_assoc($result)) {
              $sn = $sn + 1;
              $rowClass = ($row['marked'] == 'marked' ? 'marked-row' : '');
              $markButtonClass = ($row['marked'] == 'marked' ? 'btn-marked' : '');
              $markButtonValue = ($row['marked'] == 'marked' ? 'Unmark' : 'Mark');
              echo "<tr id='row-" . $row['sno'] . "' class='" . $rowClass . "'>";
              echo "<td>" . $sn . "</td>";
              echo "<td>" . $row['email'] . "</td>";
              echo "<td>" . $row['date'] . "</td>";
              echo "<td>" . $row['name'] . "</td>";
              echo "<td>" . $row['mobile'] . "</td>";
              echo "<td><textarea rows='3' cols='20' name='usrtxt' wrap='hard' style='width: 100%; background: inherit;'>" . $row['problem'] . "</textarea></td>";
              echo "<td><a href='mailto:" . $row['email'] . "'><button class='btn btn-success' type='button' value='Input'>Reply</button></a></td>";
              echo "<td>";
              echo "<button class='btn btn-primary' type='button' onclick='toggleMark(" . $row['sno'] . ")'>" . $markButtonValue . "</button>";
              echo "</td>";
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Footer -->
    <?php require 'partials/_footer.php'?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script>
      $(document).ready(function () {
        $('.table').DataTable();
      });
    </script>

    <script>
      function toggleMark(rowId) {
        // Update the UI by toggling the marked-row class and changing the text of the button
        var row = document.getElementById('row-' + rowId);
        var markButton = row.querySelector('.btn-primary');
        row.classList.toggle("marked-row");
        markButton.innerText = (markButton.innerText === "Mark") ? "Unmark" : "Mark";

        // Make an AJAX request to update the mark in the database
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "", true); // The same page (queries.php)
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
          if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle the response if needed
          }
        };
        xhr.send("rowId=" + rowId);
      }
    </script>


  </body>

</html>