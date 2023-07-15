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
    <div style="padding-left: 30px; margin-top:135px;">

      <!--Fantail Pigeon-->

      <div class="container">
        <div class="content">
          <!-- <p style="font-size: 35px;"><strong>Fantail Pigeon</strong></p> -->
          <h2>Fantail Pigeon</h2>
          <p style="text-align: justify; ">
            The Fantail Pigeon is a popular breed known for its unique physical features and graceful appearance. It is
            widely recognized for its distinct fan-shaped tail, which consists of long, well-spread feathers.
            Originating from India, the Fantail Pigeon has gained popularity worldwide, including in Bangladesh, for its
            beauty and elegance. One of the most striking features of the Fantail Pigeon is its tail. The tail is
            composed of approximately 30 to 40 long, narrow feathers that are carried in a fanned-out manner. This tail
            structure gives the breed its name and is highly valued in exhibition and show competitions. The feathers of
            the tail can come in various colors, including white, black, red, yellow, and blue, with different patterns
            and markings. Apart from its unique tail, the Fantail Pigeon has a compact and rounded body. It has a small
            to medium-sized head, a short beak, and bright, alert eyes. The breed comes in a wide range of colors and
            patterns, including solid colors, pied (multi-colored patches), and spangled (small speckles or dots).
            Fantail Pigeons are known for their graceful and gentle nature. They are calm and docile birds, making them
            suitable for keeping as pets or for exhibition purposes. They are not particularly vocal compared to some
            other pigeon breeds. In terms of care and maintenance, Fantail Pigeons require a clean and spacious loft or
            cage that provides them with adequate space to move around and stretch their wings. They should have access
            to fresh water and a well-balanced diet consisting of pigeon feed, grains, and occasional supplements.
            Breeding Fantail Pigeons requires careful selection of healthy and high-quality breeding pairs. The eggs
            usually hatch after an incubation period of about 17 to 18 days. The young chicks are initially looked after
            by their parents and are ready to leave the nest around four weeks of age. Fantail Pigeons are primarily
            bred for exhibition and show purposes, where their unique tail and overall beauty are highly prized.
            Breeders and enthusiasts often participate in pigeon shows and competitions to showcase their birds and
            compete for awards based on the birds' physical attributes, including the tail display, color, and overall
            conformation. Overall, the Fantail Pigeon is a captivating breed admired for its striking appearance and
            graceful demeanor. Its distinct fan-shaped tail and gentle nature make it a favorite among pigeon
            enthusiasts and breeders in Bangladesh and around the world.
          </p>
        </div>
        <div class="image">
          <img style="height: 420px;width: 620px;margin-top: 30px;" src="farmingSector/fantail_pigeon.jpg"
            alt="Fantail Pigeon">
        </div>
      </div>
      <br>

      <!--Homing Pigeon-->

      <div class="container">
        <div class="content">
          <!-- <p style="font-size: 35px;"><strong>Homing Pigeon</strong></p> -->
          <h2>Homing Pigeon</h2>
          <p style="text-align: justify;">
            Homing Pigeons, also known as Carrier Pigeons, are a special breed of pigeons known for their exceptional
            homing instinct and ability to return to their loft from distant locations. They have been used for
            centuries as messengers and are known for their remarkable navigation skills. Homing Pigeons have played
            significant roles in various historical events, including wartime communication and long-distance races.
            Homing Pigeons have a medium-sized, compact body with strong wings and a streamlined shape, enabling them to
            fly at high speeds. They have a unique sense of direction, which allows them to find their way home even
            when released from unfamiliar locations. Scientists believe that they use a combination of visual cues, the
            Earth's magnetic field, and their olfactory senses to navigate. These pigeons are highly intelligent and
            trainable. They are known to form strong bonds with their loft and recognize it as their home. To enhance
            their homing abilities, pigeons are often subjected to training and conditioning exercises. These exercises
            involve gradually increasing the distance from which the pigeons are released, allowing them to develop
            their navigational skills and gradually build up endurance for long flights. Homing Pigeons are typically
            used in races and competitions. In these events, pigeons are transported to a specific location and released
            simultaneously. The pigeon that returns to its loft in the shortest time is declared the winner. Races can
            range from short distances of a few kilometers to long distances exceeding hundreds of kilometers. Proper
            care and maintenance are crucial for the well-being and performance of Homing Pigeons. They require a clean
            and spacious loft equipped with nesting boxes, perches, and adequate ventilation. A nutritious diet that
            includes a mixture of grains, seeds, and minerals is essential to keep them in optimal health. Regular
            training, exercise, and monitoring of their overall condition are also important aspects of their care.
            Homing Pigeons have played a significant role in military communication, especially during times when
            traditional means of communication were compromised. They have been used to deliver messages across enemy
            lines and provide crucial information during conflicts. Today, while modern communication methods have
            largely replaced the use of pigeons as messengers, the sport of pigeon racing still enjoys popularity
            worldwide. Homing Pigeons continue to captivate enthusiasts with their remarkable abilities and serve as a
            testament to the extraordinary bond between humans and these intelligent birds.
          </p>
        </div>
        <div class="image">
          <img style="height: 420px;width: 620px;margin-top: 30px;" src="farmingSector/homing_pigeon.jpg"
            alt="Homing Pigeon">
        </div>
      </div>
      <br>

      <!--Jacobin Pigeon-->

      <div class="container">
        <div class="content">
          <!-- <p style="font-size: 35px;"><strong>Jacobin Pigeon</strong></p> -->
          <h2>Jacobin Pigeon</h2>
          <p style="text-align: justify;">
            The Jacobin Pigeon is a distinct and visually striking breed known for its unique head crest. Originating
            from Asia, particularly India and Pakistan, the Jacobin Pigeon is highly regarded for its ornamental appeal
            and elegant appearance. It belongs to the family of domesticated pigeons and is one of the many breeds
            selectively bred for specific characteristics. The most distinctive feature of the Jacobin Pigeon is its
            head crest. The crest consists of elongated feathers that form a voluminous, ruffled hood around the
            pigeon's head. The feathers of the crest can come in various colors, including white, black, red, yellow,
            and blue, with different patterns and markings. The crest is typically larger in males than females and adds
            to the breed's overall charm and beauty. Along with its prominent crest, the Jacobin Pigeon has a compact
            and slender body. It has a medium-sized head, a short beak, and bright, expressive eyes. The breed comes in
            a wide range of colors and patterns, allowing for diverse combinations and variations. Jacobin Pigeons have
            a calm and gentle temperament, making them suitable for keeping as pets or for exhibition purposes. They are
            not particularly vocal compared to some other pigeon breeds. Their graceful demeanor and striking appearance
            make them popular among pigeon enthusiasts and breeders. Proper care and maintenance are essential for the
            well-being of Jacobin Pigeons. They require a clean and spacious loft or cage that provides them with enough
            space to move around comfortably. Regular cleaning of the living area is necessary to maintain good hygiene.
            Fresh water should always be available, and a well-balanced diet consisting of pigeon feed, grains, and
            occasional supplements is recommended. Breeding Jacobin Pigeons requires careful selection of healthy and
            high-quality breeding pairs. The eggs usually hatch after an incubation period of about 17 to 19 days. The
            young chicks are initially cared for by their parents and gradually become independent as they grow. The
            distinctive crest starts to develop as the chicks mature. Jacobin Pigeons are primarily bred for exhibition
            and show purposes, where their unique head crest and overall elegance are highly valued. Breeders and
            enthusiasts often participate in pigeon shows and competitions to showcase their birds and compete for
            awards based on the birds' physical attributes, including the crest display, color, and overall
            conformation. Overall, the Jacobin Pigeon is an enchanting breed admired for its exquisite appearance and
            gentle nature. Its distinctive head crest and elegant presence make it a favorite among pigeon enthusiasts
            and breeders in Bangladesh and around the world.
          </p>
        </div>
        <div class="image">
          <img style="height: 420px;width: 620px;margin-top: 30px;" src="farmingSector/jacobin_pigeon.jpg"
            alt="Jacobin Pigeon">
        </div>
      </div>
      <br>

      <!--King Pigeon-->

      <div class="container">
        <div class="content">
          <!-- <p style="font-size: 35px;"><strong>King Pigeon</strong></p> -->
          <h2>King Pigeon</h2>
          <p style="text-align: justify;">
            The King Pigeon, also known as the "Raja Kabootar" or "Raja Titar," is a majestic breed of domestic pigeon
            known for its large size and regal appearance. Originating from Asia and Europe, the King Pigeon has become
            popular worldwide, including in Bangladesh, for its impressive size and striking presence. The King Pigeon
            is known for its robust build and elegant posture. It has a broad, muscular chest, a strong neck, and a
            well-proportioned body. The breed comes in various colors and patterns, including solid colors, pied
            (multi-colored patches), and barred patterns. The plumage can exhibit shades of white, black, blue, red, and
            more, creating a visually captivating bird. One of the defining features of the King Pigeon is its size. It
            is considered one of the largest domestic pigeon breeds, with some individuals reaching lengths of up to 30
            centimeters (12 inches) or more. The impressive size, coupled with its proud carriage and regal bearing,
            adds to the breed's allure. King Pigeons have a calm and gentle temperament, making them suitable for
            keeping as pets or for exhibition purposes. They are not particularly vocal compared to some other pigeon
            breeds. Their dignified presence and majestic appearance make them a favorite among pigeon enthusiasts and
            breeders. Proper care and maintenance are essential for the well-being of King Pigeons. They require a clean
            and spacious loft or cage that provides them with enough space to move around comfortably. Regular cleaning
            of the living area is necessary to maintain good hygiene. Fresh water should always be available, and a
            well-balanced diet consisting of pigeon feed, grains, and occasional supplements is recommended. Breeding
            King Pigeons requires careful selection of healthy and high-quality breeding pairs. The eggs usually hatch
            after an incubation period of about 17 to 19 days. The young chicks are initially cared for by their parents
            and gradually become independent as they grow. The plumage of the young birds starts to develop and showcase
            their unique colors and patterns. King Pigeons are often bred for exhibition and show purposes, where their
            impressive size and regal appearance are highly valued. Breeders and enthusiasts frequently participate in
            pigeon shows and competitions to showcase their birds and compete for awards based on the birds' physical
            attributes, including size, color, and overall conformation. Overall, the King Pigeon is a magnificent breed
            admired for its impressive size and dignified nature. Its regal appearance and majestic presence make it a
            sought-after breed among pigeon enthusiasts and breeders in Bangladesh and around the world.
          </p>
        </div>
        <div class="image">
          <img style="height: 420px;width: 620px;margin-top: 30px;" src="farmingSector/king_pigeon.jpg"
            alt="King Pigeon">
        </div>
      </div>
      <br>

      <!--Pouter Pigeon-->

      <div class="container">
        <div class="content">
          <!-- <p style="font-size: 35px;"><strong>Pouter Pigeon</strong></p> -->
          <h2>Pouter Pigeon</h2>
          <p style="text-align: justify;">
            The Pouter Pigeon is a distinctive breed known for its exaggerated features and unique body structure.
            Originating from Europe, this breed has captured the fascination of pigeon enthusiasts worldwide, including
            in Bangladesh, for its striking appearance and elegant demeanor. Pouter Pigeons are characterized by their
            elongated, inflated crop, which gives them a pronounced and distinctive chest. The breed's name "Pouter"
            refers to their ability to puff out their crop, creating an impressive display during courtship or when
            showing off to rivals. This unique feature sets them apart from other pigeon breeds. Pouter Pigeons come in
            a variety of colors and patterns, including solid colors, pied (multi-colored patches), and laced patterns.
            Their plumage can exhibit shades of white, black, blue, red, and more, with striking color combinations that
            add to their allure. In addition to their elongated crop, Pouter Pigeons have a slender body, a long neck,
            and a small head. They have a gentle and calm temperament, making them suitable for keeping as pets or for
            exhibition purposes. While they are not particularly vocal, their elegant appearance and distinct features
            make them an appealing choice for pigeon enthusiasts. Proper care and attention are important for the
            well-being of Pouter Pigeons. They require a clean and spacious loft or cage that allows them enough space
            to stretch their wings. Regular cleaning of the living area is necessary to maintain good hygiene. Fresh
            water should always be available, and a well-balanced diet consisting of pigeon feed, grains, and occasional
            supplements is recommended. Breeding Pouter Pigeons requires careful selection of healthy and high-quality
            breeding pairs. The eggs usually hatch after an incubation period of about 17 to 19 days. The young chicks
            are initially cared for by their parents and gradually become independent as they grow. As they mature,
            their unique features and striking appearance start to become more pronounced. Pouter Pigeons are often bred
            for exhibition and show purposes, where their exaggerated crop and elegant body structure are highly valued.
            Breeders and enthusiasts frequently participate in pigeon shows and competitions to showcase their birds and
            compete for awards based on the birds' physical attributes, including the crop display, color, and overall
            conformation. Overall, the Pouter Pigeon is a captivating breed admired for its distinct features and
            graceful nature. Its elongated crop and elegant presence make it a sought-after breed among pigeon
            enthusiasts and breeders in Bangladesh and around the world.
          </p>
        </div>
        <div class="image">
          <img style="height: 420px;width: 510px;margin-top: 30px;" src="farmingSector/pouter_pigeon.jpg"
            alt="Pouter Pigeon">
        </div>
      </div>
      <br>

      <!--Racing Pigeon-->

      <div class="container">
        <div class="content">
          <!-- <p style="font-size: 35px;"><strong>Racing Pigeon</strong></p> -->
          <h2>Racing Pigeon</h2>
          <p style="text-align: justify;">
            The Racing Pigeon, also known as the Homing Pigeon, is a specialized breed that excels in long-distance
            flying and navigation abilities. These pigeons have been selectively bred for their exceptional homing
            instincts, endurance, and speed, making them ideal for competitive racing events.
            Racing Pigeons possess strong muscles, streamlined bodies, and efficient respiratory systems that enable
            them to cover long distances with remarkable speed. They have excellent orientation skills and an innate
            ability to navigate and find their way back to their home loft, even from hundreds of miles away.
            The breed comes in various colors and patterns, including solid colors, pied (multi-colored patches), and
            grizzled patterns. Their plumage can display shades of white, gray, black, brown, and more, often with
            distinctive markings that help identify individual birds.
            To prepare Racing Pigeons for competitions, they undergo rigorous training programs. Training starts from a
            young age, gradually increasing the distance covered until they are ready for long-distance races. Pigeon
            fanciers employ various methods to enhance their birds' racing abilities, such as loft management, selective
            breeding, proper nutrition, and exercise.
            Racing Pigeons require specialized care and attention. They need a well-designed loft equipped with
            comfortable perches, nesting boxes, and proper ventilation to maintain optimal health and well-being.
            Regular exercise and training flights are essential to keep their muscles strong and maintain their flying
            abilities.
            Proper nutrition is crucial for Racing Pigeons to perform at their best. They require a balanced diet
            consisting of high-quality pigeon feed supplemented with grains, seeds, and occasional protein sources.
            Hydration is also vital, and clean, fresh water should be available at all times.
            Racing Pigeon competitions are organized at various levels, from local races to national and international
            events. These races test the birds' speed, endurance, and navigational skills. The pigeons are transported
            to a specific location, and their release triggers the race back to their home lofts. The winning bird is
            determined based on the time it takes to return home.
            Pigeon racing is not only a popular sport but also a hobby enjoyed by many enthusiasts. It fosters a sense
            of camaraderie and healthy competition among pigeon fanciers. The sport requires dedication, knowledge of
            pigeon genetics and training techniques, and a deep appreciation for the incredible abilities of Racing
            Pigeons.
            Overall, Racing Pigeons are highly prized for their exceptional flying capabilities and homing instincts.
            Their remarkable speed, endurance, and navigation skills make them a favored breed for competitive racing
            events and a source of pride for pigeon fanciers in Bangladesh and worldwide.
          </p>
        </div>
        <div class="image">
          <img style="height: 420px;width: 620px;margin-top: 30px;" src="farmingSector/racing_pigeon.jpg"
            alt="Racing Pigeon">
        </div>
      </div>
      <br>


      <!--Tippler Pigeon-->

      <div class="container">
        <div class="content">
          <!-- <p style="font-size: 35px;"><strong>Tippler Pigeon</strong></p> -->
          <h2>Tippler Pigeon</h2>
          <p style="text-align: justify;">The Tippler Pigeon is a unique breed known for its exceptional flying
            endurance and ability to stay airborne for extended periods. Originating from England, this breed has gained
            popularity among pigeon enthusiasts for its remarkable flying skills and beautiful appearance.
            Tippler Pigeons have a medium-sized, slim body with a distinctively long and slender neck. They have
            well-developed flight muscles and strong wings that allow them to fly for extended durations. Unlike racing
            pigeons, Tipplers are not bred for speed but for their ability to maintain sustained flight.
            The breed comes in various colors and patterns, including solid colors, pied (multi-colored patches), and
            mottled patterns. Their plumage can display shades of white, black, red, yellow, and other colors, often
            with eye-catching markings.
            Tippler Pigeons are known for their impressive flying capabilities. They are capable of flying for several
            hours at a stretch, with some individuals recorded to fly for over 20 hours continuously. This endurance is
            achieved through careful breeding and training.
            Flying Tipplers requires specialized care and attention. They need a spacious and well-ventilated loft that
            allows them to exercise their wings freely. The loft should be equipped with perches, nesting boxes, and a
            safe landing area. Regular exercise and training flights are crucial to maintain their flying abilities.
            Proper nutrition is essential for Tippler Pigeons to support their endurance flying. They require a balanced
            diet consisting of high-quality pigeon feed supplemented with grains, seeds, and occasional protein sources.
            Adequate hydration is also important, and fresh water should be available at all times.
            Tippler Pigeon competitions focus on flying endurance and the duration of flight. Competitors aim to keep
            their pigeons airborne for the longest time possible. The birds are timed from the moment they are released
            until they land or return to their loft. The pigeons with the longest flight durations are declared the
            winners.
            The Tippler Pigeon is not only admired for its flying abilities but also cherished as a pet and exhibition
            bird. Its elegant appearance, unique flight style, and gentle temperament make it a favorite among pigeon
            fanciers.
            Pigeon enthusiasts who keep Tippler Pigeons often form clubs and associations to share knowledge, exchange
            breeding stock, and organize competitions and exhibitions. These events provide a platform for showcasing
            the breed's flying skills and promoting camaraderie among fanciers.
            Overall, the Tippler Pigeon is a captivating breed admired for its extraordinary flying endurance and
            graceful appearance. Its ability to stay airborne for extended periods and its striking plumage make it a
            prized possession among pigeon enthusiasts in Bangladesh and worldwide.</p>
        </div>
        <div class="image">
          <img style="height: 420px;width: 620px;margin-top: 30px;" src="farmingSector/tippler_pigeon.jpg"
            alt="Tippler Pigeon">
        </div>
      </div>
      <br>

      <!--Tumbler Pigeon-->

      <div class="container mb-5">
        <div class="content">
          <!-- <p style="font-size: 35px;"><strong>Tumbler Pigeon</strong></p> -->
          <h2>Tumbler Pigeon</h2>
          <p style="text-align: justify;">The Tumbler Pigeon is a fascinating breed known for its unique tumbling flight
            behavior. Originating from various parts of the world, including Europe and the Middle East, Tumbler Pigeons
            have captured the attention of pigeon enthusiasts for their acrobatic flying skills and distinctive
            appearance.
            Tumbler Pigeons have a compact and muscular body with a short neck. They have broad wings and a strong
            chest, which enables them to perform intricate aerial maneuvers. What sets them apart is their ability to
            tumble or flip backward in mid-air, exhibiting stunning somersaults during flight.
            The breed comes in a wide variety of colors, patterns, and markings. Their plumage can display a range of
            shades, including white, black, red, yellow, and many other vibrant colors. Some Tumblers also exhibit
            attractive patterns such as bars, checks, or mottling.
            Tumbler Pigeons are known for their acrobatic flying displays. They perform a series of flips or tumbles
            during flight, demonstrating their agility and coordination. These maneuvers are believed to be a result of
            selective breeding for specific flying traits over generations.
            Proper housing and care are essential for Tumbler Pigeons. They require a well-ventilated loft or aviary
            that provides ample space for flying and exercising their aerial skills. The enclosure should be secure to
            prevent escapes and protect the birds from predators.
            Tumbler Pigeons thrive on a balanced diet consisting of high-quality pigeon feed supplemented with grains,
            seeds, and occasional protein sources. Fresh water should always be available for hydration. Regular
            exercise and flight training are crucial to maintain their flying abilities and overall health.
            Tumbler Pigeon competitions focus on the quality and execution of their tumbling flights. Judges assess the
            birds based on the height, style, frequency, and synchronization of the tumbles performed. The pigeons that
            demonstrate the most impressive and consistent tumbling skills receive top honors.
            Beyond their flying prowess, Tumbler Pigeons are also cherished as pets and exhibition birds. Their
            captivating aerial displays and vibrant plumage make them a popular choice among pigeon fanciers and
            collectors.
            Pigeon clubs and associations often organize shows and exhibitions where Tumbler Pigeon enthusiasts can
            showcase their birds and share their passion with others. These events provide opportunities to appreciate
            the breed's unique abilities and foster camaraderie among pigeon fanciers.
            Overall, the Tumbler Pigeon is a captivating breed admired for its acrobatic tumbling flights and striking
            appearance. Its ability to perform mid-air flips and its colorful plumage make it a cherished breed among
            pigeon enthusiasts in Bangladesh and around the world.</p>
        </div>
        <div class="image">
          <img style="height: 420px;width: 620px;margin-top: 30px;" src="farmingSector/tumbler_pigeon.jpg"
            alt="Tumbler Pigeon">
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