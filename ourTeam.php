<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Our Team</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/headerNestedDropdown.css" />
  <style>
    #carouselExampleSlidesOnly img {
      max-height: 700px; /* Adjust the max-height as desired */
      object-fit: contain; /* Maintain image aspect ratio */
    }
  </style>
</head>
<body>
  <!-- Header -->
  <?php require 'partials/_header.php' ?>

  <!-- our team -->
  <div class="container my-5 text-center"> <!-- Added text-center class -->
      <div class="d-sm-flex flex-sm-column align-items-center"> <!-- Added align-items-center class -->
        <h1 class="section-header landing-section-title title-font">
         Our Team
        </h1>

        <div class="landing-section-content">
          <div>With a collaborative spirit and a wealth of expertise, .</div>
          <div>our team works tirelessly to deliver outstanding results.</div>
        </div>
      </div>
    </div>
  
  <!-- About Slider -->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="fahad.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="tush.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="mahamudul.png" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>

  <!-- sponsor -->
<div class="container text-center">
  <div class="row">
    <h1 class="mb-4">Our Investors</h1>
    <hr>
    <div class="col"><img src="1.png" class="img-thumbnail" alt="..."></div>
    <div class="col"><img src="2.png" class="img-thumbnail" alt="..."></div>
    <div class="col"><img src="3.png" class="img-thumbnail" alt="..."></div>
    <div class="col"><img src="4.png" class="img-thumbnail" alt="..."></div>
    
  </div>
</div>

<!-- join our team-->
    <div class="bg-dark text-secondary px-6 py-5 text-center mt-5 mb-5">
    <div class="py-5">
      <h1 class="display-5 fw-bold text-white">Join Our Team</h1>
      <div class="col-lg-6 mx-auto">
        <p class="fs-5 mb-4">Join our dynamic team and embark on an exciting career journey. We value our people and foster an inclusive and collaborative work environment. Work on cutting-edge projects alongside industry experts, making a meaningful impact. Whether you're an experienced professional or starting your career, we offer diverse opportunities to unleash your full potential. Join us in shaping the future of our industry, driving innovation and success. Experience a supportive and growth-oriented culture that encourages creativity and embraces new ideas. Together, let's make a difference and achieve remarkable success.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold"><a href="contact.php">Contact us</a></button>
         
        </div>
      </div>
    </div>
  </div>

  <!-- footer -->
    <?php require 'partials/_footer.php'?>

   
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
