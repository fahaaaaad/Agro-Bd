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
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Loginmodal">
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
                <form>
                  <img class="mb-4" src="logo.jpg" alt="" width="100" height="100">
                  <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                  <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                  </div>
                  <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                  </div>

                  <div class="checkbox mb-3">
                    <label>
                      <input type="checkbox" value="remember-me"> Remember me
                    </label>
                  </div>
                  <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

                  <button type="button" class="mt-4 btn btn-danger">Forget Password</button>
                </form>
              </div>

              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>

        <button type="button" class="btn btn-secondary">En</button>
        <div style="margin-left: 10px;">
          <button type="button" class="btn btn-success">Bd</button>
        </div>
      </div>
    </div>
</nav>