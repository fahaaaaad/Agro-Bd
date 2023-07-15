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
      .container {
        display: flex;
        align-items: center;
      }

      .image {
        flex: 1;
        margin-right: 50px;
        text-align: center;
      }

      .image img {
        max-width: 100%;
      }

      .round-image {
        border-radius: 50%;
      }

      .content {
        flex: 1;
      }


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
          <a class="nav-link link-dark link-opacity-75" aria-current="page" href="goatTypes.php">Types</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" href="goatDiseases.php">Diseases</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" href="goatFeed.php">Feed</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" href="goatTips.php">Tips</a>
        </li>
      </ul>
    </div>

    <!-- Main Navbar Content -->
    <div class="main-navbar">
      <?php require 'partials/_header.php' ?>
    </div>

    <!-- body -->
    <div style="padding-left: 30px; margin-top:135px;">

      <!--Alpine Goat-->

      <div class="container">
        <div class="content">
          <!-- <p style="font-size: 35px;"><strong>Alpine Goat</strong></p> -->
          <h2>Alpine Goat</h2>
          <p style="text-align: justify; ">
            The Alpine goat, also known as the French Alpine or simply Alpine, is a breed of domestic goat that
            originated in the French Alps. These goats are highly regarded for their exceptional milk production,
            adaptability, and versatility. Alpine goats are medium to large-sized animals with a sturdy and muscular
            build. They have a deep chest, strong legs, and a straight topline. Their coat comes in various colors and
            patterns, including solid black, bay, two-tone, and different combinations of black, brown, white, and gray.
            One of their most remarkable characteristics is their milk production. Alpine does can produce between 2,000
            and 3,000 pounds (907 to 1,361 kilograms) of milk per year, with an average butterfat content of 3-4%. The
            milk is highly nutritious and sought after for its quality, making it ideal for cheese, butter, and other
            dairy products. Alpine goats are known for their adaptability to various climates and environments. They can
            thrive in different conditions, from hot and arid regions to cold and mountainous areas. Their docile and
            cooperative temperament makes them easy to handle and train. Due to their exceptional milk production,
            adaptability, and amiable nature, Alpine goats are commonly used in dairy farming, both in commercial
            settings and by small-scale farmers.
            <br><br>
            In addition to their milk production, Alpine goats are also valued for their sociable nature and friendly
            temperament. They are curious and interact well with humans and other animals. Their versatility extends to
            exhibition purposes, where they can be showcased in various livestock shows and competitions. Whether in
            large commercial operations or small-scale homesteading, Alpine goats are a popular choice for farmers
            seeking a productive and adaptable breed. With their robust build, adaptability to different climates, and
            exceptional milk production, Alpine goats have made a significant impact in the dairy industry and have
            become a favored breed among dairy goat enthusiasts worldwide.
          </p>
        </div>
        <div class="image">
          <img style="height: 420px;width: 510px;margin-top: 85px;" src="farmingSector/alpine_goat.jpg"
            alt="Alpine Goat Image">
        </div>
      </div>
      <br><br>


      <!-- THE BLACK BENRAL GOAT!-->

      <div class="container">
        <div class="content">
          <!-- <p style="font-size: 35px;"><strong>Black Bengal Goat</strong></p> -->
          <h2>Black Bengal Goat</h2>
          <p style="text-align: justify; ">
            The Black Bengal goat is a highly valued breed indigenous to Bangladesh, known for its adaptability,
            resilience, and meat production. These goats possess a black or dark brown coat, although some individuals
            may exhibit shades of brown or white. Black Bengals are small to medium-sized animals, well-suited for the
            local climate and farming conditions. They are primarily raised for meat production, and their tender and
            flavorful meat is in high demand. Black Bengal goats have the remarkable ability to thrive on poor-quality
            vegetation, allowing them to graze on a variety of forage resources, including shrubs, bushes, and
            low-quality grass. This adaptability makes them ideal for extensive grazing systems where feed resources may
            be limited. </p>
          <p style="text-align: justify; ">
            One of the notable traits of the Black Bengal goat is its high reproductive efficiency. The does exhibit
            early maturity, high fertility rates, and good mothering abilities. They have the potential to produce
            multiple kids per breeding season, contributing to the breed's popularity and economic significance.
            Additionally, Black Bengal goats have good growth rates, and their meat-to-bone ratio is favorable, making
            them an efficient meat-producing breed. Due to their adaptability, hardiness, and meat quality, Black Bengal
            goats play a vital role in the rural economy of Bangladesh. They are commonly raised by small-scale farmers
            and rural households, contributing to both subsistence and commercial meat production. Furthermore, the
            breed has gained recognition at national and international levels, with efforts being made to conserve and
            promote its genetic potential. In summary, the Black Bengal goat is an adaptable and resilient breed in
            Bangladesh, known for its meat production, reproductive efficiency, and suitability to poor-quality
            vegetation. Their ability to thrive in challenging conditions, combined with their favorable meat-to-bone
            ratio, makes them highly valued in the rural economy. The breed's significance is further emphasized by its
            contributions to both subsistence and commercial meat production. Efforts to conserve and promote the Black
            Bengal goat's genetics highlight its economic and genetic importance in sustainable livestock production.
          </p>
        </div>
        <div class="image">
          <img style="height: 480px;width: 510px;margin-top: 85px;" src="farmingSector/black_bengal_goat.jpg"
            alt="Black Bengal Goat Image">
        </div>
      </div>
      <br><br>


      <!-- Jamunapari Goat-->

      <div class="container">
        <div class="content">
          <!-- <p style="font-size: 35px;"><strong>Jamunapari Goat</strong></p> -->
          <h2>Jamunapari Goat</h2>
          <p style="text-align: justify; ">
            The Jamunapari goat is a large-sized breed that originated from India but is also found in Bangladesh. These
            goats are renowned for their distinctive appearance, characterized by a long body, long ears, and a
            prominent nose. One of the primary reasons for their popularity is their exceptional milk production.
            Jamunapari goats are known for their ability to produce a large quantity of milk with high butterfat
            content. The milk they produce is rich, creamy, and highly nutritious, making it suitable for various dairy
            products such as cheese, butter, and yogurt. In addition to their milk production, Jamunapari goats are also
            raised for meat, and their meat is highly regarded for its tenderness and flavor. </p>
          <p style="text-align: justify; ">
            Jamunapari goats are adaptable animals and can thrive in various climatic conditions. They are well-suited
            for both intensive and extensive farming systems. The docile and friendly nature of Jamunapari goats makes
            them easy to handle and manage, adding to their appeal for farmers. Beyond their economic significance,
            Jamunapari goats are also admired for their aesthetic appeal. Their striking appearance, with their long
            body and elegant presence, makes them a favored choice for exhibitions and livestock shows. Their impressive
            milk production, adaptability, and versatile uses have made Jamunapari goats a valuable asset in the dairy
            and meat industries, both in Bangladesh and beyond. In summary, the Jamunapari goat is a highly esteemed
            breed known for its remarkable milk production, adaptability, and appealing appearance. Their ability to
            produce abundant and high-quality milk, along with their adaptability to different climates, contributes to
            their significance in the dairy industry. Additionally, their docile nature and aesthetic appeal make them a
            popular choice for exhibitions. Jamunapari goats have made a significant impact in the dairy and meat
            sectors, earning recognition for their valuable contributions and versatile uses. </p>
        </div>
        <div class="image">
          <img style="height: 420px;width: 510px;margin-top: 85px;" src="farmingSector/jamunapuri_goat.jpg"
            alt="Jamunapari Goat Image">
        </div>
      </div>
      <br><br>

      <!-- Beetal Goat-->

      <div class="container">
        <div class="content">
          <!-- <p style="font-size: 35px;"><strong>Beetal Goat</strong></p> -->
          <h2>Beetal Goat</h2>
          <p style="text-align: justify; ">

            The Beetal goat is a popular breed known for its large size and impressive meat and milk production
            capabilities. Originating from India, Beetal goats have gained recognition worldwide for their exceptional
            traits. They have a unique appearance characterized by a medium to large frame, long ears, and a Roman nose.
            The coat of Beetal goats varies in color, ranging from red, black, brown, or a combination of these shades.
            These goats are primarily raised for their meat, which is highly valued for its tenderness and flavor. The
            meat of Beetal goats is in high demand due to its quality and nutritional value. In addition to their meat
            production, Beetal goats are also known for their significant milk yield. They have the capacity to produce
            a substantial quantity of milk with high butterfat content. The milk is rich, creamy, and packed with
            essential nutrients, making it suitable for the production of various dairy products. Beetal goats are
            well-adapted to different climates and environmental conditions, which adds to their versatility. They are
            hardy animals, capable of thriving in both intensive and extensive farming systems. Their docile nature
            makes them relatively easy to handle and manage.
          <p style="text-align: justify; ">
            The Beetal goat breed has become popular not only for its meat and milk production capabilities but also for
            its potential in crossbreeding programs. Their genetic characteristics have been successfully utilized to
            enhance the productivity of other goat breeds. Due to their adaptability, productivity, and versatile uses,
            Beetal goats have made a significant impact in the agricultural industry. They play a crucial role in
            meeting the demand for high-quality meat and milk, contributing to the livelihoods of farmers and the
            overall economy. The Beetal goat's impressive attributes and adaptability have made it a valuable and
            sought-after breed among goat enthusiasts and farmers worldwide. </p>
        </div>
        <div class="image">
          <img style="height: 400px;width: 510px;margin-top: 85px;" src="farmingSector/beetal_goat.jpg"
            alt="Crossbred Goats">
        </div>
      </div>
      <br><br>

      <!-- Crossbred Goats-->

      <div class="container">
        <div class="content">
          <!-- <p style="font-size: 35px;"><strong>Crossbred Goats</strong></p> -->
          <h2>Crossbred Goats</h2>
          <p style="text-align: justify;">
            Crossbred goats are the result of breeding two different goat breeds to obtain offspring with desired
            traits. The practice of crossbreeding aims to combine the favorable characteristics of both parent breeds,
            resulting in a more robust and productive goat. These goats exhibit a wide range of physical
            characteristics, depending on the specific parent breeds involved in the cross. Crossbred goats often
            possess improved growth rates, meat quality, milk production, or other desirable traits that make them
            valuable in various farming systems. One of the main advantages of crossbred goats is their hybrid vigor or
            heterosis. Crossbreeding introduces genetic diversity, which can enhance the overall health, adaptability,
            and productivity of the offspring. The hybrid vigor can manifest in improved disease resistance, higher
            fertility rates, and increased survivability. This makes crossbred goats well-suited for different
            environmental conditions and management practices. Additionally, crossbreeding allows farmers to tailor the
            traits of the offspring to meet specific market demands, such as better meat yield or higher milk
            production.
          </p>
          <p style="text-align: justify;">
            The popularity of crossbred goats stems from their versatility and adaptability to diverse farming systems.
            They are commonly used in commercial farming operations, where their improved growth rates and meat quality
            can lead to higher profitability. Crossbred goats also play a significant role in small-scale farming, where
            farmers can select specific breed combinations to suit their specific needs and resources. The availability
            of different crossbreeding options allows farmers to optimize the traits they desire in their goat herds. In
            summary, crossbred goats offer a range of advantages due to their hybrid vigor and combination of desirable
            traits from parent breeds. These goats exhibit improved growth rates, meat quality, milk production, and
            adaptability. The flexibility of crossbreeding allows farmers to tailor the traits of the offspring to meet
            their specific goals and market demands. Whether in large-scale commercial operations or small-scale
            farming, crossbred goats have proven to be a valuable asset, contributing to the overall productivity and
            profitability of goat farming.
          </p>
        </div>
        <div class="image">
          <img style="height: 460px;width: 510px;margin-top: 85px;" src="farmingSector/crossbred_goat.jpg"
            alt="Crossbred Goats">
        </div>
      </div>
      <br><br>

      <!--Kamori Goat-->

      <div class="container mb-5">
        <div class="content">
          <!-- <p style="font-size: 35px;"><strong>Kamori Goat</strong></p> -->
          <h2>Kamori Goat</h2>
          <p style="text-align: justify;">
            The Kamori goat is a breed of domestic goat that originated in the Sindh region of Pakistan. It is highly
            regarded for its distinctive appearance and excellent milk and meat production capabilities. Kamori goats
            are known for their large size and muscular build. They have a unique feature of twisted, spiraling horns,
            which add to their visual appeal. The coat of Kamori goats is usually white or light brown, and they have a
            compact body with strong legs. These goats are primarily raised for their milk, which is rich in nutrients
            and has a creamy texture. Kamori does can produce a substantial amount of milk, ranging from 2 to 3 liters
            per day, with a butterfat content of around 4%. The milk is highly sought after for its quality and is used
            for making various dairy products like cheese and butter.
            <br><br>
            In addition to their milk production, Kamori goats are also valued for their meat. The meat of Kamori goats
            is tender, flavorful, and highly nutritious. It is known for its low-fat content and is considered a
            healthier alternative to other meat sources. Kamori goats are well-adapted to the harsh climatic conditions
            of the region, making them resilient and suitable for extensive farming systems. They are known for their
            hardiness and ability to thrive in semi-arid environments. Kamori goats have a calm and docile temperament,
            making them easy to handle and manage. Due to their impressive milk and meat production capabilities, as
            well as their adaptability, Kamori goats have gained popularity not only in Pakistan but also in other parts
            of the world, where they are valued for their unique characteristics and versatile uses.
          </p>
        </div>
        <div class="image">
          <img style="height: 350px; width: 510px; margin-top: 85px;" src="farmingSector/kamori_goat.jpg"
            alt="Kamori Goat Image">
        </div>
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