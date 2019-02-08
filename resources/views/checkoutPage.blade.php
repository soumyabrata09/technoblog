<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon" href="https://templates.pingendo.com/assets/Pingendo_favicon.ico">
  <title>Checkout</title>
  <meta name="description" content="Wireframe design of a checkout form by Pingendo">
  <meta name="keywords" content="Pingendo bootstrap example template wireframe checkout form">
  <meta name="author" content="Pingendo">
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="wireframe.css">
</head>

<body class="bg-light border border-left border-right border-top border-bottom rounded-left rounded-right rounded-top rounded-bottom rounded">
  <div class="py-5">
    <div class="container text-left">
      <div class="row">
        <div class="col-md-12">
          <h3 class="text-uppercase text-decoration-heading heading-background">Technoblog</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="">
    <div class="container">
      <div class="row">
        <div class="col-md-4 order-md-2">
          <h4 class="d-flex justify-content-between mb-3"> <span class="text-muted"><b>Your cart</b></span> <span class="badge badge-secondary badge-pill">3</span> </h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between">
              <div>
                <h6 class="my-0"><b>Product name</b></h6> <small class="text-muted">Brief description</small>
              </div> <span class="text-muted">$12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <div>
                <h6 class="my-0"><b>Second product</b></h6> <small class="text-muted">Brief description</small>
              </div> <span class="text-muted">$8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <div>
                <h6 class="my-0"><b>Third item</b></h6> <small class="text-muted">Brief description</small>
              </div> <span class="text-muted">$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0"><b>Promo code</b></h6> <small>EXAMPLECODE</small>
              </div> <span class="text-success">-$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between"> <span>Total (USD)</span> <b>$20</b> </li>
          </ul>
          <form class="card p-2 my-4">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Redeem</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3"><b>Billing address</b></h4>
          <form class="needs-validation" novalidate="">
            <div class="row">
              <div class="col-md-6 mb-3"> <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                <div class="invalid-feedback"> Valid first name is required. </div>
              </div>
              <div class="col-md-6 mb-3"> <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                <div class="invalid-feedback"> Valid last name is required. </div>
              </div>
            </div>
            <div class="mb-3"> <label for="username">Username</label>
              <div class="input-group">
                <input type="text" class="form-control" id="username" placeholder="Username" required="">
                <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div>
              </div>
            </div>
            <div class="mb-3"> <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
            </div>
            <div class="mb-3"> <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
              <div class="invalid-feedback"> Please enter your shipping address. </div>
            </div>
            <div class="mb-3"> <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite"> </div>
            <div class="row">
              <div class="col-md-5 mb-3"> <label for="country">Country</label> <select class="custom-select d-block w-100" id="country" required="">
                  <option value="">Choose...</option>
                  <option value="United States">United States</option>
                </select>
                <div class="invalid-feedback"> Please select a valid country. </div>
              </div>
              <div class="col-md-4 mb-3"> <label for="state">State</label> <select class="custom-select d-block w-100" id="state" required="">
                  <option value="">Choose...</option>
                  <option value="California">California</option>
                </select>
                <div class="invalid-feedback"> Please provide a valid state. </div>
              </div>
              <div class="col-md-3 mb-3"> <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required="">
                <div class="invalid-feedback"> Zip code required. </div>
              </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address" value="on"> <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label> </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info" value="on"> <label class="custom-control-label" for="save-info">Save this information for next time</label> </div>
            <hr class="mb-4">
            <h4 class="mb-3"><b>Payment</b></h4>
            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="" value="on"> <label class="custom-control-label" for="credit">Credit card</label> </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="" value="on"> <label class="custom-control-label" for="debit">Debit card</label> </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="" value="on"> <label class="custom-control-label" for="paypal">Paypal</label> </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3"> <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required=""> <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback"> Name on card is required </div>
              </div>
              <div class="col-md-6 mb-3"> <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                <div class="invalid-feedback"> Credit card number is required </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3"> <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                <div class="invalid-feedback"> Expiration date required </div>
              </div>
              <div class="col-md-3 mb-3"> <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                <div class="invalid-feedback"> Security code required </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="assets/js/validation.js" style=""></script>
</body>

</html>