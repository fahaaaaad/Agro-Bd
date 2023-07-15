
<?php
  session_start();
?><!doctype html>

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
          <a class="nav-link link-dark link-opacity-75" aria-current="page" href="cowTypes.php">Types</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" href="cowDiseases.php">Diseases</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" href="cowFeed.php">Feed</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" href="cowTips.php">Tips</a>
        </li>
      </ul>
    </div>

    <!-- Main Navbar Content -->
    <div class="main-navbar">
      <?php require 'partials/_header.php' ?>
    </div>




    <!-- body -->
    <div style="margin-top:135px; margin-bottom:65px;">
      <h2 class="mb-4" style="max-width:1400px; margin-left:auto; margin-right:auto;" >Cow Diseases</h2>
      <p style="text-align: justify; max-width:1400px; margin-left:auto; margin-right:auto;">
        <strong>1. Bovine Respiratory Disease (BRD):</strong> BRD is a common respiratory illness in cattle caused by a combination of viral and bacterial infections. It can lead to pneumonia, coughing, and decreased feed intake.
        <br><br>
        <strong>2. Foot and Mouth Disease (FMD):</strong> FMD is a highly contagious viral disease that affects cloven-hoofed animals, including cattle. It causes fever, blisters on the mouth and feet, lameness, and reduced milk production.
        <br><br>
        <strong>3. Bovine Tuberculosis (TB):</strong> TB is a chronic bacterial disease that primarily affects the lungs but can also affect other organs. It can cause weight loss, coughing, and reduced milk production. TB is a zoonotic disease that can be transmitted from animals to humans.
        <br><br>
        <strong>4. Brucellosis:</strong> Brucellosis is a bacterial infection caused by the Brucella species. It can lead to abortions, reduced fertility, and joint infections in cattle. It is also a zoonotic disease.
        <br><br>
        <strong>5. Johne's Disease:</strong> Johne's disease is a chronic bacterial infection caused by Mycobacterium avium subsp. paratuberculosis. It affects the intestines of cattle, leading to chronic diarrhea, weight loss, and reduced milk production.
        <br><br>
        <strong>6. Mastitis:</strong> Mastitis is an inflammation of the udder caused by bacterial infection. It can result in swelling, pain, and changes in milk consistency. Mastitis can reduce milk production and quality.
        <br><br>
        <strong>7. Blackleg:</strong> Blackleg is a bacterial disease caused by Clostridium chauvoei. It affects the muscles of cattle, causing severe swelling, lameness, and sudden death.
        <br><br>
        <strong>8. Parasitic Diseases:</strong> Cattle can be affected by various internal and external parasites, including worms, ticks, lice, and flies. These parasites can cause weight loss, anemia, skin irritations, and reduced productivity.
        <br><br>
        <strong>9. Foot Rot:</strong> Foot rot is a bacterial infection that affects the hooves of cattle, leading to lameness and reduced mobility.
        <br><br>
        <strong>10. Ketosis:</strong> Ketosis, also known as "acetonemia," is a metabolic disorder that occurs when cattle experience an energy imbalance. It can lead to weight loss, reduced milk production, and other metabolic complications.
      </p>
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