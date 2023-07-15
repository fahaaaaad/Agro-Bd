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
      .container {
        display: flex;
        align-items: center;
      }

      .image {
        flex: 1;
        margin-right: 50px;
        text-align: center;
      }

      .image img {
        max-width: 100%;
      }

      .round-image {
        border-radius: 50%;
      }

      .content {
        flex: 1;
      }


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
    <div style="padding-left: 30px; margin-top:135px;">

      <!--Water Buffalo-->

      <div class="container">
        <div class="content">
          <h2>Water Buffalo</h2>
          <p style="text-align: justify; ">
            Water buffaloes (Bubalus bubalis) are large, robust domesticated animals known for their adaptability to
            aquatic environments. They are primarily found in regions of South Asia, including Bangladesh, where they
            play a vital role in the agricultural sector. Water buffaloes have a distinct physical appearance
            characterized by a massive body, strong legs, and a thick, water-repellent coat. Their coat is typically
            black or dark gray, although other variations exist. These impressive animals possess a distinctive set of
            curved, backward-pointing horns that can reach impressive lengths. Their horns are used for defense and
            territorial displays. Water buffaloes are well-suited to withstand hot and humid climates, as their skin
            contains specialized sweat glands that help regulate their body temperature. Additionally, their dense coat
            protects them from sunburn and insect bites. Water buffaloes are primarily herbivorous animals, feeding on
            grasses, aquatic plants, and various crops. They are excellent grazers and can consume substantial amounts
            of vegetation. Due to their size and strength, water buffaloes are often used as draught animals, helping
            farmers with plowing fields, pulling carts, and transporting heavy loads. In addition to their role in
            agriculture, water buffaloes are highly valued for their milk and meat. Buffalo milk is rich in fat and
            protein and is commonly used to produce dairy products such as butter, yogurt, and cheese. Buffalo meat,
            known for its distinctive flavor and tenderness, is a popular choice in many traditional dishes.
            <br><br>
            Water buffaloes have a calm temperament, but they can become aggressive if they feel threatened or provoked.
            However, they are generally gentle and docile animals, making them relatively easy to handle and work with.
            Overall, water buffaloes are integral to the livelihoods of many people in Bangladesh and other parts of
            South Asia. Their strength, endurance, and adaptability to waterlogged areas make them indispensable assets
            for farmers, providing essential draught power, milk, and meat while contributing to the agricultural
            productivity of the region.
          </p>
        </div>
        <div class="image">
          <img style="height: 420px;width: 510px;margin-top: 50px;" src="farmingSector/water_buffalo.jpg" alt="Water Buffalo">

        </div>
      </div>
      <br><br>

      <!--Swamp Buffalo-->

      <div class="container mb-5">
        <div class="content">
          <h2>Swamp Buffalo</h2>
          <p style="text-align: justify; ">
            Swamp buffaloes, also known as Carabao or Bubalus carabanesis, are domesticated animals that thrive in
            swampy or marshy regions. These buffaloes are found in various parts of Southeast Asia, including
            Bangladesh, where they play a significant role in agriculture. Swamp buffaloes have a distinctive appearance
            with a stocky build, relatively longer legs, and shorter horns compared to their water buffalo counterparts.
            These animals have a sturdy physique that enables them to navigate through challenging wetland environments.
            Their coat is usually black or dark gray, providing protection against sunburn and insect bites. Swamp
            buffaloes are well-adapted to withstand heat and humidity, thanks to their sweat glands that assist in
            regulating body temperature. Swamp buffaloes are herbivorous and primarily feed on grasses, aquatic plants,
            and crops. Their ability to graze in swampy areas is crucial for farmers as it allows efficient utilization
            of wetland resources for agriculture. These buffaloes are used as draught animals, assisting farmers in
            plowing fields and transporting heavy loads through muddy terrains. In addition to their role in
            agriculture, swamp buffaloes are valued for their milk and meat. Buffalo milk is known for its richness in
            fat and protein, making it suitable for producing various dairy products. The meat of swamp buffaloes is
            also highly regarded for its tenderness and flavor, often incorporated into traditional cuisines.
            <br><br>
            Swamp buffaloes exhibit a generally calm and docile temperament, making them easier to handle and work with.
            However, like any animal, they can display aggression when they feel threatened or provoked. Overall, swamp
            buffaloes are indispensable assets to farmers in Bangladesh and other regions with wetland ecosystems. Their
            ability to thrive in swampy conditions, coupled with their strength and resilience, allows them to
            contribute significantly to agricultural productivity, provide milk and meat resources, and support the
            livelihoods of many communities.
          </p>
        </div>
        <div class="image">
          <img style="height: 420px;width: 510px;margin-top: 60px;" src="farmingSector/swamp_buffalo.jpg" alt="Swamp Buffalo">

        </div>
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