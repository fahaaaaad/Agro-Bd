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

    </style>
  </head>

  <body>
    <!-- css first -->
    <script>0</script>

    <!-- Header -->
    <?php require 'partials/_header.php'?>

    <!-- Inner Nav -->
    <nav class="navbar navbar-default mb-5 sticky-top bg-secondary " style="padding-bottom: 0; padding-top: 0;">
      <div class="container" style="justify-content: center;">
        <ul class="nav justify-content-center bg-secondary ">
          <li class="nav-item">
            <a class="nav-link link-dark link-opacity-75" aria-current="page" href="pigeonTypes.php">Types</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-dark link-opacity-75" href="pigeonDiseases.php">Diseases</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-dark link-opacity-75" href="pigeonFeed.php">Feed</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-dark link-opacity-75" href="pigeonTips.php">Tips</a>
          </li>
        </ul>
      </div>
    </nav>




    <!-- body -->
    <div style="margin-top:65px; margin-bottom:65px;">

      <!--Pigeon Diseases-->

      <div class="container mb-5" style="text-align: justify; max-width:1400px; margin-left:auto; margin-right:auto;">
        <div class="content">
          <!-- <p style="font-size: 30px;"><strong>Infectious Diseases</strong></p> -->
          <h2 class="mb-4" style="max-width:1400px; margin-left:auto; margin-right:auto;">Pigeon Diseases</h2>
          <p style="text-align: justify; ">
            <strong>1. Pigeon Paramyxovirus:</strong>
            Pigeon Paramyxovirus, also known as Pigeon PMV, is a highly contagious viral disease that affects pigeons
            and can lead to high mortality rates. It can cause respiratory symptoms, nervous system disorders, and
            digestive issues.
            <br><br>
            <strong>2. Pigeon Pox:</strong>
            Pigeon Pox is a viral infection that affects pigeons and can result in the formation of lesions on the skin,
            mucous membranes, and eyes. It can cause respiratory distress, reduced appetite, and decreased overall
            health.
            <br><br>
            <strong>3. Candidiasis:</strong>
            Candidiasis, also known as "thrush," is a fungal infection commonly found in pigeons. It primarily affects
            the digestive system and can lead to weight loss, poor appetite, diarrhea, and crop lesions.
            <br><br>
            <strong>4. Coccidiosis:</strong>
            Coccidiosis is a parasitic infection caused by protozoa of the genus Eimeria. It affects the digestive
            system of pigeons and can result in diarrhea, dehydration, weight loss, and reduced performance.
            <br><br>
            <strong>5. Trichomoniasis:</strong>
            Trichomoniasis, also known as "canker," is a common parasitic infection in pigeons caused by the protozoan
            Trichomonas gallinae. It affects the upper digestive tract and can cause yellowish lesions in the throat,
            difficulty swallowing, and weight loss.
            <br><br>
            <strong>6. Salmonellosis:</strong>
            Salmonellosis is a bacterial infection that can affect pigeons, leading to symptoms such as diarrhea,
            dehydration, weight loss, and general weakness. It can also pose a risk to human health.
            <br><br>
            <strong>7. Mycoplasmosis:</strong>
            Mycoplasmosis is a bacterial infection commonly found in pigeons. It primarily affects the respiratory
            system, causing symptoms such as respiratory distress, coughing, nasal discharge, and decreased performance.
            <br><br>
            <strong>8. Parasitic Infestations:</strong>
            Pigeons can be affected by various external and internal parasites, including mites, lice, ticks, and worms.
            These parasites can cause skin irritation, feather loss, anemia, and decreased overall health. Regular
            parasite control measures are essential to prevent infestations.
            <br><br>
            <strong>9. Wing and Feather Disorders:</strong>
            Pigeons may experience wing and feather disorders, such as feather picking, wing fractures, or deformities.
            These issues can be caused by nutritional deficiencies, injuries, or improper feather development. Providing
            a balanced diet, proper housing, and appropriate wing clipping can help prevent such problems.
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