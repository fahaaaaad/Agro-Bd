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
    </nav>




    <!-- body -->
    <div style="margin-top:65px; margin-bottom:65px;">

      <!--Infectious Diseases-->

      <div class="container mb-5" style="text-align: justify; max-width:1400px; margin-left:auto; margin-right:auto;">
        <div class="content">
          <!-- <p style="font-size: 30px;"><strong>Infectious Diseases</strong></p> -->
          <h2 class="mb-4" style="max-width:1400px; margin-left:auto; margin-right:auto;">Infectious Diseases</h2>
          <p style="text-align: justify; ">
            <strong>1. Foot-and-Mouth Disease (FMD):</strong> Foot-and-Mouth Disease is a highly contagious viral
            disease that affects cloven-hoofed animals, including goats. It is characterized by fever, blisters, and
            erosions in the mouth, on the feet, and sometimes on the udder. FMD can cause severe economic losses due to
            decreased milk production and weight loss in affected animals. Strict biosecurity measures and vaccination
            programs are essential for prevention and control.
            <br><br>
            <strong>2. Caseous Lymphadenitis (CL):</strong> Caseous Lymphadenitis is a chronic bacterial infection
            caused by Corynebacterium pseudotuberculosis. It primarily affects the lymph nodes, causing abscesses that
            contain thick, cheesy pus. CL can result in reduced productivity, weight loss, and increased mortality in
            goats. The disease is transmitted through direct contact with infected animals or contaminated environments.
            Strict hygiene practices and culling of affected animals are common control measures.
            <br><br>
            <strong>3. Johne's Disease:</strong> Johne's Disease, or Paratuberculosis, is a chronic bacterial infection
            caused by Mycobacterium avium subspecies paratuberculosis (MAP). It affects the intestines of goats, leading
            to chronic diarrhea, weight loss, and reduced milk production. Infected animals shed the bacteria in their
            feces, and transmission occurs primarily through ingestion of contaminated feed or water. Control measures
            include herd testing, culling of infected animals, and improved management practices.
            <br><br>
            <strong>4. Contagious Ecthyma (Orf):</strong> Contagious Ecthyma, also known as Orf or Soremouth, is a viral
            skin infection caused by the Orf virus. It is characterized by the formation of scabby, crusty lesions on
            the lips, mouth, and sometimes udder or feet of goats. Orf is highly contagious and can be transmitted
            through direct contact with infected animals or contaminated objects. Good hygiene practices and vaccination
            can help prevent the spread of the disease.
            <br><br>
            <strong>5. Goat Pox:</strong> Holsteins are adaptable to various climates and management systems. They can
            be found in dairy farms around the world due to their versatility and adaptability.
          </p>

        </div>


        <!--Reproductive Diseases-->

        <div class="content">
          <!-- <p style="font-size: 30px;"><strong>Reproductive Diseases</strong></p> -->
          <h2 class="mb-4" style="max-width:1400px; margin-left:auto; margin-right:auto;">Reproductive Diseases</h2>
          <p style="text-align: justify; ">
            <strong>1. Caprine Arthritis Encephalitis (CAE):</strong> Caprine Arthritis Encephalitis is a viral disease
            that affects goats' joints and nervous system. It is caused by the Caprine Arthritis Encephalitis Virus
            (CAEV). Infected goats may exhibit lameness, joint swelling, and neurological symptoms. CAE is primarily
            transmitted through ingestion of colostrum or milk from infected does to their offspring. Prevention
            involves testing and segregating infected animals, avoiding sharing of needles or equipment, and using
            heat-treated colostrum for newborn kids.<br><br>
            <strong>2. Brucellosis:</strong> Brucellosis is a bacterial disease caused by various species of Brucella
            bacteria. It can lead to reproductive problems in goats, including abortions, stillbirths, and reduced
            fertility. Infected goats may also develop udder infections. Brucellosis can be transmitted through contact
            with infected animals or consumption of contaminated milk or meat. Control measures include regular testing,
            culling of infected animals, and proper biosecurity practices.<br><br>
            <strong>3. Campylobacteriosis:</strong> Campylobacteriosis, also known as Vibriosis, is a bacterial
            infection that primarily affects the reproductive organs of goats. It can result in infertility, abortions,
            and weak or stillborn kids. The Campylobacter bacteria are transmitted through mating, contaminated
            equipment, or infected material. Control measures involve isolation of infected animals, antibiotic
            treatment, and improved hygiene practices.<br><br>
            <strong>4. Toxoplasmosis:</strong> Toxoplasmosis is a parasitic disease caused by the Toxoplasma gondii
            parasite. It can cause abortions, stillbirths, and congenital abnormalities in goat kids. Goats become
            infected by ingesting oocysts from contaminated feed, water, or soil. Prevention includes proper management
            of feed and water sources, keeping goats away from contaminated areas, and avoiding contact with infected
            animals or their feces.<br><br>
            <strong>5. Mastitis:</strong> Mastitis is an inflammation of the mammary gland in goats, usually caused by
            bacterial infection. It can lead to reduced milk production, changes in milk quality, and discomfort for the
            goat. Mastitis can be caused by various bacteria and is often associated with poor hygiene, inadequate
            milking practices, or injury to the udder. Prevention involves proper sanitation, regular udder health
            checks, and prompt treatment of any infections.
          </p>
        </div>



        <!--Metabolic and Nutritional Diseases-->

        <div class="content">
          <!-- <p style="font-size: 30px;"><strong>Metabolic and Nutritional Diseases</strong></p> -->
          <h2 class="mb-4" style="max-width:1400px; margin-left:auto; margin-right:auto;">Metabolic and Nutritional
            Diseases</h2>
          <p style="text-align: justify; ">
            <strong>1. Ketosis:</strong> Ketosis, also known as pregnancy toxemia, is a metabolic disorder that commonly
            occurs in pregnant or lactating goats. It is characterized by an inadequate supply of glucose, leading to
            the production of ketone bodies. Goats with ketosis may exhibit reduced appetite, weight loss, and
            neurological symptoms. Proper nutrition and monitoring of body condition score are essential for
            prevention.<br><br>
            <strong>2. Acidosis:</strong> Acidosis is a metabolic disorder caused by an imbalance in rumen pH. It occurs
            when goats consume excessive amounts of grain or other highly fermentable carbohydrates. Acidosis can result
            in reduced feed intake, diarrhea, and lameness. Prevention involves proper diet management, gradual
            adaptation to high-energy feeds, and providing a balanced diet.<br><br>
            <strong>3. Enterotoxemia:</strong> Enterotoxemia, also known as overeating disease, is caused by the
            bacterium Clostridium perfringens. It primarily affects young goats and is characterized by sudden death,
            diarrhea, and abdominal pain. Enterotoxemia can be prevented through proper vaccination, gradual diet
            changes, and avoiding overfeeding.<br><br>
            <strong>4. Hypocalcemia (Milk Fever):</strong> Hypocalcemia is a metabolic disorder that occurs around the
            time of kidding. It is characterized by low blood calcium levels and can lead to muscle weakness, reduced
            milk production, and other complications. Adequate calcium supplementation and proper diet management are
            crucial preventive measures.<br><br>
            <strong>5. Copper Deficiency:</strong> Copper deficiency is a nutritional disorder that can affect goats,
            leading to poor growth, anemia, and reproductive problems. It is caused by insufficient dietary intake of
            copper or an imbalance in copper metabolism. Providing a balanced diet and ensuring proper copper
            supplementation are necessary for prevention and management.
          </p>
        </div>





        <!--Respiratory Diseases-->

        <div class="content">
          <!-- <p style="font-size: 30px;"><strong>Respiratory Diseases</strong></p> -->
          <h2 class="mb-4" style="max-width:1400px; margin-left:auto; margin-right:auto;">Respiratory Diseases</h2>
          <p style="text-align: justify; ">
            <strong>1. Pneumonia:</strong> Pneumonia is a common respiratory disease in goats caused by various
            bacterial, viral, or fungal pathogens. It is characterized by inflammation and infection of the lungs,
            leading to coughing, difficulty breathing, fever, and reduced appetite. Good ventilation, proper hygiene,
            and vaccination can help prevent pneumonia.<br><br>
            <strong>2. Contagious Caprine Pleuropneumonia (CCPP):</strong> CCPP is a highly contagious respiratory
            disease caused by the bacterium Mycoplasma capricolum subsp. capripneumoniae. It primarily affects goats and
            can result in severe respiratory distress, coughing, and high mortality rates. Quarantine, testing, and
            culling of infected animals are important control measures.<br><br>
            <strong>3. Nasal Bots:</strong> Nasal bots are the larvae of the bot fly that infest the nasal passages of
            goats. Infestation can lead to nasal irritation, sneezing, and respiratory discomfort. Regular cleaning of
            the nasal passages and proper parasite control can help prevent nasal bot infestation.<br><br>
            <strong>4. Contagious Ovine/ Caprine Pleuropneumonia (COPP):</strong> COPP is a contagious respiratory
            disease caused by the bacterium Mannheimia haemolytica. It primarily affects sheep but can also infect
            goats. It leads to severe pneumonia, difficulty breathing, and high mortality rates. Vaccination and
            quarantine measures can aid in disease prevention.<br><br>
            <strong>5. Enzootic Nasal Tumors:</strong> Enzootic nasal tumors, also known as enzootic nasal
            adenocarcinoma, is a viral disease that affects goats' nasal passages. It is caused by a retrovirus and can
            lead to the formation of tumors, nasal discharge, and breathing difficulties. Prevention involves isolating
            affected animals and controlling the spread of the virus.
          </p>
        </div>





        <!--Skin Diseases-->

        <div class="content">
          <!-- <p style="font-size: 30px;"><strong>Skin Diseases</strong></p> -->
          <h2 class="mb-4" style="max-width:1400px; margin-left:auto; margin-right:auto;">Skin Diseases</h2>
          <p style="text-align: justify; ">
            <strong>1. Ringworm:</strong> Ringworm is a fungal infection that affects the skin of goats, causing
            circular, scaly lesions. It is highly contagious and can spread through direct contact or contaminated
            objects. Treatment typically involves antifungal medications and good hygiene practices.<br><br>
            <strong>2. Mange:</strong> Mange is a parasitic skin disease caused by mites. It leads to intense itching,
            hair loss, and thickened or crusted skin. Different types of mange mites can affect goats, such as sarcoptic
            mange and demodectic mange. Treatment includes acaricides and proper sanitation measures.<br><br>
            <strong>3. Dermatitis:</strong> Dermatitis refers to inflammation of the skin and can have various causes,
            including allergies, irritants, or infections. It can result in redness, swelling, itching, and lesions on
            the skin. Identifying and addressing the underlying cause is crucial for effective treatment.<br><br>
            <strong>4. Fleece Rot:</strong> Fleece rot is a bacterial infection that affects the wool or fleece of
            goats. It occurs in damp or humid conditions and leads to matting, discoloration, and a foul odor. Good
            husbandry practices, such as proper shearing and keeping animals dry, can help prevent fleece rot.<br><br>
            <strong>5. Photosensitivity:</strong> Photosensitivity is a condition where the skin becomes sensitive to
            sunlight. It can be caused by ingesting certain plants, medications, or a liver disorder. Affected goats may
            develop redness, swelling, and blisters on exposed skin areas. Avoiding known triggers and providing shade
            can help manage photosensitivity.
          </p>
        </div>




        <!--Parasitic Diseases-->

        <div class="content">
          <!-- <p style="font-size: 30px;"><strong>Parasitic Diseases</strong></p> -->
          <h2 class="mb-4" style="max-width:1400px; margin-left:auto; margin-right:auto;">Parasitic Diseases</h2>
          <p style="text-align: justify; ">
            <strong>1. Gastrointestinal Parasites:</strong> Gastrointestinal parasites, such as worms (e.g., roundworms,
            tapeworms) and coccidia, commonly affect goats. These parasites can cause weight loss, diarrhea, poor
            growth, and anemia. Regular deworming, proper pasture management, and maintaining good hygiene are important
            in preventing and controlling gastrointestinal parasites.<br><br>
            <strong>2. External Parasites:</strong> External parasites include ticks, mites, lice, and fleas that infest
            the skin and hair of goats. They can cause itching, hair loss, skin irritation, and transmit diseases.
            Treatment typically involves using acaricides or insecticides and practicing good hygiene and
            sanitation.<br><br>
            <strong>3. Liver Fluke:</strong> Liver fluke is a common parasitic infection in goats, particularly in wet
            and marshy areas. It is caused by a type of flatworm that affects the liver. Infected goats may exhibit
            symptoms such as weight loss, reduced appetite, anemia, and edema. Treating liver fluke involves using
            anthelmintic medications and improving pasture management.<br><br>
            <strong>4. Sheep and Goat Pox:</strong> Sheep and goat pox are viral diseases that affect small ruminants.
            They cause fever, skin lesions, and respiratory signs. These diseases can spread rapidly among susceptible
            animals and have a significant impact on the health and productivity of goat herds. Vaccination is crucial
            in preventing sheep and goat pox.<br><br>
            <strong>5. Meningeal Worm:</strong> Meningeal worm, also known as brain worm, is a parasitic infection
            transmitted by snails or slugs. It affects the central nervous system of goats, leading to neurological
            symptoms such as incoordination, paralysis, and ultimately, death. Prevention involves controlling
            intermediate hosts and implementing appropriate pasture management practices.
          </p>
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