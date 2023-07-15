<?php
// Start session
session_start();

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

// Send data to the database
if (isset($_POST['signUp'])) {
    $name = $_POST['full_name_s'];
    $username = $_POST['username_s'];
    $email = $_POST['email_s'];
    $mobile = $_POST['mobile_s'];
    $password = $_POST['password_s'];
    $account_type = $_POST['flexRadioDefault_s'];
    $Verify_token = random_int(100000, 999999);

    // Email Exists or not
    $sql = "SELECT * FROM `user` WHERE `email` = '$email' AND `Verify` = 'true'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    
    if ($num > 0) {
        header("Location: https://localhost/AgroBDc/Agro-Bd-1/index.php?email_exists=true");
        exit;
    } else {
        // Insert user data
        $sql = "INSERT INTO `user` (`user_id`, `name`, `username`, `email`, `mobile`, `account_type`, `interest`, `photo`, `password`, `Verify_token`, `created_at`) VALUES (NULL, '$name', '$username', '$email', '$mobile', '$account_type', NULL, NULL, '$password', '$Verify_token', current_timestamp()) ";
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            $_SESSION['user_id'] = mysqli_insert_id($conn);
        } else {
            echo "Please try again after sometime!";
        }
    }
}

// Making verification update
if (isset($_POST['verify_submit'])) {
    $verification_code = $_POST['verification_code'];
    $user_id = $_SESSION['user_id']; // Retrieve user_id from session
    $sql = "SELECT * FROM `user` WHERE `user_id` = '{$_SESSION['user_id']}' AND `Verify_token` = '$verification_code'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $sql = "UPDATE `user` SET `verify` = 'true' WHERE `user_id` = '$user_id'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            // Verification successful, perform additional actions if needed
            header("Location: https://localhost/AgroBDc/Agro-Bd-1/index.php?verification_success=true");
            exit;
        }
    }
}

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'teamorion0007@gmail.com';
    $mail->Password   = 'ibasgscvzvqwnfbw';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    //Recipients
    $mail->setFrom('teamorion0007@gmail.com', 'Agro Bd');
    $mail->addAddress($email); //Add a recipient

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is your 6 digit verification code: <b>' . $Verify_token . '</b>';

    $mail->send();

    // Display the verification form
    echo '<!doctype html>
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
                  <div class="col-lg-7 text-center text-lg-start">
                      <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Verify Your Email Address to Complete Registration</h1>
                      <p class="col-lg-10 fs-4">An email with a verification code has been sent to your inbox. Please enter the code to activate your account.</p>
                  </div>
                  <div class="col-md-10 mx-auto col-lg-5">
                      <form action="" method="post" class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
                          <div class="form-floating mb-3">
                              <input type="text" name="verification_code" class="form-control" id="floatingInput" placeholder="*****">
                              <label for="floatingInput">Please Enter your verification code</label>
                          </div>
                          <button class="w-100 btn btn-lg btn-primary" name="verify_submit" type="submit">Submit</button>
                          <hr class="my-4">
                          <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
                      </form>
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

