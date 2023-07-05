
<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Animal Feed</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/headerNestedDropdown.css" />
  </head>

  <body>

    <!-- Header -->
    <?php require 'partials/_header.php' ?>

    <div class="card bg-dark text-white">
      <img class="card-img" src="poultry.jpg" alt="Card image" style="width: 100%; height: auto; max-height: 500px;">




    </div>

    <div class="container text-center" style="margin-top: 95px; margin-bottom: 200px;" >
      <div class="row">
        <div class="col-8">
          
          <!-- who we are text -->
          <div class="container my-5 text-center"> <!-- Added text-center class -->
            <div class="d-sm-flex flex-sm-column align-items-center"> <!-- Added align-items-center class -->
              <h1 class="section-header landing-section-title title-font">
                Poultry Feeds
              </h1>
      
              <div class="landing-section-content">
                <div>Unlock the potential of your Poultry farm with our comprehensive range of high-quality feeds for efficient
                  and profitable farming. </div>
                <div>Grow your Poultries operation with top-quality feeds tailored for success.</div>
              </div>
            </div>
          </div>
      
      
          <div class="container-fluid">
            <div class="row" style="justify-content: center;">
              <?php
          include 'partials/_dbconnect.php';
      
          $sql = "SELECT * FROM `poultryFeed`";
          $result = mysqli_query($conn, $sql);
          $sno = 0;
      
          while ($row = mysqli_fetch_assoc($result)) {
            $sno = $sno + 1;
            if ($sno % 3 == 1) {
              echo "
                <div class='w-100'></div>";
            }
            echo "<div class='col-md-3 col-sm-1 mx-2 my-2'>
                  <div class='card shadow-sm'>
                    <img class='bd-placeholder-img card-img-top' width='100%' height='155' src='uploads/".$row['image']."'>
                    <div class='card-body'>
                      <p class='card-text'>" . $row['name'] . "</p>
                      <p class='card-text'>Price:"  . $row['price'] . "Tk</p>
      
                    </div>
                  </div>
                </div>";
          }
      
          mysqli_close($conn);
          // echo'src="uploads/<?php echo $row['photo']"';
          ?>
      
            </div>
          </div>
        </div>

        <div class="col-4">
          
          <!-- add to cart and buying info -->
          <div class="container my-5">
            <div class="row g-5" style="justify-content: center;">
              <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                  <span class="text-primary">Your cart</span>
                  <span class="badge bg-primary rounded-pill">3</span>
                </h4>
                <ul class="list-group mb-3">
                  <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                      <h6 class="my-0">Product name</h6>
                      <small class="text-body-secondary">Brief description</small>
                    </div>
                    <span class="text-body-secondary">$12</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                      <h6 class="my-0">Second product</h6>
                      <small class="text-body-secondary">Brief description</small>
                    </div>
                    <span class="text-body-secondary">$8</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                      <h6 class="my-0">Third item</h6>
                      <small class="text-body-secondary">Brief description</small>
                    </div>
                    <span class="text-body-secondary">$5</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
                    <div class="text-success">
                      <h6 class="my-0">Promo code</h6>
                      <small>EXAMPLECODE</small>
                    </div>
                    <span class="text-success">−$5</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between">
                    <span>Total (USD)</span>
                    <strong>$20</strong>
                  </li>
                </ul>
      
                <form class="card p-2">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Promo code">
                    <button type="submit" class="btn btn-secondary">Redeem</button>
                  </div>
                </form>
              </div>
              <div class="container my-5 text-center">
                <h1 class="section-header landing-section-title title-font">
                  Billing address
                </h1>
              </div>
              <div class="col-md-7 col-lg-8">
                <form class="needs-validation was-validated" novalidate="">
                  <div class="row g-3">
                    <div class="col-sm-6">
                      <label for="firstName" class="form-label">First name</label>
                      <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                      <div class="invalid-feedback">
                        Valid first name is required.
                      </div>
                    </div>
      
                    <div class="col-sm-6">
                      <label for="lastName" class="form-label">Last name</label>
                      <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                      <div class="invalid-feedback">
                        Valid last name is required.
                      </div>
                    </div>
      
                    <div class="col-12">
                      <label for="username" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text">@</span>
                        <input type="text" class="form-control" id="username" placeholder="Username" required="">
                        <div class="invalid-feedback">
                          Your username is required.
                        </div>
                      </div>
                    </div>
      
                    <div class="col-12">
                      <label for="email" class="form-label">Email <span class="text-body-secondary">(Optional)</span></label>
                      <input type="email" class="form-control" id="email" placeholder="you@example.com">
                      <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                      </div>
                    </div>
      
                    <div class="col-12">
                      <label for="address" class="form-label">Address</label>
                      <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                      <div class="invalid-feedback">
                        Please enter your shipping address.
                      </div>
                    </div>
      
                    <div class="col-12">
                      <label for="address2" class="form-label">Address 2 <span
                          class="text-body-secondary">(Optional)</span></label>
                      <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                    </div>
      
                    <div class="col-md-5">
                      <label for="country" class="form-label">Country</label>
                      <select class="form-select" id="country" required="">
                        <option value="">Choose...</option>
                        <option>United States</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select a valid country.
                      </div>
                    </div>
      
                    <div class="col-md-4">
                      <label for="state" class="form-label">State</label>
                      <select class="form-select" id="state" required="">
                        <option value="">Choose...</option>
                        <option>California</option>
                      </select>
                      <div class="invalid-feedback">
                        Please provide a valid state.
                      </div>
                    </div>
      
                    <div class="col-md-3">
                      <label for="zip" class="form-label">Zip</label>
                      <input type="text" class="form-control" id="zip" placeholder="" required="">
                      <div class="invalid-feedback">
                        Zip code required.
                      </div>
                    </div>
                  </div>
      
                  <hr class="my-4">
      
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="same-address">
                    <label class="form-check-label" for="same-address">Shipping address is the same as my billing
                      address</label>
                  </div>
      
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="save-info">
                    <label class="form-check-label" for="save-info">Save this information for next time</label>
                  </div>
      
                  <hr class="my-4">
      
                  <h4 class="mb-3">Payment</h4>
      
                  <div class="my-3">
                    <div class="form-check">
                      <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
                      <label class="form-check-label" for="credit">Credit card</label>
                    </div>
                    <div class="form-check">
                      <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
                      <label class="form-check-label" for="debit">Debit card</label>
                    </div>
                    <div class="form-check">
                      <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
                      <label class="form-check-label" for="paypal">PayPal</label>
                    </div>
                  </div>
      
                  <div class="row gy-3">
                    <div class="col-md-6">
                      <label for="cc-name" class="form-label">Name on card</label>
                      <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                      <small class="text-body-secondary">Full name as displayed on card</small>
                      <div class="invalid-feedback">
                        Name on card is required
                      </div>
                    </div>
      
                    <div class="col-md-6">
                      <label for="cc-number" class="form-label">Credit card number</label>
                      <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                      <div class="invalid-feedback">
                        Credit card number is required
                      </div>
                    </div>
      
                    <div class="col-md-3">
                      <label for="cc-expiration" class="form-label">Expiration</label>
                      <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                      <div class="invalid-feedback">
                        Expiration date required
                      </div>
                    </div>
      
                    <div class="col-md-3">
                      <label for="cc-cvv" class="form-label">CVV</label>
                      <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                      <div class="invalid-feedback">
                        Security code required
                      </div>
                    </div>
                  </div>
      
                  <hr class="my-4">
      
                  <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>












    <!-- footer -->
    <?php require 'partials/_footer.php'?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"></script>
  </body>

</html>