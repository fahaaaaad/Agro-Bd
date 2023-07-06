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

    <!-- Main Navbar Content -->
    <div class="main-navbar">
      <?php require 'partials/_header.php' ?>
    </div>




    <!-- body -->
    <div style="margin-top:135px; margin-bottom:65px;">
      <!-- <h2>Cow Feed</h2>
      <p style="text-align: justify;"> -->
      <h2 class="mb-4" style="max-width:1400px; margin-left:auto; margin-right:auto;">Tips for Pigeon Farming</h2>
      <div style="text-align: justify; max-width:1400px; margin-left:auto; margin-right:auto;">
        <p style="text-align: justify;">
          <strong>1. Provide Adequate Housing:</strong>
          <ul>
            <li>Construct suitable pigeon lofts or dovecoats to provide a safe and comfortable environment for your
              pigeons.</li>
            <li>Ensure sufficient space, proper ventilation, and adequate perches or nest boxes for the pigeons to roost
              and breed.</li>
            <li>Keep the pigeon housing clean and well-maintained to prevent the spread of diseases and parasites.</li>
          </ul>

          <br>

          <strong>2. Feed a Balanced Diet:</strong>
          <ul>
            <li>Offer a balanced diet consisting of pigeon feeds specifically formulated for their nutritional needs.</li>
            <li>Supplement their diet with grains like corn, wheat, and barley, as well as seeds like millet and sunflower
              seeds.</li>
            <li>Provide fresh drinking water and occasional treats like greens, fruits, and vegetables.</li>
          </ul>

          <br>

          <strong>3. Maintain Hygiene and Cleanliness:</strong>
          <ul>
            <li>Regularly clean the pigeon lofts, perches, and nest boxes to prevent the buildup of waste and parasites.
            </li>
            <li>Provide clean and fresh bedding materials, such as straw or wood shavings, for nesting and roosting areas.
            </li>
            <li>Implement proper waste management practices to minimize odor and maintain a hygienic environment.</li>
          </ul>

          <br>

          <strong>4. Monitor Health and Well-being:</strong>
          <ul>
            <li>Observe the pigeons daily for any signs of illness, injuries, or abnormalities in behavior or appearance.
            </li>
            <li>Provide regular veterinary check-ups and vaccinations to prevent and manage common pigeon diseases.</li>
            <li>Handle sick or injured pigeons promptly and isolate them if necessary to prevent the spread of diseases.
            </li>
          </ul>

          <br>

          <strong>5. Allow for Exercise and Flying:</strong>
          <ul>
            <li>Provide opportunities for pigeons to exercise and fly by allowing them regular free-flight time.</li>
            <li>Ensure a safe and secure flying area to prevent the pigeons from getting lost or becoming prey to
              predators.</li>
            <li>Train and condition pigeons for racing or homing purposes through gradual and consistent training methods.
            </li>
          </ul>

          <br>

          <strong>6. Breed and Reproduction:</strong>
          <ul>
            <li>Understand the basics of pigeon breeding and genetics if you plan to breed pigeons.</li>
            <li>Create separate breeding pairs or colonies, providing suitable nesting areas and privacy for successful
              breeding.</li>
            <li>Ensure proper care and nutrition for breeding pigeons, as well as appropriate management of eggs and young
              squabs.</li>
          </ul>

          <br>

          <strong>7. Learn and Network:</strong>
          <ul>
            <li>Continuously educate yourself about pigeon farming through books, online resources, and interactions with
              experienced pigeon breeders.</li>
            <li>Participate in local pigeon clubs or associations to connect with other pigeon enthusiasts and share
              knowledge and experiences.</li>
            <li>Attend pigeon shows and exhibitions to learn from experts and showcase your own pigeons.</li>
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