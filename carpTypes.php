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
          <a class="nav-link link-dark link-opacity-75" aria-current="page" href="carpTypes.php">Types</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" href="carpDiseases.php">Diseases</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" href="carpFeed.php">Feed</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" href="carpTips.php">Tips</a>
        </li>
      </ul>
    </div>

    <!-- Main Navbar Content -->
    <div class="main-navbar">
      <?php require 'partials/_header.php' ?>
    </div>


    <!-- body -->
    <div style="padding-left: 30px; margin-top:135px;">

      <div class="container">
        <div class="content">
          <!-- <p style="font-size: 35px;"><strong>Rohu Fish</strong></p> -->
          <h2>Rohu Fish</h2>
          <p style="text-align: justify; ">
            Rohu (Labeo rohita) is a popular freshwater fish species widely cultivated in Bangladesh. It is highly
            esteemed for its fast growth, excellent flesh quality, and adaptability to various farming systems. Rohu has
            a distinct streamlined body, silver scales, and a slightly concave head profile. One of the key reasons for
            the popularity of Rohu in fish farming is its rapid growth rate. It exhibits impressive growth potential,
            reaching a considerable size within a relatively short period. This characteristic makes it an economically
            viable choice for farmers, as they can achieve significant yields in a shorter time frame compared to other
            fish species. Rohu is highly valued for its delicious taste and delicate flesh. The meat of Rohu is white,
            firm, and low in fat content, making it a preferred choice for culinary purposes. It is highly sought after
            in both local and international markets, contributing to its commercial significance in the aquaculture
            industry. Another advantage of Rohu is its adaptability to various farming systems. It can be successfully
            cultured in pond systems, where it thrives on natural feed sources such as plankton, aquatic plants, and
            insects. Additionally, Rohu can be raised in integrated farming systems, such as rice-fish culture, where it
            utilizes the nutrients and byproducts of paddy fields, enhancing overall productivity. Rohu is known for its
            ability to tolerate a wide range of environmental conditions. It can survive in diverse water parameters,
            including temperature fluctuations and varying levels of dissolved oxygen. This adaptability makes it
            suitable for different geographical regions and farming practices in Bangladesh.

            In terms of breeding, Rohu is a prolific spawner, with high fecundity and multiple spawning capabilities.
            This reproductive characteristic further contributes to its suitability for commercial farming, as it
            facilitates the production of a large number of offspring. Overall, Rohu (Labeo rohita) holds significant
            importance in the aquaculture sector of Bangladesh. Its fast growth, delectable flesh, adaptability, and
            reproductive potential make it a preferred choice for fish farmers. The demand for Rohu remains consistently
            high, both domestically and internationally, making it a valuable asset for the sustainable development of
            the fisheries industry in Bangladesh.
          </p>
        </div>
        <div class="image">
          <img style="height: 420px;width: 510px;margin-top: 30px;" src="farmingSector/rohu.jpg" alt="Rohu Fish">

        </div>
      </div>
      <br><br>

      <!--Catla (Catla Catla)-->
      <div class="container">
        <div class="content">
          <!-- <p style="font-size: 35px;"><strong>Catla Fish</strong></p> -->
          <h2>Catla Fish</h2>
          <p style="text-align: justify;">
            Catla (Catla catla) is a widely cultivated freshwater fish species in Bangladesh, known for its commercial
            significance and nutritional value. It is an important component of the aquaculture industry and a popular
            choice for fish farming. Catla has a sleek and elongated body with large scales, a prominently arched head,
            and a deeply forked tail. It is characterized by its silver coloration and a distinctive black spot on its
            operculum. Catla is highly valued for its delicious taste, tender flesh, and high nutritional content. It is
            rich in proteins, essential amino acids, vitamins, and minerals, making it a healthy choice for consumption.
            One of the key advantages of Catla in fish farming is its fast growth rate. It exhibits rapid growth and can
            attain a considerable size within a relatively short period. This makes it an economically viable option for
            fish farmers, as it allows for efficient production and high yields. Catla is also known for its omnivorous
            feeding habit, consuming a variety of natural food sources such as plankton, aquatic plants, and insects. It
            can adapt to different feeding regimes and is capable of utilizing both natural and artificial feeds, making
            it suitable for various farming systems. In terms of breeding, Catla is a highly fecund fish species with a
            high reproductive potential. It is a surface spawner, releasing large quantities of eggs during the spawning
            season. This reproductive characteristic contributes to its suitability for commercial aquaculture, enabling
            the production of a significant number of offspring. Catla is also known for its adaptability to different
            environmental conditions. It can tolerate a wide range of water parameters, including temperature variations
            and dissolved oxygen levels. This adaptability makes it suitable for farming in diverse geographical regions
            and various farming practices in Bangladesh.
            In conclusion, Catla (Catla catla) holds significant importance in the aquaculture sector of Bangladesh. Its
            fast growth, delicious flesh, high nutritional value, adaptability, and reproductive potential make it a
            preferred choice for fish farmers. The demand for Catla remains consistently high, both domestically and
            internationally, contributing to the sustainable development of the fisheries industry in Bangladesh.

          </p>
        </div>
        <div class="image">
          <img style="height: 390px;width: 540px;margin-top: 100spx;" src="farmingSector/catla.jpg" alt="Catla Fish">
        </div>
      </div>
      <br><br>


      <!--Mrigal (Cirrhinus Mrigala)-->
      <div class="container">
        <div class="content">
          <!-- <p style="font-size: 35px;"><strong>Mrigal Fish</strong></p> -->
          <h2>Mrigal Fish</h2>
          <p style="text-align: justify;">
            Mrigal (Cirrhinus mrigala) is a prominent freshwater fish species extensively cultivated in Bangladesh. It
            is highly valued for its fast growth, adaptability, and nutritional value. Mrigal has an elongated body with
            a slightly compressed shape and a distinctive dark grey to olive-green coloration. It possesses a moderately
            pointed snout and a small mouth located ventrally. The scales of Mrigal are large and exhibit a prominent
            mrigal is a popular choice for fish farming due to its rapid growth rate. It has excellent growth potential
            and can reach a significant size within a relatively short period. This characteristic makes it economically
            viable for fish farmers, allowing them to achieve high yields and profits. Mrigal is also known for its
            adaptability to different farming systems. It can be successfully cultured in ponds, tanks, and rice-fish
            integrated systems, utilizing natural feeds and agricultural byproducts. It is a surface and column feeder,
            consuming a variety of food sources such as plankton, insects, and detritus. Additionally, Mrigal is known
            for its ability to tolerate a wide range of environmental conditions, including temperature fluctuations and
            low dissolved oxygen levels. This adaptability makes it suitable for farming in diverse geographical regions
            and various farming practices in Bangladesh. Mrigal is highly regarded for its nutritional value and taste.
            It is a good source of protein, essential amino acids, and minerals, making it a healthy choice for
            consumption. The flesh of Mrigal is white, tender, and mild in flavor, appealing to consumers. It is widely
            consumed in both domestic and international markets. In conclusion, Mrigal (Cirrhinus mrigala) plays a
            significant role in the aquaculture sector of Bangladesh. Its fast growth, adaptability, and nutritional
            value make it a preferred choice for fish farmers. The demand for Mrigal remains consistently high,
            contributing to the sustainable development of the fisheries industry in Bangladesh.
          </p>
        </div>
        <div class="image">
          <img style="height: 420px;width: 510px;margin-top: 100px;" src="farmingSector/mrigal.jpg" alt="Mrigal Fish">
        </div>
      </div>
      <br><br>

      <!--Silver Carp (Hypophthalmichthys Molitrix)-->
      <div class="container">
        <div class="content">
          <!-- <p style="font-size: 35px;"><strong>Silver Carp Fish</strong></p> -->
          <h2>Silver Carp Fish</h2>
          <p style="text-align: justify;">
            Silver Carp (Hypophthalmichthys molitrix) is a highly prized freshwater fish species that holds significant
            importance in the fisheries industry of Bangladesh. It is known for its unique characteristics, nutritional
            value, and commercial viability. Silver Carp has a sleek and elongated body with a silver-gray coloration,
            hence its name. It features a protruding mouth and a specialized feeding apparatus, known as a gill raker,
            which allows it to efficiently filter feed on plankton. One of the remarkable qualities of Silver Carp is
            its exceptional filter-feeding ability, making it a valuable asset in aquaculture systems. It can
            effectively consume large quantities of phytoplankton and zooplankton, contributing to water quality
            management and ecological balance in fish ponds. Silver Carp is highly regarded for its nutritional value.
            It is a rich source of protein, omega-3 fatty acids, vitamins, and minerals. The flesh of Silver Carp is
            white, tender, and has a mild flavor, making it suitable for various culinary preparations. In terms of
            commercial viability, Silver Carp has gained popularity in both domestic and international markets. Its
            unique feeding behavior, rapid growth rate, and high market demand have made it a preferred choice for fish
            farmers. Additionally, Silver Carp exhibits excellent adaptability to different farming systems, including
            ponds, reservoirs, and integrated farming practices. It can tolerate a wide range of environmental
            conditions, including temperature variations and low dissolved oxygen levels. This adaptability makes it
            well-suited for fish farming in Bangladesh, where diverse geographical regions and farming practices exist.
            Overall, Silver Carp (Hypophthalmichthys molitrix) plays a crucial role in the aquaculture sector of
            Bangladesh. Its filter-feeding ability, nutritional value, and commercial viability make it a valuable
            species for fish farmers. The sustainable cultivation of Silver Carp contributes to the development of the
            fisheries industry and provides a nutritious food source for consumers.
          </p>
        </div>
        <div class="image">
          <img style="height: 420px;width: 510px;margin-top: 80px;" src="farmingSector/silver_carp.jpg"
            alt="Silver Carp Fish">
        </div>
      </div>
      <br><br>

      <!--Grass Carp (Ctenopharyngodon idella)-->
      <div class="container">
        <div class="content">
          <!-- <p style="font-size: 35px;"><strong>Grass Carp Fish</strong></p> -->
          <h2>Grass Carp Fish</h2>
          <p style="text-align: justify;">
            Grass Carp (Ctenopharyngodon idella) is a widely recognized freshwater fish species known for its
            herbivorous feeding habits and its significant role in aquaculture and ecological management. It has a long
            and slender body, covered in large scales, and is typically silver or olive-green in color. Grass Carp is
            highly sought after for its ability to control aquatic vegetation and maintain water quality in ponds,
            lakes, and reservoirs. Due to its strong herbivorous nature, it consumes various types of aquatic plants,
            including submerged and floating species. This unique feeding behavior has made Grass Carp an effective tool
            for managing excessive aquatic vegetation growth, thereby preventing the spread of unwanted plants and
            improving overall ecosystem balance. In addition to its ecological significance, Grass Carp also holds
            commercial value. It is cultivated for its flesh, which is white, tender, and mild in flavor. The meat of
            Grass Carp is low in fat and high in protein, making it a healthy dietary choice for consumers. The rapid
            growth rate of Grass Carp further enhances its commercial appeal, allowing farmers to achieve substantial
            yields in a relatively short period. Grass Carp is known for its adaptability to different aquatic
            environments and farming systems. It can tolerate a wide range of water conditions, including temperature
            variations and low oxygen levels. This adaptability makes it suitable for fish farming in Bangladesh, where
            diverse geographical regions and farming practices exist. The cultivation of Grass Carp contributes to the
            sustainable management of aquatic ecosystems and provides economic opportunities for fish farmers. Overall,
            Grass Carp (Ctenopharyngodon idella) plays a crucial role in both ecological and commercial aspects of
            aquaculture in Bangladesh. Its herbivorous feeding habits, environmental adaptability, and market demand
            make it a valuable species for farmers and contribute to the overall development of the fisheries industry.
          </p>
        </div>
        <div class="image">
          <img style="height: 420px;width: 510px;margin-top: 100px;" src="farmingSector/grass_carp.jpg"
            alt="Grass Carp Fish">
        </div>
      </div>
      <br><br>

      <!--Common Carp (Cyprinus carpio)-->
      <div class="container mb-5">
        <div class="content">
          <!-- <p style="font-size: 35px;"><strong>Common Carp Fish</strong></p> -->
          <h2>Common Carp Fish</h2>
          <p style="text-align: justify;">
            Common Carp (Cyprinus carpio) is a widely distributed and highly adaptable freshwater fish species that has
            been cultivated and prized for centuries. It has a robust body, covered in large scales, and can exhibit
            various colorations, including gold, silver, and bronze. Common Carp is known for its hardy nature and
            ability to thrive in a wide range of aquatic environments, including ponds, lakes, rivers, and reservoirs.
            It is well-regarded for its resilience, adaptability, and versatility in aquaculture. Common Carp is valued
            for its excellent growth potential and the quality of its flesh. It is a fast-growing species that can reach
            impressive sizes and weights when provided with optimal feeding and environmental conditions. The meat of
            Common Carp is firm, flavorful, and versatile in culinary applications, making it a popular choice for
            consumption. Common Carp is renowned for its ability to utilize various food sources, including plant
            matter, insects, crustaceans, and small aquatic organisms. This adaptability in feeding habits allows it to
            thrive in diverse aquatic ecosystems and farming systems. Common Carp can be cultured in both extensive and
            intensive farming systems, utilizing natural food sources or commercial feeds, respectively. The cultivation
            of Common Carp provides economic opportunities for fish farmers and contributes to the availability of
            nutritious fish products for consumers. Additionally, Common Carp has a significant recreational value, as
            it is sought after by anglers for its strong fighting ability and challenging nature. It is a popular
            sportfish in many countries, attracting fishing enthusiasts who appreciate the thrill of catching and
            releasing this iconic species. Overall, Common Carp (Cyprinus carpio) represents a versatile and
            economically valuable fish species in aquaculture. Its adaptability, growth potential, and culinary appeal
            make it a favored choice among fish farmers and consumers alike.
          </p>
        </div>
        <div class="image">
          <img style="height: 420px;width: 510px;margin-top: 50px;" src="farmingSector/common_carp.jpg"
            alt="Common Carp Fish">
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