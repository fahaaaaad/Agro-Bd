
<?php

$update = false;
$login = false;
$myinformation = false;
$delete = false;

?>

<?php
include 'partials/_dbconnect.php';
//  Password Change
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if(isset($_POST['usernameEdit'])){
    // Update the record
    $username = $_POST['usernameEdit'];
    $newPassword = $_POST['passwordEdit'];
    //sql query to be executed
    $sql ="UPDATE `login` SET `password` = '$newPassword' WHERE `login`.`username` = '$username'";
    $result = mysqli_query($conn, $sql);
    if($result){
      $update = true;
    }
    else{
      echo "Failed to Updated record successfully! <br>";
    }
  }
}

//  Removing Data from the DataBase
if(isset($_GET['delete'])){
  $username = $_GET['delete'];
  $sql = "DELETE FROM `myinformation` WHERE `username` = '$username'";
  $result = mysqli_query($conn, $sql);

  $sql = "DELETE FROM `login` WHERE `username` = '$username'";
  $result = mysqli_query($conn, $sql);
  if($result){
    $delete = true;
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
  </head>

  <body>
    <!-- css first -->
    <script>0</script>

    <!-- Edit modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="editModalLabel">Edit Password</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <form action="staffPasswordChange.php" method="POST" style="min-width: fit-content;">
              <div class="modal-body">
                <input type="hidden" name="usernameEdit" id="usernameEdit">
                <div class="form-group">
                  <label for="passwordEdit">Password</label>
                  <input type="text" name="passwordEdit" class="form-control" id="passwordEdit" />
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </form>
        </div>
      </div>
    </div>

    <!-- Header -->
    <?php require 'partials/_staffHeader.php'?>

    <!-- Alerts -->
<?php

      if($update){
        echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success!</strong>Password has been Updated successfully in the DataBase!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
      }

      if($delete){
        echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success!</strong> Your selected username has been deleted successfully from the DataBase!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
              ';
      }

?>

    <!-- body -->

    <div class="container"style="max-width: 900px; margin-top: 70px; margin-bottom: 200px; ">
      <div class="row d-flex justify-content-center" style="margin-bottom:79px;">
        <u class="col-auto" ><h2 style=" ">Staff Passwords</h2></u>
        <!-- <hr/> -->
        <p class="col-12" style="text-align: center;"><span style="color: black">You should maintain staffs privacy,<br>these are our very valuable staffs do not share there information with others!!</span></p> <br>
      </div>
      <div class="container my-4" style="min-width: 900px;">


        <table id="example" class="table table-striped table-bordered" style="min-width: 900px; width:100%">
          <thead>
            <tr>
              <th>SN.</th>
              <th>UserName</th>
              <th>Password</th>
              <th>Actions</th>

            </tr>
          </thead>
          <tbody>
            <!-- php MySQL query -->
            <?php
              $sql = "SELECT * FROM `login`";
              $result = mysqli_query($conn,$sql);
              // $num = mysqli_num_rows($result);
              $sn = 0;
              while($row = mysqli_fetch_assoc($result)){
                $sn = $sn + 1;
                echo "<tr>
                        <td>". $sn. "</td>
                        <td>". $row['username']. "</td>
                        <td>". $row['password']. "</td>
                        <td style='min-width: 110px;''><button class='edit btn btn-sm btn-primary' id=". $row['username'].">Edit</button> <button class='delete btn btn-sm btn-primary' id=d". $row['username'].">Delete</button></td>
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
      edits = document.getElementsByClassName('edit');
      Array.from(edits).forEach((element) => {
        element.addEventListener("click", (e) => {
          console.log("edit ");
          tr = e.target.parentNode.parentNode;
          password = tr.getElementsByTagName("td")[2].innerText;
          console.log(password);
          passwordEdit.value = password;
          usernameEdit.value = e.target.id;
          console.log(e.target.id);
          $('#editModal').modal('toggle');
        })
      })


      deletes = document.getElementsByClassName('delete');
      Array.from(deletes).forEach((element)=>{
        element.addEventListener("click", (e) => {
          console.log("edit ");
          username = e.target.id.substr(1);
          if(confirm("Are you sure you want to remove this booking!")){
            console.log("yes");
            window.location = `staffPasswordChange.php?delete=${username}`;
          }
          else{
            console.log("no");
          }
        })
      })
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