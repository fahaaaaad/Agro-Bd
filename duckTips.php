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
    </nav>




    <!-- body -->
    <div style="margin-top:65px; margin-bottom:65px;">
      <!-- <h2>Cow Feed</h2>
      <p style="text-align: justify;"> -->
      <h2 class="mb-4" style="max-width:1400px; margin-left:auto; margin-right:auto;">Tips for Duck Farming</h2>
      <div style="text-align: justify; max-width:1400px; margin-left:auto; margin-right:auto;">
        <p style="text-align: justify;">
          <strong>1. Provide Adequate Housing:</strong>
          <ul>
            <li>Construct a suitable duck house or shelter to protect the ducks from predators, harsh weather conditions,
              and provide a comfortable environment.</li>
            <li>Ensure proper ventilation, sufficient space, and clean bedding materials for the ducks' health and
              well-being.</li>
            <li>Implement proper drainage systems to keep the housing area clean and dry.</li>
          </ul><br>

          <strong>2. Feed a Balanced Diet:</strong>
          <ul>
            <li>Offer commercial duck feeds specifically formulated to meet the nutritional requirements of ducks at
              different stages of growth.</li>
            <li>Supplement their diet with fresh greens and vegetables, grains and seeds, insects and protein sources, and
              suitable kitchen scraps in moderation.</li>
            <li>Ensure access to fresh, clean water at all times for drinking and foraging.</li>
          </ul>

          <br>

          <strong>3. Implement Proper Sanitation:</strong>
          <ul>
            <li>Maintain clean and hygienic living conditions for the ducks, including regular cleaning of the duck house
              and removal of waste and soiled bedding.</li>
            <li>Prevent the buildup of mold, bacteria, and parasites by regularly disinfecting the housing area and
              providing clean water sources.</li>
            <li>Follow appropriate biosecurity measures to minimize the risk of diseases and infections.</li>
          </ul>

          <br>

          <strong>4. Monitor Health and Well-being:</strong>
          <ul>
            <li>Regularly observe the ducks for any signs of illness, distress, or abnormal behavior.</li>
            <li>Seek veterinary assistance for routine check-ups, vaccinations, and prompt treatment of any health issues.
            </li>
            <li>Provide proper care, including grooming, trimming of feathers if necessary, and protection against
              parasites.</li>
          </ul>

          <br>

          <strong>5. Consider Duck Breeding:</strong>
          <ul>
            <li>If interested in duck breeding, select suitable breeds based on your farming objectives, climate
              conditions, and market demand.</li>
            <li>Create appropriate breeding conditions, including nesting areas, sufficient privacy, and proper incubation
              facilities if hatching eggs.</li>
            <li>Ensure proper care for ducklings, including warmth, appropriate feed, and protection from predators.</li>
          </ul>

          <br>

          <strong>6. Plan for Duck Marketing:</strong>
          <ul>
            <li>Identify potential markets for your ducks, such as local markets, restaurants, or direct sales to
              consumers.</li>
            <li>Develop marketing strategies to promote your duck products, including proper packaging, labeling, and
              establishing relationships with potential buyers.</li>
            <li>Ensure compliance with local regulations and guidelines for selling duck products.</li>
          </ul>

          <br>

          <strong>7. Continuous Learning and Improvement:</strong>
          <ul>
            <li>Stay updated with the latest information, best practices, and advancements in duck farming through books,
              online resources, and participation in agricultural workshops or events.</li>
            <li>Regularly evaluate and assess the performance of your duck farming operation, identifying areas for
              improvement and implementing necessary changes.</li>
            <li>Network and engage with other duck farmers or agricultural experts for knowledge sharing and support.</li>
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