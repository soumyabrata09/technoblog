<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="loginPage.css">
</head>

<body class="shadow border border-left border-right border-top border-bottom text-justify">
  <div class="py-5" style="background-image: url('https://static.pingendo.com/cover-stripes.svg'); background-position:left center; background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="p-5 col-lg-6">
          <h1>Log in</h1>
          <p class="mb-3">Kindly login to proceed else opt for guest login</p>
          <form>
            <div class="form-group"> <input type="email" class="form-control shadow-lg" placeholder="Enter email" id="form11"> </div>
            <div class="form-group"> <input type="password" class="form-control shadow-lg" placeholder="Password" id="form12"> <small class="form-text text-muted text-right">
                <a href="#"> Forgot your password?</a>
              </small> </div> <button type="submit" class="btn btn-primary btn-block text-center text-lowercase shadow-lg">Submit</button>
          </form>
        </div>
        <!--c_sousen-->
        <div class="col-md-6">
          <h1 class="display-6 bg-light border border-primary  w-100 rounded rounded-left rounded-right rounded-top rounded-bottom guest-decoration">Continue as Guest</h1>
          <div class="py-5">
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-center shadow-none" style="">
				<a class="btn btn-info pl-3 pr-3 pt-2 pb-2 text-center rounded rounded-left rounded-right rounded-top rounded-bottom border-dark shadow-lg" href="./checkoutPage.html">Guest Login</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
 <!--  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 20px;right:20px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:220px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;<img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16"></pingendo> -->
  <!--Include Product recommender-->
  <!--Enable footer content-->
</body>

</html>