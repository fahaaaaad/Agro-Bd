<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog</title>
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
    .bg-image {
      background-image: url("images/5104194.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
</head>

<body>
  <!-- css first -->
  <script>0</script>

  <!-- Header -->
  <?php require 'partials/_header.php'?>

  <!-- body -->

  <div class="px-4 py-3 text-center bg-image">
    <h1 class="display fw-bold text-body-emphasis">Our Blog</h1>
    <div class="row" style="justify-content: center;">
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

                            <div class='d-flex justify-content-between align-items-center'>
                                                            <div class='d-flex justify-content-between align-items-center'>
                                <div class='btn-group'>
                                    <button type='button' class='btn btn-sm btn-outline-secondary view-more'>View more</button>
                                </div>
                            </div>
                            <div class='see-less d-none'>
                                <p class='card-text'>"  . $row['stories'] . "</p>
                                <button type='button' class='btn btn-sm btn-outline-secondary see-less-btn'>See less</button>
                            </div>
                        </div>
                    </div>
                </div>
              </div>";
        }
        mysqli_close($conn);
      ?>
    </div>
  </div>

  <!-- footer -->
  <?php require 'partials/_footer.php'?>

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
    let current_url = document.location;
    document.querySelectorAll(".navbar .color").forEach(function (e) {
      if (e.href == current_url) {
        e.classList += " current";
      }
    });
  </script>

</body>

</html>

