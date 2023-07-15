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
          <a class="nav-link link-dark link-opacity-75" aria-current="page" href="buffaloTypes.php">Types</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" href="buffaloDiseases.php">Diseases</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" href="buffaloFeed.php">Feed</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" href="buffaloTips.php">Tips</a>
        </li>
      </ul>
    </div>

    <!-- Main Navbar Content -->
    <div class="main-navbar">
      <?php require 'partials/_header.php' ?>
    </div>





    <!-- body -->
    <div style="margin-top:135px; margin-bottom:65px;">
      <!-- <h2>Cow Feed</h2>
      <p style="text-align: justify;"> -->
      <h2 class="mb-4" style="max-width:1400px; margin-left:auto; margin-right:auto;">Buffalo Feed</h2>
      <div style="text-align: justify; max-width:1400px; margin-left:auto; margin-right:auto;">
        <p>
          <strong>1. Grazing and Forage:</strong> Grazing and forage are fundamental components of a buffalo's diet. Buffaloes are primarily grass-eating animals and require access to high-quality forage. They can graze on pastures and consume a variety of grasses, legumes, and other green fodder.
          <br><br>
          <strong>2. Silage and Hay:</strong> Silage and hay are important feed options for buffaloes, especially during periods when fresh forage is limited. Silage is made by fermenting chopped green fodder, while hay is dried and preserved forage. Both provide a source of fiber and nutrients.
          <br><br>
          <strong>3. Concentrates:</strong> Concentrates are supplementary feeds given to buffaloes to meet their nutritional requirements. Common concentrate options include:
          <br>
          <ul>
            <li>Grains: Buffaloes can be fed grains like maize (corn), barley, oats, and wheat. Grains are a source of energy and carbohydrates.</li>
            <li>Oilcakes and Meals: Oilcakes derived from oilseeds such as soybean, groundnut (peanut), and rapeseed are commonly used as a protein source in buffalo feed. These provide essential amino acids required for growth and production.</li>
            <li>Mineral Mixtures: Mineral mixtures or mineral supplements are essential to fulfill the mineral requirements of buffaloes. These supplements provide minerals like calcium, phosphorus, magnesium, and trace elements.</li>
            <li>Vitamin Supplements: Vitamin supplements may be required to meet specific vitamin needs, especially if the diet lacks fresh forage or is deficient in certain vitamins.</li>
          </ul>
          <br>
          <strong>4. Water Availability:</strong> Access to clean and fresh water is crucial for buffaloes' overall health, digestion, and milk production. Buffaloes should have constant access to clean water sources, and the water troughs should be regularly cleaned and refilled.
          <br><br>
          <strong>5. Feeding Management:</strong> Proper feeding management practices for buffaloes include:
          <br>
          <ul>
            <li>Feeding Frequency: Buffaloes are typically fed multiple times a day, with most farmers following a twice-daily feeding schedule.</li>
            <li>Feed Ration: The feed ration should be balanced and tailored to meet the nutritional needs of buffaloes based on their age, weight, and purpose (e.g., milk production, meat production).</li>
            <li>Feed Space: Sufficient feeding space should be provided to ensure all buffaloes have access to feed. Generally, 24-30 inches of feeding space per buffalo is recommended.</li>
            <li>Feeding Environment: Buffaloes should be provided a clean and calm feeding environment to reduce stress and improve feed intake. Feed troughs or mangers should be kept clean and free from contaminants.</li>
            <li>Monitoring: Regular monitoring of feed intake, body condition, and overall health is important. Adjustments to the feeding regimen can be made based on individual requirements and seasonal variations.</li>
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