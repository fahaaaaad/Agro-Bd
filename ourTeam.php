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

    <!-- Header -->
    <?php require 'partials/_header.php'?>

    <!-- body -->

    <div class="container my-20">
      <div class="row featurette d-flex justify-content-center align-items-center" style="margin-bottom: 50px;">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">Md. Fahad Miah <span class="text-body-secondary">As a farming
              website developer,.</span></h2>
          <p class="lead">I invite you to join me in revolutionizing agriculture through digital transformation.
            Together, we'll cultivate the future, blending innovation and tradition on virtual fields. Our tailor-made
            websites empower farmers with the tools for success, bridging functionality and aesthetics. Let us sow the
            seeds
            of
            digital success, harnessing technology to grow a thriving community of progressive farmers. Join me on this
            exciting
            journey where farming and technology unite, yielding growth and prosperity. Together, we will nurture the
            digital
            soil and harvest the rewards of our collective efforts. Embrace the digital age, and let's cultivate a
            brighter
            future for agriculture.</p>
        </div>
        <div class="col-md-5">
          <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded-circle"
            width="300" height="300" src="fahad.jpg" alt="" srcset="" style="margin-top: 50px;">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect>
          </svg>
        </div>
      </div>
      <hr>


      <div class="row featurette d-flex justify-content-center align-items-center" style=" margin-bottom: 50px;">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading fw-normal lh-1">Shyan Tusher <span class="text-body-secondary">As a farming
              website developer,.</span></h2>
          <p class="lead">I invite you to join me in revolutionizing agriculture through digital transformation.
            Together, we will cultivate the future, blending innovation and tradition on virtual fields. Our tailor-made
            websites empower farmers with the tools for success, bridging functionality and aesthetics. Let us sow the
            seeds
            of
            digital success, harnessing technology to grow a thriving community of progressive farmers. Join me on this
            exciting
            journey where farming and technology unite, yielding growth and prosperity. Together, we will nurture the
            digital
            soil and harvest the rewards of our collective efforts. Embrace the digital age, and let's cultivate a
            brighter
            future for agriculture.</p>
        </div>
        <div class="col-md-5">
          <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded-circle"
            width="300" height="300" src="tusher.jpg" alt="" srcset="">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect>
          </svg>
        </div>
      </div>
      <hr>
      <div class="row featurette d-flex justify-content-center align-items-center" style="margin-bottom: 50px;">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">Mahmudul Hasan <span class="text-body-secondary">As a farming
              website developer,.</span></h2>
          <p class="lead">I invite you to join me in revolutionizing agriculture through digital transformation.
            Together, we will cultivate the future, blending innovation and tradition on virtual fields. Our tailor-made
            websites empower farmers with the tools for success, bridging functionality and aesthetics. Let us sow the
            seeds
            of
            digital success, harnessing technology to grow a thriving community of progressive farmers. Join me on this
            exciting
            journey where farming and technology unite, yielding growth and prosperity. Together, we will nurture the
            digital
            soil and harvest the rewards of our collective efforts. Embrace the digital age, and let's cultivate a
            brighter
            future for agriculture.</p>
        </div>
        <div class="col-md-5">
          <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto " width="700"
            height="700" src="https://source.unsplash.com/random/1200x400/?people" alt="" srcset="">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect>
          </svg>
        </div>
      </div>

    </div>

    <div class="container">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </div>


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