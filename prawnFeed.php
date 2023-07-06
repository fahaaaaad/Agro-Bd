<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>COW</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js"
      integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous">
      </script>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/headerNestedDropdown.css" />

    <style>
      /* inner nav style */
      .side-navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 200px;
        height: 100vh;
        background-color: #6d6d6d85;
        /* padding: 20px; */
        overflow-y: auto;
        z-index: 1; /* Lower z-index to ensure main navbar appears above */
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      .side-navbar ul {
        list-style: none;
        padding: 0;
        margin: 0;
      }

      .side-navbar li {
        margin-bottom: 10px;
      }

      .side-navbar a {
        color: #000;
        text-decoration: none;
        font-size: 18px; /* Increase the font size as per your preference */
        font-weight: bold; /* Make the link letters bold */
      }

      .side-navbar a:hover {
        background-color: #e9ecef;
        color: #007bff;
      }

      .main-navbar {
        position: fixed;
        top: 0;
        width: 100%;
        background-color: #f8f9fa;
        /* padding: 10px; */
        z-index: 2; /* Higher z-index to ensure it appears above side navbar */
      }
    </style>
  </head>

  <body>
    <!-- css first -->
    <script>0</script>

    <!-- Side Navbar -->
    <div class="side-navbar">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" aria-current="page" href="prawnTypes.php">Types</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" href="prawnDiseases.php">Diseases</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" href="prawnFeed.php">Feed</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" href="prawnTips.php">Tips</a>
        </li>
      </ul>
    </div>

    <!-- Main Navbar Content -->
    <div class="main-navbar">
      <?php require 'partials/_header.php' ?>
    </div>



    <!-- body -->
    <div style="margin-top:65px; margin-bottom:135px;">
      <!-- <h2>Cow Feed</h2>
      <p style="text-align: justify;"> -->
      <h2 class="mb-4" style="max-width:1400px; margin-left:auto; margin-right:auto;">Prawn Feed</h2>
      <div style="text-align: justify; max-width:1400px; margin-left:auto; margin-right:auto;">
        <!-- <p style="font-size: 30px;"><strong>Prawn Feed</strong></p> -->
        <p style="text-align: justify;">
          <strong>1. Commercial Feeds:</strong>
          <ul>
            <li>Commercial prawn feeds are widely available and formulated to meet the nutritional requirements of different prawn species.</li>
            <li>They contain a combination of protein sources (such as fish meal, soybean meal, and shrimp meal), carbohydrates, lipids, vitamins, and minerals.</li>
            <li>Available in various pellet sizes suitable for different prawn sizes and growth stages.</li>
          </ul>
          <strong>2. Natural Feeds:</strong>
          <ul>
            <li>Prawns also consume natural feeds available in the farming environment, including algae, plankton, detritus, and small aquatic organisms.</li>
            <li>Natural feeds enhance the overall nutrition of prawns and contribute to their flavor and color.</li>
          </ul>
          <strong>3. Feed Management:</strong>
          <ul>
            <li>Proper feed management involves monitoring feed consumption, adjusting feeding rates based on prawn size and growth, and ensuring regular feeding schedules.</li>
            <li>Overfeeding or underfeeding can negatively impact prawn growth and health.</li>
          </ul>
          <strong>4. Feed Conversion Ratio (FCR):</strong>
          <ul>
            <li>FCR is a measure of the efficiency with which prawns convert feed into body weight.</li>
            <li>A lower FCR indicates better feed utilization and cost-effectiveness.</li>
            <li>FCR can be improved by providing high-quality feeds, optimizing feeding practices, and maintaining good water quality.</li>
          </ul>
          <strong>5. Supplemental Feeding:</strong>
          <ul>
            <li>Prawns can benefit from supplemental feeding, especially during critical growth stages or when natural food sources are limited.</li>
            <li>Supplemental feeds can include live feeds such as Artemia nauplii, copepods, or formulated feeds enriched with essential nutrients.</li>
          </ul>
          <strong>6. Feed Quality and Safety:</strong>
          <ul>
            <li>Ensuring the quality and safety of prawn feeds is essential to prevent contamination and disease outbreaks.</li>
            <li>Good manufacturing practices, proper storage, and regular quality control checks are necessary to maintain feed integrity.</li>
          </ul>
          <strong>7. Environmental Impact:</strong>
          <ul>
            <li>Prawn farming practices should aim to minimize environmental impact, including feed waste and nutrient runoff.</li>
            <li>Proper feeding management, use of nutrient-rich pond water, and adoption of sustainable feed sourcing practices contribute to reducing the environmental footprint of prawn farming.</li>
          </ul>
        </p>
      </div>
    </div>




    <!-- footer -->
    <?php require 'partials/_footer.php'?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
      integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"></script>

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
  </body>

</html>