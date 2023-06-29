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
    </nav>




    <!-- body -->
    <div style="margin-top:65px; margin-bottom:65px;">
      <!-- <h2>Cow Feed</h2>
      <p style="text-align: justify;"> -->
      <h2 class="mb-4" style="max-width:1400px; margin-left:auto; margin-right:auto;">Tips to Start Chicken Farming/h2>
        <div style="text-align: justify; max-width:1400px; margin-left:auto; margin-right:auto;">
          <p style="text-align: justify;">
            <strong>1. Research and Planning:</strong>
            <ul>
              <li>Gain knowledge about different chicken breeds, their characteristics, and suitability for your farming
                goals (meat production or egg laying).</li>
              <li>Understand the local regulations and requirements for chicken farming, including zoning laws, permits,
                and biosecurity measures.</li>
              <li>Develop a comprehensive business plan that includes budgeting, marketing strategies, and long-term
                goals.</li>
            </ul>
            <strong>2. Housing and Infrastructure:</strong>
            <ul>
              <li>Construct or modify a suitable chicken coop or housing facility that provides adequate space,
                ventilation, and protection from predators.</li>
              <li>Ensure proper insulation and temperature control within the coop to promote the health and comfort of
                the chickens.</li>
              <li>Install nesting boxes, perches, and appropriate flooring materials to facilitate egg laying and easy
                cleaning.</li>
            </ul>
            <strong>3. Procuring Healthy Chicks or Hens:</strong>
            <ul>
              <li>Source chicks or hens from reputable hatcheries or suppliers known for providing healthy and
                disease-free birds.</li>
              <li>Inspect the birds for signs of good health, such as bright eyes, active behavior, clean feathers, and
                well-formed legs and beaks.</li>
              <li>Consider starting with day-old chicks for meat production or point-of-lay hens for egg production,
                depending on your farming objectives.</li>
            </ul>
            <strong>4. Feeding and Nutrition:</strong>
            <ul>
              <li>Provide a balanced diet of commercial feed suitable for the age and purpose of your chickens.</li>
              <li>Ensure access to clean and fresh water at all times to prevent dehydration and promote proper digestion.
              </li>
              <li>Supplement the feed with occasional treats like kitchen scraps or greens, but avoid feeding them harmful
                or toxic substances.</li>
            </ul>
            <strong>5. Health Care and Biosecurity:</strong>
            <ul>
              <li>Establish a regular health care routine, including vaccinations, deworming, and preventive measures
                against common poultry diseases.</li>
              <li>Implement biosecurity practices to minimize the risk of disease introduction and transmission, such as
                limiting visitor access, maintaining strict hygiene, and controlling pests and rodents.</li>
              <li>Monitor the chickens regularly for any signs of illness, stress, or abnormal behavior, and promptly seek
                veterinary advice if needed.</li>
            </ul>
            <strong>6. Egg Handling (if applicable):</strong>
            <ul>
              <li>Provide clean and comfortable nesting areas for the hens to lay eggs.</li>
              <li>Collect eggs frequently and handle them carefully to maintain their quality and prevent breakage.</li>
              <li>Implement proper egg storage and packaging techniques to ensure freshness and food safety.</li>
            </ul>
            <strong>7. Marketing and Selling:</strong>
            <ul>
              <li>Develop a marketing strategy to promote your chicken products, whether it's selling meat, eggs, or live
                birds.</li>
              <li>Identify potential markets, such as local consumers, restaurants, or farmers' markets, and establish
                relationships with potential buyers.</li>
              <li>Consider value-added products like organic or free-range chicken, which can attract niche markets and
                higher prices.</li>
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