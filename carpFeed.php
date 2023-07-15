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
          <a class="nav-link link-dark link-opacity-75" aria-current="page" href="carpTypes.php">Types</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" href="carpDiseases.php">Diseases</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" href="carpFeed.php">Feed</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" href="carpTips.php">Tips</a>
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
      <h2 class="mb-4" style="max-width:1400px; margin-left:auto; margin-right:auto;">Carp Fish Feed</h2>
      <div style="text-align: justify; max-width:1400px; margin-left:auto; margin-right:auto;">
        <!-- <p style="font-size: 30px;"><strong>Carp Fish Feed</strong></p> -->
        <p style="text-align: justify;">
          <strong>1. Natural Feed Sources:</strong> Carp fish can obtain a significant portion of their nutrition from natural feed sources available in their environment. This includes plankton, aquatic plants, insects, and other small organisms present in the water. In extensive or semi-intensive farming systems, carp fish can rely on these natural feed sources for their sustenance.
          <br><br>
          <strong>2. Supplementary Feed:</strong> In intensive farming systems, where natural feed sources may be limited, supplementary feed is provided to carp fish to meet their nutritional needs. Commonly used supplementary feeds include:
          <br>
          <ul>
            <li>Pellets: Commercially available pelleted feeds are formulated to provide balanced nutrition for carp fish. These feeds typically contain a combination of protein, carbohydrates, fats, vitamins, and minerals. The pellet size should be appropriate for the size of the fish to ensure efficient consumption.</li>
            <li>Oilcakes and Meals: Oilcakes and meals derived from various oilseed crops, such as soybean, can be used as a source of protein in carp fish feed. These protein-rich ingredients provide essential amino acids required for growth.</li>
            <li>Cereal Grains: Cereal grains like wheat, rice bran, and maize can be included in carp fish feed to provide carbohydrates and energy. These grains are often processed into a suitable form, such as flakes or pellets, for easy consumption by the fish.</li>
            <li>Fishmeal: Fishmeal is a high-quality protein source derived from fish or fish processing byproducts. It is rich in essential amino acids and highly digestible, making it a valuable ingredient in carp fish feed. However, sustainable sourcing practices should be followed to avoid overfishing and protect marine ecosystems.</li>
          </ul>
          <br>
          <strong>3. Nutritional Considerations:</strong> Carp fish require a balanced diet to ensure optimal growth and health. Key nutritional considerations include:
          <br>
          <ul>
            <li>Protein: Carp fish require a sufficient amount of protein for growth and tissue development. Protein levels in the feed can vary depending on the fish's life stage, with higher protein content required for young and growing fish.</li>
            <li>Carbohydrates: Carbohydrates provide energy for carp fish. The inclusion of easily digestible carbohydrates in the feed helps meet their energy requirements.</li>
            <li>Lipids: Lipids, or fats, are a concentrated source of energy for carp fish. Including appropriate levels of lipids in the feed can support growth and provide essential fatty acids.</li>
            <li>Vitamins and Minerals: Carp fish need a variety of vitamins and minerals for various physiological functions. Commercial feeds are formulated to include essential vitamins and minerals, but natural feed sources may also contribute to these nutritional requirements.</li>
          </ul>
          <br>
          <strong>4. Feeding Management:</strong> Feeding management practices for carp fish include:
          <br>
          <ul>
            <li>Feeding Frequency: Carp fish are typically fed 2-4 times a day, depending on their age and size. Younger fish may require more frequent feedings to support their rapid growth.</li>
            <li>Feed Quantity: The amount of feed given should be appropriate for the fish's size and appetite. Overfeeding should be avoided to prevent water pollution and health issues.</li>
            <li>Feeding Techniques: Carp fish can be fed using hand-feeding, automatic feeders, or feeding trays. Feeding should be done in a controlled manner to ensure efficient consumption and minimize waste.</li>
            <li>Monitoring and Adjustment: Regular monitoring of fish growth, feed consumption, and water quality parameters helps in adjusting the feeding regime to meet the changing nutritional requirements of carp fish.</li>
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