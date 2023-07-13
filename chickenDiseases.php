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

      <!--Chicken Diseases-->

      <div class="container mb-5" style="text-align: justify; max-width:1400px; margin-left:auto; margin-right:auto;">
        <div class="content">
          <!-- <p style="font-size: 30px;"><strong>Infectious Diseases</strong></p> -->
          <h2 class="mb-4" style="max-width:1400px; margin-left:auto; margin-right:auto;">Chicken Diseases</h2>
          <p style="text-align: justify; ">
            <strong>1. Newcastle Disease:</strong> Newcastle disease is a highly contagious viral infection that affects
            the respiratory, digestive, and nervous systems of chickens. It causes respiratory distress, diarrhea, and
            nervous signs. Vaccination is crucial for prevention.
            <br><br>
            <strong>2. Infectious Bronchitis:</strong> Infectious bronchitis is a viral respiratory disease that
            primarily affects the respiratory system of chickens. It leads to respiratory distress, nasal discharge, and
            reduced egg production. Vaccination is the key preventive measure.
            <br><br>
            <strong>3. Avian Influenza:</strong> Avian influenza, commonly known as bird flu, is a viral infection that
            can cause severe respiratory and systemic illness in chickens. It can lead to high mortality rates and has
            the potential for zoonotic transmission.
            <br><br>
            <strong>4. Marek's Disease:</strong> Marek's disease is a highly contagious viral disease that affects young
            chickens. It primarily causes tumors in nerves, skin, and internal organs, leading to paralysis, weight
            loss, and increased susceptibility to other infections. Vaccination is crucial for prevention.
            <br><br>
            <strong>5. Coccidiosis:</strong> Coccidiosis is a common parasitic disease caused by the protozoan parasite
            Eimeria. It affects the intestinal tract of chickens, causing diarrhea, weight loss, and reduced growth.
            Proper sanitation and the use of anticoccidial medications are essential for prevention.
            <br><br>
            <strong>6. Infectious Coryza:</strong> Infectious coryza is a bacterial respiratory disease that affects
            chickens, causing nasal discharge, facial swelling, and reduced appetite. It can result in reduced egg
            production and egg quality. Proper biosecurity measures and antibiotics are used for prevention and
            treatment.
            <br><br>
            <strong>7. Fowl Cholera:</strong> Fowl cholera is a bacterial infection caused by Pasteurella multocida. It
            affects multiple organs and can lead to sudden death in chickens. Vaccination, good hygiene practices, and
            antibiotic treatment are important for control.
            <br><br>
            <strong>8. Mycoplasma Gallisepticum:</strong> Mycoplasma gallisepticum is a bacterial respiratory disease
            that causes respiratory distress, nasal discharge, and conjunctivitis in chickens. It can lead to reduced
            egg production and fertility. Antibiotics and strict biosecurity measures are crucial for control.
            <br><br>
            <strong>9. E. Coli Infection:</strong> E. coli infections can occur in chickens, leading to various health
            issues, including respiratory and reproductive problems. Proper hygiene, sanitation, and good management
            practices are important preventive measures.
            <br><br>
            <strong>10. Salmonellosis:</strong> Salmonellosis is a bacterial infection caused by Salmonella species. It
            can cause diarrhea, decreased egg production, and systemic illness in chickens. Strict biosecurity measures
            and proper hygiene practices are crucial for prevention.
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