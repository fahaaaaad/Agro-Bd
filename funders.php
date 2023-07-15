<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agro-Bd</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/headerNestedDropdown.css" />
    <style>
      #card text-bg-dark img {
        max-height: 500px;
        /* Adjust the max-height as desired */
        object-fit: contain;
        /* Maintain image aspect ratio */
      }
    </style>
  </head>

  <body>
    <!-- Navbar -->
    <?php require 'partials/_header.php' ?>

    <!-- Page card image -->
    <div class="card text-bg-dark">
      <img src="images/funders.jpg" class="card-img" alt="...">
      <div class="card-img-overlay text-center">
        <h1 class="card-title py-5">Digital Lending Services for Farmers and Agri MSMEs: Revolutionizing Agricultural
          Financing</h1>
        <p class="card-text">Agro BD: Closing the Data Gap for Farmer Financial Inclusion. Revolutionizing Financial
          Services for Smallholder Farmers.</p>
      </div>
    </div>
    </div>


    

    <div class="b-example-divider"></div>

    <div class="my-5">
      <div class="p-5 text-center bg-body-tertiary">
        <div class="container py-5">
          <h1 class="text-body-emphasis">How we work</h1>
          <p class="col-lg-8 mx-auto lead">
            We collaborate with financial institutions to offer tailored financing solutions for agriculture MSMEs.
            Using alternative data and our proprietary credit scoring algorithm, we ensure efficient loan approvals and
            timely fund disbursement. Additionally, we provide advisory support, training programs, and monitoring
            services to maximize profitability and enable sustainable growth. Join us at Agro Bd to
            revolutionize financing for Agri MSMEs and drive economic prosperity in the agriculture sector.
          </p>
        </div>
      </div>
    </div>

    <div class="b-example-divider"></div>

    <div class="my-5">
      <div class="p-5 text-center bg-body-tertiary">
        <div class="container py-5">
          <h1 class="text-body-emphasis">Enabling Investment in Farming</h1>
          <p class="col-lg-8 mx-auto lead">
            At Agro BD, we connect investors with impactful agriculture projects managed by farmers. With various
            investment sizes available, we offer attractive yields and insurance options to de-risk investments. Our
            transparent approach ensures visibility of project needs and progress. Join us to support sustainable
            agriculture and earn profitable returns.
          </p>
        </div>
      </div>
    </div>

    <div class="b-example-divider"></div>

    <div class="my-5">
      <div class="p-5 text-center bg-body-tertiary">
        <div class="container py-5">
          <h1 class="text-body-emphasis">Why Work With Us</h1>
          <ul class="list-group py-5">
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-1"><i class="bi bi-check-circle-fill"></i></div>
                <div class="col-md-11">
                  <h5>Expertise in Agriculture</h5>
                  <p>We have deep knowledge and experience in the agriculture sector, enabling us to provide specialized
                    services tailored to the unique needs of farmers and agri businesses.</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-1"><i class="bi bi-check-circle-fill"></i></div>
                <div class="col-md-11">
                  <h5>Comprehensive Solutions</h5>
                  <p>We offer a comprehensive range of services, including financing, access to inputs, training,
                    advisory support, and market connections. This holistic approach ensures that our clients have all
                    the necessary tools and support to succeed.</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-1"><i class="bi bi-check-circle-fill"></i></div>
                <div class="col-md-11">
                  <h5>Financial Inclusion</h5>
                  <p>Our mission is to promote financial inclusion among farmers and agri MSMEs. By bridging the gap
                    between financial institutions and the agricultural community, we create opportunities for growth
                    and prosperity.</p>
                </div>
              </div>
            </li>
            <!-- Repeat the above structure for the remaining points -->
          </ul>
        </div>
      </div>
    </div>



    <!-- Footer -->
    <?php require 'partials/_footer.php'?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
      function showFullStory() {
        var fullStoryDiv = document.getElementById("fullStory");
        var seeMoreBtn = document.getElementById("seeMoreBtn");

        if (fullStoryDiv.style.display === "none") {
          fullStoryDiv.style.display = "block";
          seeMoreBtn.innerText = "See Less";
        } else {
          fullStoryDiv.style.display = "none";
          seeMoreBtn.innerText = "See More";
        }
      }
    </script>
  </body>

</html>