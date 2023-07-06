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

  
</head>

<body>
  <!-- css first -->
  <script>0</script>

  <!-- Header -->
  <?php require 'partials/_header.php'?>

  <!-- body -->
  <div class="container my-5 text-center"> <!-- Added text-center class -->
      <div class="d-sm-flex flex-sm-column align-items-center"> <!-- Added align-items-center class -->
        <h1 class="section-header landing-section-title title-font">
          Our Blog
        </h1>
        <div class="landing-section-content my-2">
          <div>Explore our latest articles and stay up-to-date with our informative blog posts.</div>
          
        </div>
       

        
      </div>
    </div>

  <div class="container-fluid">
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
                <p class='card-text' style='text-align: center;font-weight: bold;'>" . $row['name'] . "</p>
              <div class='card-body'>
                
                <div id='fullStory".$sno."' style='display: none;'>" . $row['stories'] . "</div>
                <button class='btn btn-primary' onclick='showFullStory(".$sno.")' id='seeMoreBtn".$sno."'>See More</button>
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
    function showFullStory(sno) {
      var fullStoryDiv = document.getElementById('fullStory' + sno);
      var seeMoreBtn = document.getElementById('seeMoreBtn' + sno);

      if (fullStoryDiv.style.display === 'none') {
        fullStoryDiv.style.display = 'block';
        seeMoreBtn.innerText = 'See Less';
      } else {
        fullStoryDiv.style.display = 'none';
        seeMoreBtn.innerText = 'See More';
      }
    }
  </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
 

</html>