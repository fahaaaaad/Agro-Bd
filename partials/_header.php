
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
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            About Us
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="ourTeam.php">Our team</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#"> Contact</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#"> Awards</a></li>
          </ul>
        </li>


        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.html">Latest News</a>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Farming Sectors
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"> Animal Farming</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#"> Fisheries</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#"> Poultry</a></li>
          </ul>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Our Products
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"> Product Types</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#"> Our Factories/Laboratories</a></li>
          </ul>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Our Solutions
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="farming_sector.php">For Farmers</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#"> For Funders</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#"> Agri-Input</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#"> Supply Chain</a></li>
            <!-- <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="#">Something else here</a></li> -->
          </ul>
        </li>

      </ul>
          <div class="mx-2">


            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#Loginmodal">
              Login
            </button>
            <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#Loginmodal2">
              signup
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
                    <form>
                      <img class="mb-4 center" src="logo.png" alt="" width="72" height="57">
                      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                      <div class="form-floating my-3">
                        <input type="text" class="form-control" id="floatingInput">
                        <label for="floatingInput">username</label>
                      </div>
                      <div class="form-floating my-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                      </div>

                      <div class="form-check text-start my-3">
                        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Remember me
                        </label>
                      </div>
                      <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>


                    </form>


                  </div>
                  <div class="modal-footer">

                  </div>
                </div>
              </div>
            </div>

            <!-- Modal2 -->
            <!-- Signuplogin modal -->
            <div class="modal fade" id="Loginmodal2" tabindex="-1" aria-labelledby="LoginmodalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="LoginmodalLabel">Agro Bd</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body ">
                    <!-- form action -->
                    <form action="" method="post">
                      <img class="mb-4 center" src="logo.png" alt="" width="72" height="57">
                      <h1 class="h3 mb-3 fw-normal">Please signup</h1>

                      <div class="form-floating my-3">
                        <input type="text" class="form-control" id="username" name="username">
                        <label for="floatingInput">username</label>
                      </div>
                      <div class="form-floating my-3">
                        <input type="password" class="form-control" id="Password" placeholder="Password"
                          name="password">
                        <label for="password">Password</label>
                      </div>
                      <div class="form-floating my-3">
                        <input type="text" class="form-control" id="cpassword" name="cpassword">
                        <label for="cpassword">Confirm Passworf</label>
                      </div>

                      <button class="btn btn-primary w-100 py-2" type="submit">signup</button>


                    </form>


                  </div>
                  <div class="modal-footer">

                  </div>
                </div>
              </div>
           



        </div>
      </div>
      </div>
    </nav>
