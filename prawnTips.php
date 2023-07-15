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
      <h2 class="mb-4" style="max-width:1400px; margin-left:auto; margin-right:auto;">Tips to Get Started with Prawn Farming</h2>
      <div style="text-align: justify; max-width:1400px; margin-left:auto; margin-right:auto;">
        <!-- <p style="font-size: 30px;"><strong>Tips to Get Started with Prawn Farming</strong></p> -->
        <p style="text-align: justify;">
          <strong>1. Conduct Proper Research:</strong>
          <ul>
            <li>Gain a comprehensive understanding of prawn farming techniques, requirements, and market demand.</li>
            <li>Research different prawn species suitable for farming in your region and their specific needs.</li>
          </ul>
          <strong>2. Identify Suitable Farming Site:</strong>
          <ul>
            <li>Choose a location with access to freshwater sources, such as rivers, lakes, or ponds.</li>
            <li>Ensure the availability of suitable land or water bodies for constructing prawn ponds or tanks.</li>
          </ul>
          <strong>3. Set Up Prawn Ponds or Tanks:</strong>
          <ul>
            <li>Construct or prepare prawn ponds or tanks according to the requirements of the chosen prawn species.</li>
            <li>Consider factors such as water quality, size, depth, and accessibility for maintenance.</li>
          </ul>
          <strong>4. Arrange Stock and Broodstock:</strong>
          <ul>
            <li>Source healthy prawn stock and broodstock from reputable suppliers or hatcheries.</li>
            <li>Ensure the selected prawn stock is suitable for your farming system and desired market.</li>
          </ul>
          <strong>5. Understand Water Management:</strong>
          <ul>
            <li>Learn about water quality parameters, including temperature, pH levels, oxygenation, and filtration.</li>
            <li>Implement proper water management practices to maintain optimal conditions for prawn growth and health.</li>
          </ul>
          <strong>6. Feed and Nutrition:</strong>
          <ul>
            <li>Develop a feeding program using appropriate prawn feeds, both commercial and natural.</li>
            <li>Ensure a balanced diet to support growth, health, and market quality of the prawns.</li>
          </ul>
          <strong>7. Disease Prevention and Management:</strong>
          <ul>
            <li>Implement biosecurity measures to prevent the introduction and spread of diseases in your prawn farm.</li>
            <li>Monitor prawns regularly for signs of diseases and promptly take necessary actions in case of any health issues.</li>
          </ul>
          <strong>8. Obtain Necessary Permits and Licenses:</strong>
          <ul>
            <li>Check with local authorities and regulatory bodies to obtain the required permits and licenses for prawn farming.</li>
            <li>Comply with environmental regulations and guidelines related to water usage, waste management, and sustainability.</li>
          </ul>
          <strong>9. Marketing and Sales:</strong>
          <ul>
            <li>Develop a marketing strategy to promote and sell your prawn products.</li>
            <li>Identify potential buyers, such as restaurants, seafood markets, or direct consumers.</li>
          </ul>
          <strong>10. Continuous Learning and Improvement:</strong>
          <ul>
            <li>Stay updated with the latest advancements and best practices in prawn farming through industry publications, workshops, and networking.</li>
            <li>Continuously evaluate and improve your farming techniques, management practices, and sustainability efforts.</li>
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