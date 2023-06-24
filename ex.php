<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Our Team</title>
   <!-- Add your CSS links here -->
   <link rel="stylesheet" href="path/to/bootstrap.min.css">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="css/footer.css" />
   <link rel="stylesheet" href="css/headerNestedDropdown.css" />
</head>

<body class="main-layout">
   <header>
      <?php require 'partials/_header.php' ?>
   </header>

   <div class="about">
      <div class="container">
         <!-- Rest of your code -->
         <div class="carousel-inner">
            <div class="carousel-item active">
               <!-- First about section content -->
            </div>
            <div class="carousel-item">
               <!-- Second about section content -->
            </div>
            <div class="carousel-item">
               <!-- Third about section content -->
            </div>
         </div>
      </div>
   </div>

   <!-- Add your footer content here -->

   <!-- Add your JavaScript links here -->
   <script src="path/to/jquery.min.js"></script>
   <script src="path/to/bootstrap.min.js"></script>
   <script>
      $(document).ready(function() {
         // Initialize the carousel
         $('#myCarousel').carousel();
      });
   </script>
</body>

</html>
