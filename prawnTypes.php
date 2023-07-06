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
          <a class="nav-link link-dark link-opacity-75" aria-current="page" href="prawnTypes.php">Types</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" href="prawnDiseases.php">Diseases</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" href="prawnFeed.php">Feed</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" href="prawnTips.php">Tips</a>
        </li>
      </ul>
    </div>

    <!-- Main Navbar Content -->
    <div class="main-navbar">
      <?php require 'partials/_header.php' ?>
    </div>


    <!-- body -->
    <div style="padding-left: 30px; margin-top:135px;">

      <!--Giant River Prawn-->

      <div class="container">
        <div class="content">
          <!-- <p style="font-size: 35px;"><strong>Giant River Prawn</strong></p> -->
          <h2>Giant River Prawn</h2>
          <p style="text-align: justify;">
            The Giant River Prawn, scientifically known as Macrobrachium rosenbergii, is a species of freshwater prawn
            that holds significant importance in Bangladesh. Commonly referred to as "Golda Chingri" in Bengali, it is
            highly valued for its large size, delicious taste, and commercial viability. The Giant River Prawn is native
            to the freshwater rivers, lakes, and ponds of Bangladesh. It has a robust body structure and can grow to
            impressive sizes, reaching lengths of up to 12 inches or more. The prawn's coloration varies from olive
            green to brown, with distinctive vertical stripes along its body. It possesses a pair of long, powerful
            pincers that it uses for defense and capturing prey. In Bangladesh, the cultivation of Giant River Prawns
            has gained immense popularity in the aquaculture industry. Farmers are attracted to its high market demand
            and economic value. These prawns are reared in specially designed ponds or tanks that mimic their natural
            habitat. The farming process involves careful management of water quality, temperature, and nutrition to
            ensure optimal growth and survival. Giant River Prawns are omnivorous, feeding on a diverse diet that
            includes algae, small aquatic plants, insects, crustaceans, and even small fish. In aquaculture settings,
            they are typically fed a balanced diet consisting of commercial feeds, supplemented with natural food
            sources found in the rearing ponds. One of the reasons for the popularity of Giant River Prawns is their
            culinary appeal. They are highly sought after for their succulent meat, which is firm, sweet, and flavorful.
            In Bangladesh, they are used in a wide range of traditional dishes and delicacies, including curries,
            stir-fries, and grilled preparations. Due to their economic significance, efforts have been made to improve
            the farming techniques and breeding programs of Giant River Prawns in Bangladesh. Selective breeding is
            employed to enhance desirable traits such as fast growth, disease resistance, and high meat quality. This
            continuous improvement in aquaculture practices contributes to the sustainable production of Giant River
            Prawns and supports the livelihoods of many farmers in the country.
            In conclusion, the Giant River Prawn, or Golda Chingri, is a prized freshwater prawn species in Bangladesh.
            Its large size, delectable taste, and commercial potential make it a valuable asset in the aquaculture
            industry. With proper farming practices and growing market demand, the cultivation of Giant River Prawns
            continues to thrive, benefiting both farmers and consumers alike.
          </p>
        </div>
        <div class="image">
          <img style="height: 420px;width: 510px;margin-top: 100px;" src="farmingSector/giant_river_prawn.jpg"
            alt="Giant River Prawn">
        </div>
      </div>
      <br>

      <!--Indian White Prawn-->

      <div class="container">
        <div class="content">
          <!-- <p style="font-size: 35px;"><strong>Indian White Prawn</strong></p> -->
          <h2>Indian White Prawn</h2>
          <p style="text-align: justify;">
            The Indian White Prawn, scientifically known as Fenneropenaeus indicus, is a species of marine prawn that is
            highly regarded for its culinary and economic significance. It is widely distributed along the coastal
            regions of the Indian Ocean, including the waters of India, Bangladesh, and other neighboring countries. The
            Indian White Prawn has a distinctive white coloration with a slightly translucent appearance, and it
            typically reaches a size of 6 to 8 inches in length. This species is known for its succulent and flavorful
            meat, making it a popular choice in various cuisines. In India and Bangladesh, the cultivation of Indian
            White Prawns has gained considerable attention in the aquaculture industry. These prawns are typically
            reared in specialized ponds or enclosures located near coastal areas. The farming process involves carefully
            managing water quality, salinity levels, and temperature to create a favorable environment for their growth
            and development. Indian White Prawns are fed a balanced diet consisting of commercial feeds, supplemented
            with natural food sources found in the rearing ponds. They are efficient feed converters and can utilize
            low-quality feed resources, which contributes to their economic viability in aquaculture. The Indian White
            Prawn is highly valued for its versatility in culinary applications. It is used in a wide range of dishes,
            including curries, stir-fries, grills, and even as a popular ingredient in seafood-based soups and stews.
            The firm and succulent meat of the prawn adds a delightful flavor to various preparations. Due to its high
            market demand, Indian White Prawn farming has become an important source of income for coastal communities,
            contributing to their economic development and livelihoods. Efforts are being made to enhance the farming
            techniques and breeding programs of Indian White Prawns to improve their growth rate, disease resistance,
            and overall quality. Selective breeding and genetic improvement programs aim to produce prawns with
            desirable traits that meet the demands of consumers and the aquaculture industry. These initiatives
            contribute to the sustainable production of Indian White Prawns and support the livelihoods of farmers
            involved in their cultivation.
            In conclusion, the Indian White Prawn is a prized marine species known for its culinary excellence and
            economic significance. Its delectable meat and growing market demand make it an important commodity in the
            aquaculture industry of India and Bangladesh. Through sustainable farming practices and ongoing breeding
            programs, the cultivation of Indian White Prawns continues to thrive, benefiting both farmers and seafood
            enthusiasts.
          </p>
        </div>
        <div class="image">
          <img style="height: 420px;width: 510px;margin-top: 10px;" src="farmingSector/indian_white_prawn.jpg"
            alt="Indian White Prawn">
        </div>
      </div>
      <br>

      <!--Banana Prawn-->

      <div class="container">
        <div class="content">
          <!-- <p style="font-size: 35px;"><strong>Banana Prawn</strong></p> -->
          <h2>Banana Prawn</h2>
          <p style="text-align: justify;">
            The Banana Prawn, scientifically known as Fenneropenaeus merguiensis, is a species of marine prawn that is
            highly prized for its distinct flavor and culinary versatility. Native to the coastal waters of the
            Indo-Pacific region, including Bangladesh, India, and neighboring countries, this prawn species has gained
            significant popularity in the seafood industry. The Banana Prawn gets its name from its elongated body
            shape, resembling the curvature of a banana, and typically grows to a size of 8 to 10 inches. It displays a
            striking coloration, with a pale yellow to light brown shell and distinctive red or pink markings. This
            species is known for its delicate and sweet meat, which adds a delightful taste to a wide range of dishes.
            In Bangladesh, the cultivation of Banana Prawns has gained momentum in the aquaculture sector. These prawns
            are typically reared in specialized ponds or enclosures near coastal areas, where water quality, salinity
            levels, and temperature are carefully managed to create an optimal environment for their growth. Banana
            Prawns are omnivorous, feeding on a variety of organisms, including algae, small crustaceans, and detritus
            found in their natural habitat. In aquaculture settings, they are provided with a balanced diet consisting
            of commercial feeds that meet their nutritional requirements. The versatile culinary qualities of Banana
            Prawns make them a popular choice in various cuisines. They are used in dishes such as stir-fries, curries,
            grills, and as a key ingredient in seafood salads and pastas. The tender and succulent meat of Banana Prawns
            enhances the overall taste and texture of these preparations. With its high market demand and economic
            viability, the cultivation of Banana Prawns offers significant opportunities for coastal communities,
            contributing to their livelihoods and socioeconomic development. Efforts are underway to improve the farming
            techniques and breeding programs of Banana Prawns to enhance their growth rate, disease resistance, and
            overall quality. Selective breeding and genetic improvement initiatives aim to produce prawns with desirable
            traits that meet consumer preferences and industry requirements. Through sustainable aquaculture practices
            and continuous research, the production of Banana Prawns continues to flourish, benefiting both farmers and
            seafood enthusiasts alike.
          </p>
        </div>
        <div class="image">
          <img style="height: 420px;width: 510px;margin-top: 170px;" src="farmingSector/banana_prawn.jpg"
            alt="Banana Prawn">
        </div>
      </div>
      <br>

      <!--Tiger Prawn-->

      <div class="container">
        <div class="content">
          <!-- <p style="font-size: 35px;"><strong>Tiger Prawn</strong></p> -->
          <h2>Tiger Prawn</h2>
          <p style="text-align: justify;">
            The Tiger Prawn, scientifically known as Penaeus monodon, is a species of marine prawn that is highly sought
            after for its size, distinctive appearance, and delectable meat. Native to the Indo-Pacific region,
            including Bangladesh and neighboring countries, this prawn species has become a valuable commodity in the
            seafood industry. The Tiger Prawn derives its name from the striking black stripes on its shell, which
            resemble the patterns of a tiger. It is a large-sized prawn that can grow up to 12 inches or more in length.
            The shell of the Tiger Prawn ranges in color from light gray to brown, and it has a firm and juicy meat that
            is prized for its sweet flavor. In Bangladesh, the cultivation of Tiger Prawns has gained significant
            momentum in the aquaculture sector. These prawns are typically reared in specialized ponds or enclosures
            near coastal areas, where water quality, temperature, and salinity levels are carefully managed to create an
            optimal environment for their growth. Tiger Prawns are omnivorous, feeding on a variety of organisms,
            including small fish, crustaceans, and detritus found in their natural habitat. In aquaculture settings,
            they are provided with a balanced diet consisting of commercial feeds that meet their nutritional
            requirements. The culinary appeal of Tiger Prawns makes them a popular choice in various cuisines. They are
            used in dishes such as grills, stir-fries, curries, and as a key ingredient in seafood pastas and risottos.
            The firm and succulent meat of Tiger Prawns add a delightful texture and taste to these preparations. The
            cultivation of Tiger Prawns offers significant economic opportunities for coastal communities in Bangladesh,
            contributing to their livelihoods and socioeconomic development. Efforts are underway to improve the farming
            techniques and breeding programs of Tiger Prawns to enhance their growth rate, disease resistance, and
            overall quality. Selective breeding and genetic improvement initiatives aim to produce prawns with desirable
            traits that meet consumer preferences and industry standards. Through sustainable aquaculture practices and
            continuous research, the production of Tiger Prawns continues to thrive, benefiting both farmers and seafood
            enthusiasts.
          </p>
        </div>
        <div class="image">
          <img style="height: 420px;width: 510px;margin-top: 80px;" src="farmingSector/tiger_prawn.jpg"
            alt="Tiger Prawn">
        </div>
      </div>
      <br>

      <!--Freshwater Prawns-->

      <div class="container mb-5">
        <div class="content">
          <!-- <p style="font-size: 35px;"><strong>Freshwater Prawns</strong></p> -->
          <h2></h2>
          <p style="text-align: justify;">
            Freshwater Prawns are a diverse group of prawn species that inhabit freshwater ecosystems, including rivers,
            lakes, and ponds. They are highly valued for their delicious meat and have gained popularity in the
            aquaculture industry. Freshwater prawns, including species like Macrobrachium rosenbergii and Macrobrachium
            nipponense, are native to Bangladesh and are widely cultivated for their economic significance. These prawns
            have a unique life cycle, starting as larvae in freshwater bodies and then migrating to brackish or marine
            environments to reproduce. Freshwater prawns have a distinct appearance with elongated bodies and long,
            muscular pincers. They exhibit a range of colors, from light brown to dark green, and have a delicate flavor
            that is often described as sweeter than their marine counterparts. In Bangladesh, the cultivation of
            freshwater prawns has become an important sector of the aquaculture industry. They are reared in specially
            designed ponds or tanks that mimic their natural habitat, and the farming process involves careful
            management of water quality, temperature, and nutrition. Freshwater prawns are omnivorous, feeding on a
            variety of food sources, including algae, small fish, insects, and detritus. They are known for their fast
            growth rate and high reproductive capacity, making them suitable for commercial production. The culinary
            versatility of freshwater prawns makes them a popular choice in various dishes. They can be prepared in
            different ways, such as curries, stir-fries, grills, and even used in traditional recipes. The succulent and
            tender meat of freshwater prawns adds a delightful taste and texture to these preparations. The cultivation
            of freshwater prawns provides significant economic opportunities for farmers in Bangladesh, contributing to
            their income and livelihoods. Efforts are underway to improve the farming techniques and breeding programs
            of freshwater prawns to enhance their productivity, disease resistance, and overall quality. Through
            sustainable aquaculture practices and ongoing research, the cultivation of freshwater prawns continues to
            thrive, supporting the food security and economic growth of the country.
          </p>
        </div>
        <div class="image">
          <img style="height: 420px;width: 510px;margin-top: 10px;" src="farmingSector/freshwater_prawns.jpg"
            alt="Freshwater Prawns">
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