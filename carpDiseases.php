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

      <!--Carp Fish Diseases-->

      <div class="container mb-5" style="text-align: justify; max-width:1400px; margin-left:auto; margin-right:auto;">
        <!-- <p style="font-size: 30px;"><strong>Infectious Diseases</strong></p> -->
        <h2 class="mb-4" style="max-width:1400px; margin-left:auto; margin-right:auto;">Carp Fish Diseases</h2>
        <!-- <p style="font-size: 30px;"><strong>Carp Fish Diseases</strong></p> -->
        <p style="text-align: justify;">
          <strong>1. Aeromoniasis:</strong> Aeromoniasis is a bacterial disease that can affect carp fish. It can cause symptoms such as hemorrhages, ulcers, and fin rot. Adequate water quality management and prevention of stress can help reduce the risk of aeromoniasis.
          <br><br>
          <strong>2. Columnaris Disease:</strong> Columnaris disease, also known as cotton wool disease, is caused by the bacteria Flavobacterium columnare. It can lead to the formation of whitish-gray patches on the skin, gills, and fins of carp fish. Good water quality and proper hygiene practices are essential in preventing and managing this disease.
          <br><br>
          <strong>3. Spring Viremia of Carp (SVC):</strong> Spring viremia of carp is a viral disease that affects carp fish. It can cause symptoms such as hemorrhages, skin ulcers, and swelling. Strict biosecurity measures and regular health monitoring can help prevent the spread of SVC.
          <br><br>
          <strong>4. Koi Herpesvirus (KHV):</strong> Koi herpesvirus is a viral disease that primarily affects koi carp. It can result in symptoms such as lethargy, loss of appetite, and gill necrosis. Quarantine procedures and strict biosecurity measures are crucial in preventing the introduction and spread of KHV.
          <br><br>
          <strong>5. Fish Parasites:</strong> Carp fish can be affected by various external and internal parasites, including protozoa, worms, and flukes. These parasites can cause skin lesions, inflammation, and reduced growth rates. Regular health checks, proper hygiene, and parasite control measures are important in preventing parasite infestations.
          <br><br>
          <strong>6. Fungal Infections:</strong> Carp fish can be susceptible to fungal infections, especially in stressful conditions or when water quality is poor. Fungal infections can manifest as white or gray patches on the skin, fins, or gills. Maintaining good water quality and practicing proper hygiene can help prevent fungal infections.
          <br><br>
          <strong>7. Bacterial Infections:</strong> Carp fish are prone to bacterial infections such as bacterial gill disease, furunculosis, and red spot disease. These infections can cause symptoms like ulcers, fin rot, and respiratory distress. Maintaining optimal water quality, proper nutrition, and minimizing stress can help reduce the risk of bacterial infections.
          <br><br>
          <strong>8. Ammonia Toxicity:</strong> High levels of ammonia in the water can be toxic to carp fish and can lead to ammonia poisoning. This can occur due to inadequate filtration, overstocking, or poor water quality management. Regular monitoring of water parameters and proper filtration systems are important in preventing ammonia toxicity.
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