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
      <!-- <h2>Cow Feed</h2>
      <p style="text-align: justify;"> -->
      <h2 class="mb-4" style="max-width:1400px; margin-left:auto; margin-right:auto;">Pigeon Feed</h2>
      <div style="text-align: justify; max-width:1400px; margin-left:auto; margin-right:auto;">
        <p style="text-align: justify;">
          <strong>1. Pigeon Pellets:</strong>
        <ul>
          <li>Pigeon pellets are specially formulated to provide the essential nutrients required for the healthy growth
            and development of pigeons.</li>
          <li>They contain a balanced combination of proteins, carbohydrates, fats, vitamins, and minerals.</li>
          <li>Pellets are convenient to use and ensure that pigeons receive all the necessary nutrients in the right
            proportions.</li>
          <li>Follow the manufacturer's instructions for feeding quantities based on the pigeon's age and activity
            level.</li>
        </ul>
        <br>
        <strong>2. Whole Grains:</strong>
        <ul>
          <li>Whole grains are a natural and nutritious food source for pigeons.</li>
          <li>Common grains suitable for pigeons include wheat, barley, corn, oats, and millet.</li>
          <li>Ensure the grains are clean and free from molds or contaminants before offering them to the pigeons.</li>
        </ul>
        <br>
        <strong>3. Legumes and Seeds:</strong>
        <ul>
          <li>Legumes and seeds provide additional protein and energy for pigeons.</li>
          <li>Offer legumes such as peas, lentils, and beans as part of their diet.</li>
          <li>Seeds like sunflower seeds, pumpkin seeds, and flaxseeds can also be included.</li>
          <li>Avoid salted or flavored seeds, as they may contain harmful additives.</li>
        </ul>
        <br>
        <strong>4. Fresh Greens and Vegetables:</strong>
        <ul>
          <li>Fresh greens and vegetables are a valuable source of vitamins and minerals for pigeons.</li>
          <li>Include leafy greens like lettuce, spinach, and kale in their diet.</li>
          <li>Offer vegetables such as carrots, cucumbers, and peas in small quantities.</li>
          <li>Avoid feeding onions, garlic, and other potentially toxic vegetables.</li>
        </ul>
        <br>
        <strong>5. Fruits:</strong>
        <ul>
          <li>Offer small amounts of fresh fruits as a treat for pigeons.</li>
          <li>Fruits like apples, berries, grapes, and melons can be given occasionally.</li>
          <li>Remove any seeds or pits from the fruits before feeding.</li>
        </ul>
        <br>
        <strong>6. Grit and Calcium Supplements:</strong>
        <ul>
          <li>Pigeons require grit to aid in the digestion of food. Offer insoluble grit, such as crushed oyster shells
            or coarse sand.</li>
          <li>Calcium supplements, like crushed eggshells or commercially available calcium sources, help maintain
            strong bones and eggshells.</li>
          <li>Ensure a separate container of grit and calcium supplements is available to the pigeons.</li>
        </ul>
        <br>
        <strong>7. Fresh, Clean Water:</strong>
        <ul>
          <li>Pigeons need access to fresh, clean water at all times for drinking and bathing.</li>
          <li>Provide a shallow water container that allows pigeons to dip their beaks and clean themselves.</li>
          <li>Regularly clean and refill the water container to prevent contamination.</li>
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