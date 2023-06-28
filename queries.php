<!-- <div id='checkbox-container'>
  <input type='checkbox' id='option1'>
</div> -->

<?php
  
  if(isset($_POST['mark'])){
    $markValue = $_POST['mark'];
    echo $markValue;
  }

?>

<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agro-Bd</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js"
      integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous">
      </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">


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

    <div class="container" style="max-width: 1385px; margin-top: 70px; margin-bottom: 200px; ">
      <div class="row d-flex justify-content-center" style="margin-bottom:79px;">
        <h2 class="col-auto" style=" "> Queries</h2>
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
            $result = mysqli_query($conn,$sql);
            // $num = mysqli_num_rows($result);
            $sn = 0;
            // $tr = 0;
            while($row = mysqli_fetch_assoc($result)){
              $sn = $sn + 1;
              echo "<tr class='table-row-marked'>
                      <td>". $sn. "</td>
                      <td>". $row['email']. "</td>
                      <td>". $row['date']. "</td>
                      <td>". $row['name']. "</td>
                      <td>". $row['mobile']. "</td>
                      <td><textarea rows='3' cols='20' name='usrtxt' wrap='hard' style='width: 100%; background: inherit;'>". $row['problem']. "</textarea></td>
                      <td><a href='mailto:".$row['email']."'><button class='btn btn-success' type='button' value='Input'>Reply</button></a></td>
                      <td>
                        <button class='btn btn-primary' type='button' value='mark' onclick='checkboxcolorrow(this)'>Marked</button>
                      </td>
                    </tr>";
            }
          ?>
          </tbody>

        </table>
      </div>
    </div>

                        <!-- if(isset($_POST['mark'])){
                          if($row['mobile'] == 'unmarked'){
                            $sql = "UPDATE `problems` SET `marked` = `marked` WHERE `date` = '$row['date']'";
                            $result = mysqli_query($conn,$sql);
                          }
                          elseif($row['mobile'] == 'marked'){
                            $sql = "UPDATE `problems` SET `marked`= 'unmarked' WHERE `date` = '$row['date']'";
                            $result = mysqli_query($conn,$sql);
                          }
                        }
                        echo"
                          <form action='' method='post'>
                            <input type='submit' name='mark' class='btn btn-success' id='mark' value='Mark' style='width:90px;' />
                          </form>
                        ";?> -->
                        <?php
                          // echo"
                          //   <form action='' method='post'>
                          //     <input type='submit' name='mark' class='btn btn-success' id='mark' value='Mark' style='width:90px;' />
                          //   </form>";
                            ?>


    <!-- footer -->
    <?php require 'partials/_footer.php'?>

<!-- <button class='btn btn-primary' type='button' value='mark'>Marked</button> -->
<?php
  // if(isset($_POST['mark'])){
  //   if($row['mobile'] == 'unmarked'){
  //     $sql = "UPDATE `problems` SET `marked`= 'marked' WHERE `date` = '$row['date']'";
  //     $result = mysqli_query($conn,$sql);
  //   }
  //   elseif($row['mobile'] == 'marked'){
  //     $sql = "UPDATE `problems` SET `marked`= 'unmarked' WHERE `date` = '$row['date']'";
  //     $result = mysqli_query($conn,$sql);
  //   }
  // }
  // echo"
  //   <form action='' method='post'>
  //     <input type='submit' name='mark' class='btn btn-success' id='mark' value='Mark' style='width:90px;' />
  //   </form>
  // ";

?>

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
      let current_url = document.location;
      document.querySelectorAll(".navbar .color").forEach(function (e) {
        if (e.href == current_url) {
          e.classList += " current";
        }
      });
    </script>

<!-- <script>
  let buttons = document.querySelectorAll(".btn");
  for(let i = 0; <buttons.length; i++) {
    buttons[i].addEventListener("click",function(){
      alert(this.innertext + "clicked");
    });
  }
</script> -->
    <!-- <script>
      function checkboxcolorrow(result) {
        if (result.Done) {
          result.parentNode.parentNode.style.backgroundColor = "#a4ffff4d";
          result.parentNode.parentNode.style.color = "black";
        }
        else {
          result.parentNode.parentNode.style.backgroundColor = "";
          result.parentNode.parentNode.style.color = "";
        }
      }
    </script> -->

<!-- <script>

var elements = document.getElementsByClassName('table-row-marked');

// Iterate over the elements and change their color
for (var i = 0; i < elements.length; i++) {
  elements[i].style.backgroundColor = 'red'; // Change the color to your desired value
}

</script> -->

    <!-- <script>
    $(document).on('click', '#data td', function(e) {
      if ($(this).is('td')) {
        row.children('td').css('background-color', '#FFFFCC');
          $('.cancel').once('click', function(ev){
                  row.children('td').css('background-color', '#FFFFFF'); //---The prev color     
          });
      } else {
        $('#data tr').toggleClass('highlighted');
      }
    });

      row.children('td').css('background-color', '#FFFFCC');
      //---Add the event to the cancel.
      $('.cancel').once('click', function(ev){
              row.children('td').css('background-color', '#FFFFFF'); //---The prev color     
      });

    
    </script>
    <script>
      function checkboxcolorrow(result) {
        if (result.Done) {
          result.parentNode.parentNode.style.backgroundColor = "#a4ffff4d";
          result.parentNode.parentNode.style.color = "black";
        }
        else {
          result.parentNode.parentNode.style.backgroundColor = "";
          result.parentNode.parentNode.style.color = "";
        }
      }
    </script> -->

    <!-- extra check box remains checked -->
    <!-- <script>


      var formValues = JSON.parse(localStorage.getItem('formValues')) || {};
      var $checkboxes = $("#checkbox-container :checkbox");
      var $button = $("#checkbox-container button");

      function allChecked() {
        return $checkboxes.length === $checkboxes.filter(":checked").length;
      }

      function updateButtonStatus() {
        $button.text(allChecked() ? "Uncheck all" : "Check all");
      }

      function handleButtonClick() {
        $checkboxes.prop("checked", allChecked() ? false : true)
      }

      function updateStorage() {
        $checkboxes.each(function () {
          formValues[this.id] = this.checked;
        });

        formValues["buttonText"] = $button.text();
        localStorage.setItem("formValues", JSON.stringify(formValues));
      }

      $button.on("click", function () {
        handleButtonClick();
        updateButtonStatus();
        updateStorage();
      });

      $checkboxes.on("change", function () {
        updateButtonStatus();
        updateStorage();
      });

      // On page load
      $.each(formValues, function (key, value) {
        $("#" + key).prop('checked', value);
      });

      $button.text(formValues["buttonText"]);

    </script> -->

  </body>

</html>