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
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
</ul>
</div>
</nav>

<div class="b-example-divider"></div>
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Password Recovery: Reset Your Account Password</h1>
        <p class="col-lg-10 fs-4">An email with your password has been sent to your inbox. Please enter the code to activate your account.</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form action=" php_mailer/pass_recovery.php " method="post" class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="*****" name="email_r">
            <label for="floatingInput">Enter the email associated with your account to log in.</label>
          </div>

          <button class="w-100 btn btn-lg btn-primary" name="recovery_email_submit" type="submit">Sign up</button>

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
</html>