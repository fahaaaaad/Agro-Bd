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
      <h2 class="mb-4" style="max-width:1400px; margin-left:auto; margin-right:auto;">Duck Feed</h2>
      <div style="text-align: justify; max-width:1400px; margin-left:auto; margin-right:auto;">
        <p style="text-align: justify;">
          <strong>1. Commercial Duck Feed:</strong>
        <ul>
          <li>Commercial duck feeds are specifically formulated to meet the nutritional requirements of ducks at
            different stages of growth.</li>
          <li>They are available in various forms such as pellets, crumbles, and mash.</li>
          <li>Commercial feeds contain a balanced combination of proteins, carbohydrates, fats, vitamins, and minerals
            to support duck health and growth.</li>
          <li>They are convenient to use and ensure that ducks receive all the essential nutrients in the right
            proportions.</li>
        </ul>
        <br>
        <strong>2. Fresh Greens and Vegetables:</strong>
        <ul>
          <li>Ducks enjoy consuming fresh greens and vegetables, which provide additional vitamins and minerals.</li>
          <li>Offer leafy greens like lettuce, spinach, and kale, which are rich in nutrients.</li>
          <li>Vegetables like carrots, peas, cucumbers, and zucchini can be fed in small quantities.</li>
          <li>Avoid feeding onions, garlic, and other potentially toxic vegetables.</li>
        </ul>
        <br>
        <strong>3. Grains and Seeds:</strong>
        <ul>
          <li>Ducks can be fed a variety of grains and seeds, which serve as a good source of energy.</li>
          <li>Common grains include corn, wheat, barley, oats, and rice.</li>
          <li>Seeds like sunflower seeds and pumpkin seeds can be offered as treats.</li>
          <li>Make sure the grains and seeds are properly cleaned and free from molds or contaminants.</li>
        </ul>
        <br>
        <strong>4. Insects and Protein Sources:</strong>
        <ul>
          <li>Ducks are omnivorous and enjoy consuming insects, worms, and other protein-rich foods.</li>
          <li>Offer live or dried mealworms, earthworms, crickets, or black soldier fly larvae as a source of protein.
          </li>
          <li>Fish meal or shrimp meal can be included in their diet for additional protein.</li>
        </ul>
        <br>
        <strong>5. Kitchen Scraps and Leftovers:</strong>
        <ul>
          <li>Ducks can be fed certain kitchen scraps and leftovers as long as they are safe and suitable for their
            consumption.</li>
          <li>Avoid feeding salty, sugary, or fatty foods, as well as foods containing caffeine, chocolate, or alcohol.
          </li>
          <li>Offer vegetable trimmings, fruit peels, cooked rice or pasta, and bread in moderation.</li>
        </ul>
        <br>
        <strong>6. Grit and Calcium Supplements:</strong>
        <ul>
          <li>Ducks require grit to aid in the digestion of food. Offer insoluble grit, such as crushed oyster shells or
            coarse sand.</li>
          <li>Calcium supplements, like crushed eggshells or commercially available calcium sources, help maintain
            strong eggshells for laying ducks.</li>
        </ul>
        <br>
        <strong>7. Fresh, Clean Water:</strong>
        <ul>
          <li>Ducks need access to fresh, clean water at all times for drinking and foraging.</li>
          <li>Provide a shallow water source that allows them to dunk their heads and clean their nostrils and eyes.
          </li>
          <li>Ensure the water is changed regularly to prevent contamination.</li>
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