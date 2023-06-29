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
    </nav>




    <!-- body -->
    <div style="margin-top:65px; margin-bottom:65px;">
      <h2 class="mb-4" style="max-width:1400px; margin-left:auto; margin-right:auto;" >Buffalo Diseases</h2>
      <p style="text-align: justify; max-width:1400px; margin-left:auto; margin-right:auto;">
      <strong>1. Foot-and-Mouth Disease (FMD):</strong> A highly contagious viral disease characterized by fever, blisters, and erosions in the mouth, hooves, and teats. It can cause reduced milk production, weight loss, and lameness.
      <br><br>
      <strong>2. Bovine Tuberculosis (TB):</strong> A chronic bacterial disease primarily affecting the lungs but can also impact other organs. It may lead to weight loss, coughing, and reduced milk production. TB is also a zoonotic disease that can be transmitted to humans.
      <br><br>
      <strong>3. Brucellosis:</strong> A bacterial infection caused by the Brucella species. It can result in abortions, reduced fertility, joint infections, and inflammation in buffaloes. Brucellosis is also zoonotic.
      <br><br>
      <strong>4. Mastitis:</strong> An inflammation of the udder caused by bacterial infection. It can lead to swelling, pain, changes in milk consistency, and reduced milk production and quality.
      <br><br>
      <strong>5. Blackleg:</strong> A bacterial disease caused by Clostridium chauvoei. It affects the muscles of buffaloes, causing severe swelling, lameness, and sudden death.
      <br><br>
      <strong>6. Parasitic Infections:</strong> Buffaloes can be affected by various internal and external parasites, including worms, ticks, lice, and flies. These parasites can cause weight loss, anemia, skin irritations, and reduced productivity.
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