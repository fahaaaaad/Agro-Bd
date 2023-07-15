<?php
  session_start();
?>
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

    <!-- Main Navbar Content -->
    <div class="main-navbar">
      <?php require 'partials/_header.php' ?>
    </div>





    <!-- body -->
    <div style="margin-top:65px; margin-bottom:135px;">
      <!-- <h2>Cow Feed</h2>
      <p style="text-align: justify;"> -->
      <h2 class="mb-4" style="max-width:1400px; margin-left:auto; margin-right:auto;">Tips for Buffalo Farming</h2>
      <div style="text-align: justify; max-width:1400px; margin-left:auto; margin-right:auto;">
        <p style="text-align: justify; ">
          <strong>1. Conduct Thorough Research:</strong>
        <ul>
          <li>Learn about buffalo farming, including breed selection, management practices, feeding, health care, and
            market demand for buffalo products.</li>
          <li>Gather information from books, online resources, and by visiting existing buffalo farms.</li>
          <li>Connect with experienced buffalo farmers to gain insights and learn from their experiences.</li>
        </ul>
        <br>
        <strong>2. Develop a Solid Business Plan:</strong>
        <ul>
          <li>Outline your goals, objectives, and timeline for starting and expanding your buffalo farming venture.</li>
          <li>Include financial projections, investment requirements, marketing strategies, and operational plans.</li>
          <li>Consider factors such as land, infrastructure, equipment, feed, labor, and veterinary services.</li>
        </ul>
        <br>
        <strong>3. Secure Adequate Land and Facilities:</strong>
        <ul>
          <li>Ensure you have sufficient land for grazing and constructing proper housing and infrastructure for the
            buffaloes.</li>
          <li>Plan and design facilities such as barns, sheds, fences, water sources, feeding areas, and storage spaces
            for feed and equipment.</li>
          <li>Aim for a comfortable and hygienic environment that promotes the well-being of the buffaloes.</li>
        </ul>
        <br>
        <strong>4. Choose the Right Buffalo Breeds:</strong>
        <ul>
          <li>Research different buffalo breeds and select those suitable for your farming goals, climate, and market
            demand.</li>
          <li>Consider factors such as milk production, meat quality, adaptability, disease resistance, and reproductive
            efficiency.</li>
          <li>Source healthy and genetically superior buffalo breeds from reputable breeders or reliable sources.</li>
        </ul>
        <br>
        <strong>5. Establish Proper Feeding and Nutrition:</strong>
        <ul>
          <li>Develop a well-balanced feeding program based on the nutritional needs of buffaloes at different stages of
            life.</li>
          <li>Provide a combination of fresh green forage, quality hay, silage, and concentrate feeds to meet their
            dietary requirements.</li>
          <li>Consult with an animal nutritionist to formulate appropriate feed rations and ensure the availability of
            clean and fresh water at all times.</li>
        </ul>
        <br>
        <strong>6. Implement Good Health Management:</strong>
        <ul>
          <li>Develop a health management plan in consultation with a veterinarian experienced in buffalo health.</li>
          <li>Vaccinate the buffaloes against common diseases such as Foot-and-Mouth Disease (FMD), Bovine Tuberculosis
            (TB), and Brucellosis.</li>
          <li>Establish a regular schedule for deworming, hoof care, and preventive measures against external parasites.
          </li>
          <li>Maintain proper records of vaccinations, treatments, and health monitoring.</li>
        </ul>
        <br>
        <strong>7. Invest in Breeding and Reproduction:</strong>
        <ul>
          <li>Plan for a sound breeding program to maintain and improve the quality of your buffalo herd.</li>
          <li>Ensure proper heat detection, artificial insemination, or natural mating based on your breeding goals.
          </li>
          <li>Monitor the reproductive health of the buffaloes and implement timely interventions to maximize fertility
            and successful calving.</li>
        </ul>
        <br>
        <strong>8. Market Your Buffalo Products:</strong>
        <ul>
          <li>Identify potential markets for buffalo milk, meat, and other value-added products such as cheese or
            yogurt.</li>
          <li>Establish contacts with local retailers, restaurants, and consumers who appreciate buffalo products.</li>
          <li>Leverage online platforms and social media to promote your farm and connect with potential customers.</li>
          <li>Participate in agricultural exhibitions, fairs, and farmer's markets to showcase your products.</li>
        </ul>
        <br>
        <strong>9. Continuously Educate Yourself:</strong>
        <ul>
          <li>Stay updated on the latest advancements, research, and best practices in buffalo farming through
            workshops, seminars, and online resources.</li>
          <li>Join buffalo farming associations or networks to connect with other farmers and exchange knowledge and
            experiences.</li>
          <li>Learn from your own experiences and adapt your farming practices based on feedback and observations.</li>
        </ul>
        <br>
        <strong>10. Seek Professional Guidance:</strong>
        <ul>
          <li>Consult with agricultural experts, veterinarians, and experienced buffalo farmers for guidance and advice.
          </li>
          <li>Join training programs or workshops specifically tailored for buffalo farming to enhance your skills and
            knowledge.</li>
          <li>Stay connected with government agricultural departments and avail yourself of any support or incentives.
          </li>
        </ul>
        <br>

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