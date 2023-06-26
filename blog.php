<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/headerNestedDropdown.css" />

    <style>
      .bg-image {
  background-image: url("images/5104194.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  height: 1000px;
}

    </style>
  </head>

  <body>
    <!-- css first -->
    <script>0</script>

    <!-- Header -->
    <?php require 'partials/_header.php' ?>




<div class="px-4 py-3 text-center bg-image">
    <h1 class="display fw-bold text-body-emphasis">Our Blog</h1>
    <div class="row">
        <?php
        include 'partials/_dbconnect.php';

        $sql = "SELECT * FROM `blog`";
        $result = mysqli_query($conn, $sql);
        $sno = 0;

        while ($row = mysqli_fetch_assoc($result)) {
            $sno = $sno + 1;
            if ($sno % 5 == 1) {
                echo "<div class='w-100'></div>";
            }
            echo "<div class='col-lg-2 col-md-4 col-sm-1 mx-2 my-2'>
                    <div class='card shadow-sm'>
                        <img class='bd-placeholder-img card-img-top' width='100%' height='225' src='uploads/".$row['image']."'>
                        <div class='card-body'>
                            <p class='card-text'>" . $row['name'] . "</p>
                            <p class='card-text'>Price: "  . $row['stories'] . "Tk</p>
                            <div class='d-flex justify-content-between align-items-center'>
                                <div class='btn-group'>
                                    <button type='button' class='btn btn-sm btn-outline-secondary view-more'>View more</button>
                                </div>
                            </div>
                            <div class='see-less d-none'>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <button type='button' class='btn btn-sm btn-outline-secondary see-less-btn'>See less</button>
                            </div>
                        </div>
                    </div>
                </div>";
        }

        mysqli_close($conn);
        ?>
    </div>
</div>

    </div>
</div>




















        <!-- footer -->
    <?php require 'partials/_footer.php'?>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const cards = document.querySelectorAll(".card");

        cards.forEach(card => {
            const viewMoreBtn = card.querySelector(".view-more");
            const seeLessSection = card.querySelector(".see-less");
            const seeLessBtn = card.querySelector(".see-less-btn");

            viewMoreBtn.addEventListener("click", () => {
                seeLessSection.classList.remove("d-none");
                viewMoreBtn.classList.add("d-none");
            });

            seeLessBtn.addEventListener("click", () => {
                seeLessSection.classList.add("d-none");
                viewMoreBtn.classList.remove("d-none");
            });
        });
    });
</script>


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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"></script>

  </body>

</html>