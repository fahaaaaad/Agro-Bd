<?php
  session_start();
?>
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
          <a class="nav-link link-dark link-opacity-75" aria-current="page" href="chickenTypes.php">Types</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" href="chickenDiseases.php">Diseases</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" href="chickenFeed.php">Feed</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" href="chickenTips.php">Tips</a>
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
      <h2 class="mb-4" style="max-width:1400px; margin-left:auto; margin-right:auto;">Chicken Feed</h2>
      <div style="text-align: justify; max-width:1400px; margin-left:auto; margin-right:auto;">
        <p style="text-align: justify;">
          <strong>1. Nutritional Requirements:</strong>
        <ul>
          <li>Chicken feed is carefully formulated to provide a balanced diet that meets the specific nutritional
            requirements of chickens.</li>
          <li>It contains the right balance of proteins, carbohydrates, fats, vitamins, minerals, and other essential
            nutrients to support growth, development, and overall health.</li>
          <li>The nutritional needs of chickens vary depending on their age, breed, and purpose (meat production or egg
            laying).</li>
        </ul>
        <strong>2. Types of Chicken Feed:</strong>
        <ul>
          <li>Starter Feed: This feed is specifically designed for newly hatched chicks. It has a higher protein content
            to support rapid growth and development during the early stages.</li>
          <li>Grower Feed: As the chicks mature into young chickens, they transition to grower feed. This feed helps
            them continue growing while providing the necessary nutrients for muscle and bone development.</li>
          <li>Layer Feed: Layer feed is formulated for laying hens. It contains higher levels of calcium to support the
            production of strong eggshells and provides the necessary nutrients for optimal egg production.</li>
          <li>Broiler Feed: Broiler feed is formulated for meat-producing chickens. It is high in protein and energy to
            promote rapid growth and efficient weight gain.</li>
        </ul>
        <strong>3. Feed Ingredients:</strong>
        <ul>
          <li>Protein Sources: Chicken feed includes various protein sources such as soybean meal, fish meal, meat and
            bone meal, and poultry by-products. These provide essential amino acids necessary for muscle development and
            overall growth.</li>
          <li>Carbohydrate Sources: Grains like corn, wheat, barley, and sorghum are common carbohydrate sources in
            chicken feed. They provide energy for daily activities and metabolic processes.</li>
          <li>Fat Sources: Fats and oils, such as vegetable oil or animal fat, are added to chicken feed to provide
            additional energy and improve palatability.</li>
          <li>Vitamins and Minerals: Chicken feed is supplemented with vitamins and minerals to ensure the chickens
            receive essential nutrients for optimal health, immune function, and egg production (in the case of laying
            hens).</li>
        </ul>
        <strong>4. Feeding Management:</strong>
        <ul>
          <li>Feeding Schedule: Establishing a regular feeding schedule is important to ensure consistent nutrient
            intake for chickens. This helps maintain their health and supports steady growth.</li>
          <li>Feed Quantity: The amount of feed given to chickens should be appropriate for their age, size, and
            production stage. Overfeeding or underfeeding can lead to health issues or poor growth.</li>
          <li>Feed Quality: Using high-quality feed is crucial to ensure the chickens receive the necessary nutrients
            and to prevent contamination that could lead to diseases or health problems.</li>
          <li>Water Availability: Chickens should always have access to clean and fresh water. Water is essential for
            digestion, nutrient absorption, and overall hydration.</li>
          <li>Supplementary Feeding: In addition to commercial feed, chickens can benefit from supplementary feeding
            with kitchen scraps, greens, fruits, or insects. However, it is important to avoid feeding them harmful or
            toxic substances.</li>
        </ul>
        <strong>5. Feed Storage and Handling:</strong>
        <ul>
          <li>Proper storage of chicken feed is essential to maintain its quality and prevent spoilage or contamination.
            Feed should be stored in a cool, dry place away from pests.</li>
          <li>Feed should be protected from moisture, sunlight, and temperature extremes, as these factors can degrade
            the nutritional value of the feed.</li>
          <li>Regularly inspect the feed for any signs of mold, pests, or unusual odors. Discard any feed that appears
            spoiled or contaminated.</li>
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