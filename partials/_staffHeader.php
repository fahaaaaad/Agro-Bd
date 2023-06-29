<?php

  include 'partials/_dbconnect.php';
  session_start();
  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: loginPage.php");
    exit;
  }

?>

<?php
////   selecting user   ////
require 'partials/_user.php';

  echo '
    <script>0</script>
    <!-- Header -->

    <!-- nav bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Agro-Bd</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">';?><?php

          if($staff){
            echo '
            <!-- My Profile -->
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="myinformation.php">My Profile</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="queries.php">Queries</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="emailCollection.php">Emails</a>
            </li>';
          }
          if($admin){
            echo'
            <div class="menu-bar" style="padding-left: -15px;">
              <ul>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#">Staffs</a>
                  <div class="dropdown-menu">
                    <ul>
                      <li><a href="staffInformation.php">Staff Information</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a href="staffPasswordChange.php">Password Change</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a href="staffEntry.php">Staff Entry</a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="blogEntry.php">Blog</a>
            </li>

            <div class="menu-bar" style="padding-left: -15px;">
              <ul>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#">Products</a>
                  <div class="dropdown-menu">
                    <ul>
                      <li><a href="cattleFeedTable.php">Cattle</a><li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a href="fishFeedTable.php">Fish</a></li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a href="poultryFeedTable.php">Poultry</a></li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a href="animalFeedEntry.php">Product Entry</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
            ';


          }
          echo '
          </ul>


          <div class="mx-2">';?>


          <?php
          if($admin){
            // echo '
            // <!-- Right Side Buttons -->
            // <!-- SignUp button -->
            // <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#Loginmodal2">signup</button>


            // <!-- Modal2 -->
            // <!-- Signuplogin modal -->
            // <div class="modal fade" id="Loginmodal2" tabindex="-1" aria-labelledby="LoginmodalLabel" aria-hidden="true">
            //   <div class="modal-dialog modal-dialog-centered">
            //     <div class="modal-content">
            //       <div class="modal-header">
            //         <h1 class="modal-title fs-5" id="LoginmodalLabel">Agro Bd</h1>
            //         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            //       </div>
            //       <div class="modal-body ">
            //         <!-- form action -->
            //         <form action="" method="post">
            //           <img class="mb-4 center" src="logo.png" alt="" width="72" height="57">
            //           <h1 class="h3 mb-3 fw-normal">Please signup</h1>

            //           <div class="form-floating my-3">
            //             <input type="text" class="form-control" id="username" name="username">
            //             <label for="floatingInput">username</label>
            //           </div>
            //           <div class="form-floating my-3">
            //             <input type="password" class="form-control" id="Password" placeholder="Password" name="password">
            //             <label for="password">Password</label>
            //           </div>
            //           <div class="form-floating my-3">
            //             <input type="text" class="form-control" id="cpassword" name="cpassword">
            //             <label for="cpassword">Confirm Passworf</label>
            //           </div>

            //           <button class="btn btn-primary w-100 py-2" type="submit">signup</button>

            //         </form>


            //       </div>
            //       <div class="modal-footer">
            //       </div>

            //     </div>
            //   </div>
            // </div>';
          }


          echo '
            <button type="button" class="btn btn-outline-danger">
              <a href="/AgroBDc/Agro-Bd-1/partials/_logout.php" style="a:hover {color: white;};">Log out</a>
            </button>
            <button type="button" class="btn btn-secondary">En</button>
            <button type="button" class="btn btn-success">Bd</button>
          </div>



        </div>
      </div>
    </nav>';
?>

