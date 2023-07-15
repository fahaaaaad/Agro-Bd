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
          <a class="nav-link link-dark link-opacity-75" aria-current="page" href="duckTypes.php">Types</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" href="duckDiseases.php">Diseases</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" href="duckFeed.php">Feed</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" href="duckTips.php">Tips</a>
        </li>
      </ul>
    </div>

    <!-- Main Navbar Content -->
    <div class="main-navbar">
      <?php require 'partials/_header.php' ?>
    </div>




    <!-- body -->
    <div style="margin-top:135px; margin-bottom:65px;">

      <!--Chicken Diseases-->

      <div class="container mb-5" style="text-align: justify; max-width:1400px; margin-left:auto; margin-right:auto;">
        <div class="content">
          <!-- <p style="font-size: 30px;"><strong>Infectious Diseases</strong></p> -->
          <h2 class="mb-4" style="max-width:1400px; margin-left:auto; margin-right:auto;">Duck Diseases</h2>
          <p style="text-align: justify;">
            <strong>1. Duck Viral Enteritis (Duck Plague):</strong>
            Duck Viral Enteritis, also known as Duck Plague, is a highly contagious viral disease that affects ducks and
            other waterfowl. It can cause symptoms such as loss of appetite, respiratory distress, diarrhea, and high
            mortality rates.
            <br><br>
            <strong>2. Botulism:</strong>
            Botulism is a bacterial infection that affects ducks when they consume feed or water contaminated with
            Clostridium botulinum toxins. It can lead to paralysis, weakness, and even death. Contaminated wet or
            spoiled feed and stagnant water sources are common sources of infection.
            <br><br>
            <strong>3. Duck Cholera:</strong>
            Duck Cholera, caused by Pasteurella multocida bacteria, is a highly contagious disease that affects ducks
            and other waterfowl. It can cause sudden death, respiratory distress, swollen joints, and swollen wattles.
            The disease spreads through direct contact, contaminated water, and shared feed or equipment.
            <br><br>
            <strong>4. Aspergillosis:</strong>
            Aspergillosis is a fungal infection that primarily affects the respiratory system of ducks. It is caused by
            the inhalation of spores from moldy bedding, feed, or contaminated environments. Symptoms include
            respiratory distress, coughing, nasal discharge, and reduced activity.
            <br><br>
            <strong>5. Avian Influenza:</strong>
            Avian Influenza, or bird flu, is a viral disease that ducks can carry and transmit to other poultry and even
            humans. It can cause severe respiratory symptoms, decreased egg production, and high mortality rates. Avian
            Influenza is a notifiable disease, and any suspicion of infection should be reported to the authorities.
            <br><br>
            <strong>6. Parasitic Infestations:</strong>
            Ducks can be affected by various external and internal parasites, including mites, lice, ticks, and worms.
            These parasites can cause skin irritation, feather loss, anemia, and decreased egg production. Regular
            inspection and appropriate parasite control measures are necessary to prevent infestations.
            <br><br>
            <strong>7. Duck Viral Hepatitis:</strong>
            Duck Viral Hepatitis is a viral disease that primarily affects young ducklings, causing liver damage,
            reduced growth, and high mortality rates. It is transmitted through contact with infected birds or
            contaminated water.
            <br><br>
            <strong>8. Lameness (Leg Problems):</strong>
            Ducks may suffer from leg problems, including lameness and deformities, due to various factors such as poor
            nutrition, injuries, or genetic predisposition. Proper nutrition, adequate space, and careful management
            practices can help prevent leg problems in ducks.
            <br><br>
            <strong>9. Egg-related Issues:</strong>
            Ducks may experience egg-related issues such as egg binding (inability to lay eggs), egg peritonitis
            (infection in the abdominal cavity), or soft-shelled or misshapen eggs. These issues can be caused by
            nutritional deficiencies, infections, or reproductive abnormalities. Providing a balanced diet, proper
            nesting areas, and regular health checks can help minimize egg-related problems.
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