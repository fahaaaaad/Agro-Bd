<?php

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['signIn'])){
    include 'partials/_dbconnect.php';
      $username = $_POST['username'];
      $password = $_POST['password'];

      $sql = "SELECT * FROM `login` WHERE `username` = '$username'";
      $result = mysqli_query($conn, $sql);
      $num = mysqli_num_rows($result);
      // echo $num ;
      if($num == 1){
        while($row = mysqli_fetch_assoc($result)){
          if ($password == $row['password']){
            // $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("location: myinformation.php");
          }
          else{
          echo "Invalid credentials."; 
          }
        }
      }
      elseif($num == 0){
        $sql = "SELECT * FROM `alogin` WHERE `username` = '$username'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if($num == 1){
          while($row = mysqli_fetch_assoc($result)){
            if ($password == $row['password']){
            // $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("location: staffInformation.php");
            }
            else{
              echo "Invalid credentials."; 
            }
          }
        }
        else{
        echo "Invalid credentials."; 
        }
      }
      else{
      echo "Invalid credentials."; 
      }  
    }
  }
?>
<script>0</script>
<!-- Header -->



  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container-fluid">
      <a class="navbar-brand" href="#">Agro-Bd</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
  
  
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <!-- Home -->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
  
          <!-- About Us -->
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="ourTeam.php">About Us</a>
          </li>
  
          <!-- Blog -->
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="blog.php">Blog</a>
          </li>


          <!-- Blog -->
          <!-- <li class="nav-item">
            <a class="nav-link" aria-current="page" href="blog(demo).php">Blog</a>
          </li> -->
  
  
  
          <!-- Latest News -->
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="contact.php">Contact Us</a>
          </li>
  
  
  
          <!-- Farming Sectors -->
          <div class="menu-bar" style="padding-left: -15px;">
            <ul>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#">Farming
                  Sectors</a>
                <div class="dropdown-menu">
                  <ul>
                    <li class="nav-item dropdown"><a href="#">Animal Farming<i class="fas fa-caret-right"></i></a>
  
                      <div class="dropdown-menu-1">
                        <ul>
                          <li class="nav-item dropdown" style="padding-top: 12px;"><a href="cowTypes.php">Cow</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li><a href="goatTypes.php">Goat</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li><a href="buffaloTypes.php">Buffalo</a></li>
                          <!-- <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li style="padding-bottom: 12px;"><a href="#">Sheep</a></li> -->
                        </ul>
                      </div>
                    </li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a href="#">Fisheries<i class="fas fa-caret-right"></i></a>
  
                      <div class="dropdown-menu-1">
                        <ul>
                          <li style="padding-top: 12px;"><a href="carpTypes.php">Carp</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li style="padding-bottom: 12px;"><a href="prawnTypes.php">Prawn</a></li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a href="#">Poultry<i class="fas fa-caret-right"></i></a>
  
                      <div class="dropdown-menu-1">
                        <ul>
                          <li style="padding-top: 12px;"><a href="chickenTypes.php">Chicken</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li><a href="duckTypes.php">Duck</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li><a href="pigeonTypes.php">Pigeons</a></li>
                          <!-- <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li><a href="#">Quail</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li style="padding-bottom: 12px;"><a href="#">Turkey</a></li> -->
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
  
          </div>
  
  
  
          <!-- Our Products -->
          <div class="menu-bar" style="padding-left: -15px;">
            <ul>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#">Our Products</a>
                <div class="dropdown-menu">
                  <ul>
                    <li><a href="animal_feed.php">Animal Feed</a><li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a href="fish_feed.php">Fish Feed</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a href="poultry.php">Poultry Feed</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
  
  
  
          <!-- Our Solutions -->
          <div class="menu-bar" style="padding-left: -15px;">
            <ul>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#">Our Solutions</a>
                <div class="dropdown-menu">
                  <ul>
                    <li><a href="forFarmers.php">For Farmers</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a href="funders.php"> For Funders</a></li>
                    
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a href="#"> Supply Chain</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </ul>
  
  
  
        <div class="mx-2">
  
          <!-- Right Side Buttons -->
          <!-- login button -->
          <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#Loginmodal">
            Login
          </button>
  
  
          <!-- Modal -->
          <!-- login modal -->
          <div class="modal fade" id="Loginmodal" tabindex="-1" aria-labelledby="LoginmodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="LoginmodalLabel">Agro Bd</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
  
  
                  <!-- login form -->
                  <form action="" method="post">
                    <img class="mb-4 center" src="logo.png" alt="" width="72" height="57">
                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
  
                    <div class="form-floating my-3">
                      <input type="text" class="form-control" name="username" id="floatingInput">
                      <label for="floatingInput">username</label>
                    </div>
                    <div class="form-floating my-3">
                      <input type="password" class="form-control" name="password" id="floatingPassword"
                        placeholder="Password">
                      <label for="floatingPassword">Password</label>
                    </div>
  
                    <div class="form-check text-start my-3">
                      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                      </label>
                    </div>
  
                    <!-- <button class="btn btn-primary w-100 py-2" type="submit" name="signIn" id="Save" value=" Save ">Sign in</button> -->
                    <!-- Submit button -->
                    <div>
                      <input type="submit" name="signIn" class="btn btn-success" id="signIn" value=" sign In "
                        style="width:100px;" />
                    </div>
                  </form>
  
  
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
          </div>
  
  
          <!-- <button type="button" class="btn btn-secondary">En</button>
          <button type="button" class="btn btn-success">Bd</button> -->
        </div>
      </div>
    </div>
  </nav>




<!-- nav bar -->


<!-- <nav class="navbar navbar-default mt-5 sticky-top">
  <div class="container">
    ...
  </div>
</nav> -->