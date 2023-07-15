<?php
//connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "agrobd";

$conn = mysqli_connect($servername, $username, $password, $database);

//die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}


  //Import PHPMailer classes into the global namespace
  //These must be at the top of your script, not inside a function
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  //Load Composer's autoloader
  require 'vendor/autoload.php';

  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);

  try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'teamorion0007@gmail.com';
    $mail->Password   = 'ibasgscvzvqwnfbw';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;


    $email_r = $_POST['email_r'];
    $sql = "SELECT * FROM `user` WHERE `email` LIKE '$email_r' AND `verify` LIKE 'true' ";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
      $user_password = $row['password'];
    } 


    //Recipients
    $mail->setFrom('teamorion0007@gmail.com', 'Agro Bd');
    $mail->addAddress($email_r);

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Agro-Bd Account Password';
    $mail->Body    = 'Your password is: <b>'.$user_password.'</b>';
    

    $mail->send();
    echo '
      <!doctype html>
      <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Email Verification</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        </head>
        <body>
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                Agro Bd
              </a>
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="https://localhost/AgroBDc/Agro-Bd-1/index.php">Home</a>
                </li>
              </ul>
            </div>
          </nav>

          <div class="b-example-divider"></div>
          <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-lg-5 py-5">
              <div class="col-lg-7 text-center mx-auto">
                <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">An email with your password has been sent to your inbox. Sign in with your email and password to access your account</h1>
              </div>
            </div>
          </div>




          <footer class="py-5 text-center text-body-secondary bg-body-tertiary">
            <p>Be A Farmer. Work Hard Success..</p>
            <p class="mb-0">
              <a href="#">Back to top</a>
            </p>
          </footer>

            
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        </body>
      </html>';
  } 
  catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
?>