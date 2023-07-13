<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verify Email</title>
</head>
<body>

  <h1>Verify Email</h1>

  <?php

  if (isset($_GET['token'])) {
    // Check if the token is valid.
    $token = $_GET['token'];
    $email_verification_token = generate_email_verification_token();
    if ($token == $email_verification_token) {
      // The token is valid, so verify the email address.
      $email = $_GET['email'];
      $verified = 1;
      update_email_verification_status($email, $verified);

      // Redirect the user to the home page.
      header('Location: index.php');
    } else {
      // The token is invalid, so show an error message.
      echo 'The token is invalid.';
    }
  } else {
    // The token is not set, so show an error message.
    echo 'The token is not set.';
  }

  ?>

</body>
</html>
