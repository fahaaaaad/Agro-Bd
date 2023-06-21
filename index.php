
<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
    }
    else{
        $showError = "Passwords do not match";
    }
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/headerNestedDropdown.css" />
  </head>

  <body>
    <!-- css first -->
    <script>0</script>

    
      <?php
    if($showAlert){
    echo ' <div class="alert alert-primary alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You are ready to login.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>
    
    <!-- Header -->
    <?php require 'partials/_header.php' ?>
   
    <!-- slider -->
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="slide1.jpg" class="d-block w-100 h-25" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1>Welcome to Agro-Bd</h1>
            <p>Grow. Nurture. Harvest.</p>
            <button class="btn btn-danger ml-md-2">Harvest</button>
            <button class="btn btn-success ml-md-2">Farming</button>
            <button class="btn btn-primary ml-md-2 ml-4">Greenery</button>
          </div>
        </div>
        <div class="carousel-item">
          <img src="slider2.jpg" class="d-block w-100 h-25" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1>Welcome to Agro-Bd</h1>
            <p>Grow. Nurture. Harvest.</p>
            <button class="btn btn-danger ml-md-2">Harvest</button>
            <button class="btn btn-success ml-md-2">Farming</button>
            <button class="btn btn-primary ml-md-2 ml-4">Greenery</button>
          </div>
        </div>
        <div class="carousel-item">
          <img src="slider3.jpg" class="d-block w-100 h-25" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1>Welcome to Agro-Bd</h1>
            <p>Grow. Nurture. Harvest.</p>
            <button class="btn btn-danger ml-md-2">Harvest</button>
            <button class="btn btn-success ml-md-2">Farming</button>
            <button class="btn btn-primary ml-md-2 ml-4">Greenery</button>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- who we are text -->
    <div class="container my-5 text-center"> <!-- Added text-center class -->
      <div class="d-sm-flex flex-sm-column align-items-center"> <!-- Added align-items-center class -->
        <h1 class="section-header landing-section-title title-font">
          Who We Are
        </h1>

        <div class="landing-section-content">
          <div>Agro-Bd is a technology company that enables small-scale</div>
          <div>farmers and Agri Businesses to maximize their profit.</div>
        </div>
      </div>
    </div>
    <!-- card -->
    <div class="container my-4">
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">

              <h3 class="mb-0">Farmer</h3>

              <p class="card-text mb-auto">We bundle everything a farmer needs to maximize profit: financing, farm
                inputs and advisory, insurance, and access to
                market.</p>

            </div>
            <div class="col-auto d-none d-lg-block">
              <img class="bd-placeholder-img" width="400" height="250"
                src="https://source.unsplash.com/random/1200x400/?Farmer" alt="" srcset="">

              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c"></rect>
              </svg>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">

              <h3 class="mb-0">Agriculture Companies</h3>

              <p class="mb-auto">We work with agricultural input companies and service providers, offering quality
                agriculture input and advisory
                services to the farmers
              </p>

            </div>
            <div class="col-auto d-none d-lg-block">
              <img class="bd-placeholder-img" width="400" height="250"
                src="https://source.unsplash.com/random/1200x400/?Agriculture Companies" alt="" srcset="">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c"></rect>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- card2 -->
    <div class="container my-4">
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">

              <h3 class="mb-0">Buyers</h3>

              <p class="card-text mb-auto">We source directly from the farmers and supply agriculture produce in bulk
                quantity to large enterprises, modern trade
                retailers and wholesale markets.</p>

            </div>
            <div class="col-auto d-none d-lg-block">
              <img class="bd-placeholder-img" width="400" height="250"
                src="https://source.unsplash.com/random/1200x400/?green field" alt="" srcset="">


              <rect width="100%" height="100%" fill="#55595c"></rect>
              </svg>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">

              <h3 class="mb-0">Funders</h3>

              <p class="mb-auto">We work with agricultural input companies and service providers, offering quality
                agriculture input and advisory
                services to the farmers
              </p>

            </div>
            <div class="col-auto d-none d-lg-block">
              <img class="bd-placeholder-img" width="400" height="250"
                src="https://source.unsplash.com/random/1200x400/?company" alt="" srcset="">

              <rect width="100%" height="100%" fill="#55595c"></rect>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- big card with image -->
    <div class="container my-4">
      <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
        <div class="row">
          <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">A Comprehensive Guide to Sustainable Farming Practices</h1>
            <p class="lead my-3">In today's rapidly changing world, sustainable farming practices have become paramount
              for
              ensuring long-term agricultural success. This blog post dives deep into the realm of sustainable farming,
              providing a comprehensive guide that covers various aspects of this innovative approach.</p>
            
            <button type="button" class="btn btn-outline-success lead mb-0"><a href="market.php" class="text-white fw-bold">Continue reading...</a></button>
          </div>
          <div class="col-md-6 px-0">
            <img src="big_card.jpg" alt="Image description" class="img-fluid" style="height: 400px;">
          </div>
        </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"></script>

  </body>

</html>