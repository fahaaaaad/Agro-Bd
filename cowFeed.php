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
    </nav>




    <!-- body -->
    <div style="margin-top:65px; margin-bottom:65px;">
      <!-- <h2>Cow Feed</h2>
      <p style="text-align: justify;"> -->
      <h2 class="mb-4" style="max-width:1400px; margin-left:auto; margin-right:auto;">Cow Feed</h2>
      <div style="text-align: justify; max-width:1400px; margin-left:auto; margin-right:auto;">
        <p>
          <strong>1. Forage and Pasture:</strong> Forage and pasture form the basis of a cow's diet. They provide
          essential nutrients, including fiber, energy, and protein. Common forage options for cows include hay, silage,
          and fresh pasture grass. These should be of good quality and free from mold or toxins.
          <br><br>
          <strong>2. Concentrates:</strong> Concentrates are additional feeds given to cows to supplement their
          nutritional requirements. They are typically formulated to provide a balanced diet and include the following:
          <br>
        <ul>
          <li>Grains: Cows can be fed various grains such as corn, barley, oats, and wheat. These grains provide energy
            in
            the form of carbohydrates.</li>
          <li>Protein Sources: Protein-rich feeds like soybean meal, cottonseed meal, and distillers' grains can be
            included to meet the cow's protein needs.</li>
          <li>Fat Sources: Fats or oils, such as soybean oil or vegetable oil, can be added to the feed for additional
            energy and to enhance palatability.</li>
          <li>Vitamins and Minerals: Commercial feed formulations include essential vitamins and minerals to ensure cows
            receive adequate nutrition.</li>
        </ul>
        <br>
        <strong>3. Supplements:</strong> In certain cases, cows may require additional supplements to meet specific
        nutritional needs. These can include:
        <br>
        <ul>
          <li>Mineral Supplements: Minerals like calcium, phosphorus, magnesium, and salt are essential for cow health.
            Mineral supplements can be provided in the form of mineral blocks or loose minerals.</li>
          <li>Vitamin Supplements: In situations where cows may have limited access to fresh pasture or forage, vitamin
            supplements may be necessary to prevent deficiencies.</li>
          <li>Medicated Feed: Medicated feeds containing medications or additives may be used to prevent or treat
            specific
            health conditions or improve feed efficiency. These should be used under veterinary guidance.</li>
        </ul>
        <br>
        <strong>4. Feeding Management:</strong> Effective feeding management practices for cows include:
        <br>
        <ul>
          <li>Feeding Frequency: Cows are typically fed multiple times a day, with most farmers following a twice-daily
            feeding schedule.</li>
          <li>Feed Ration: The feed ration should be balanced and tailored to meet the nutritional needs of cows based
            on
            their stage of production (e.g., lactation, gestation, or growth).</li>
          <li>Feed Space: Sufficient feeding space should be provided to ensure all cows have access to feed. Generally,
            2
            feet of bunk space per cow is recommended.</li>
          <li>Water Availability: Access to clean and fresh water is crucial for cows' overall health and proper
            digestion. Ensure water sources are easily accessible and regularly maintained.</li>
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