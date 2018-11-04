<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  $weight = 0;
  $price = 0;
  $tax = 0;
  $orderTot = 0;
  if(isset($_SESSION["weight"]) && isset($_SESSION["price"]) && isset($_SESSION["tax"]) && isset($_SESSION["orderTot"]))
  {
    $weight = $_SESSION["weight"];
    $price = $_SESSION["price"];
    $tax = $_SESSION["tax"];
    $orderTot = $_SESSION["orderTot"];
  }
?>

<!DOCTYPE html>
<html>
<head>

  <!-- Site Properties -->
  <title>Something Simple</title>
  <script   src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.css">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

  <style type="text/css">

    body {
      min-height: 700px;
      padding: 0.5em 0em;
      background: #F5EAD1 url('images/web-graphics/leaf-watermark.png');
      background-size: 600px;
      background-repeat: no-repeat;
      background-position: left bottom;
      left: -2em;
      bottom: -2em;
    }
    #confirmation .container {
      margin-bottom: 2em;
    }
    #confirmation .container .header span {
      font-family: 'Pacifico', cursive;
    }
    #confirmation .container .header i {
      padding: 0 0.5em;
    }
    #confirmation .container .right .button {
      margin: 0 1em !important;
    }
    #confirmation .navbar .container .right h3 {
      margin: 0 1em !important;
    }
    #confirmation .container .row h1 {
      font-size: 5em;
      margin-bottom: 0.5em;
      font-family: 'Pacifico', cursive;
    }
    #confirmation .container .message {
      margin-bottom: 2em;
    }
    #confirmation .container .field {
      margin-bottom: 1em;
    }
    #confirmation .container .column {
      margin-bottom: 0;
    }
  </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.js"></script>

</head>
<body>
  
  <div class="pusher">

    <!-- MASTER HEAD -->
    <section id="confirmation">
      
      <!-- NAV BAR -->
      <div class="navbar">
        <div class="ui container">
          <div class="ui large secondary menu">
            <div class="header item">
              <span>something simple.</span>
              <i class="leaf icon"></i>
            </div>
            <a class="item" href="home.php">Home</a>
            <a class="item">About</a>
            <a class="item">Team</a>
            <a class="item">Contact</a>
            <div class="right item">
              <h3>Welcome, <?php echo $_SESSION['username']['username']; ?>!</h3>
              <a class="ui primary button" href="profile.php">Profile</a>
              <a class="ui negative button" href="index.php">Log Out</a>
            </div>
          </div>
        </div>
      </div>


      <div class="ui container">
        <div class="row">
          <h1>Confirmation</h1>
        </div>
        <div class="row">
          <div class="ui large breadcrumb">
            <a href="pantry.php" class="section">Pantry</a>
            <i class="right chevron icon divider"></i>
            <a href="shipping.php" class="section">Shipping</a>
            <i class="right chevron icon divider"></i>
            <a href="payment.php" class="section">Payment</a>
            <i class="right chevron icon divider"></i>
            <div class="active section">Confirmation</div>
          </div>
        </div>
      </div>
      
			<!-- SHOPPING INFO -->
      <div class="ui raised segment container">
        <div class="ui grid">
          <div class="ui eight wide column">
            <div class="ui container">
							<h1>Shopping Cart</h1>
							<div class="ui grid">

								<!-- WEIGHT  -->
								<div class="row">
									<div class="ten wide column">
										<span>Weight:</span>
									</div>
									<div class="six wide column right floated right aligned">
										<span><?php echo $weight." lbs"; ?></span>
									</div>
								</div>

								<!-- ESTIMATED TAX -->
								<div class="row">
									<div class="ten wide column">
										<span>Estimated tax:</span>
									</div>
									<div class="six wide column right floated right aligned">
										<span><?php echo "$ ".number_format($tax, 2); ?></span>
									</div>
								</div>
							</div>
            </div>
					</div>
          <div class="ui eight wide column">
            <h1>Order Summary</h1>
            <div class="ui grid">

							<!-- WEIGHT  -->
							<div class="row">
								<div class="ten wide column">
									<span>Weight:</span>
								</div>
								<div class="six wide column right floated right aligned">
									<span><?php echo $weight." lbs"; ?></span>
								</div>
							</div>

							<!-- TOTAL BEFORE TAX -->
							<div class="row">
								<div class="ten wide column">
									<span>Total before tax:</span>
								</div>
								<div class="six wide column right floated right aligned">
									<span><?php echo "$ ".number_format($price, 2); ?></span>
								</div>
							</div>

							<!-- ESTIMATED TAX -->
							<div class="row">
								<div class="ten wide column">
									<span>Estimated tax:</span>
								</div>
								<div class="six wide column right floated right aligned">
									<span><?php echo "$ ".number_format($tax, 2); ?></span>
								</div>
							</div>

							<!-- ORDER TOTAL -->
							<div class="row">
								<div class="ten wide column">
									<span><h3>Order Total:</h3></span>
								</div>
								<div class="six wide column right floated right aligned">
									<span><h3><?php echo "$ ".number_format($orderTot, 2); ?></h3></span>
								</div>
							</div>
            </div>
          </div>
        </div>
      </div>

			<!-- PAYMENT AND SHIPPING INFO -->
      <div class="ui raised segment container">
        <div class="ui grid">
          <div class="ui eight wide column">
            <div class="ui container">
							<h1>Shipping</h1>
							<div class="ui grid">

								<!-- WEIGHT  -->
								<div class="row">
									<div class="ten wide column">
										<span>Weight:</span>
									</div>
									<div class="six wide column right floated right aligned">
										<span><?php echo $weight." lbs"; ?></span>
									</div>
								</div>

								<!-- ESTIMATED TAX -->
								<div class="row">
									<div class="ten wide column">
										<span>Estimated tax:</span>
									</div>
									<div class="six wide column right floated right aligned">
										<span><?php echo "$ ".number_format($tax, 2); ?></span>
									</div>
								</div>
							</div>
            </div>
					</div>
          <div class="ui eight wide column">
            <h1>Order Summary</h1>
            <div class="ui grid">

							<!-- WEIGHT  -->
							<div class="row">
								<div class="ten wide column">
									<span>Weight:</span>
								</div>
								<div class="six wide column right floated right aligned">
									<span><?php echo $weight." lbs"; ?></span>
								</div>
							</div>

							<!-- TOTAL BEFORE TAX -->
							<div class="row">
								<div class="ten wide column">
									<span>Total before tax:</span>
								</div>
								<div class="six wide column right floated right aligned">
									<span><?php echo "$ ".number_format($price, 2); ?></span>
								</div>
							</div>

							<!-- ESTIMATED TAX -->
							<div class="row">
								<div class="ten wide column">
									<span>Estimated tax:</span>
								</div>
								<div class="six wide column right floated right aligned">
									<span><?php echo "$ ".number_format($tax, 2); ?></span>
								</div>
							</div>

							<!-- ORDER TOTAL -->
							<div class="row">
								<div class="ten wide column">
									<span><h3>Order Total:</h3></span>
								</div>
								<div class="six wide column right floated right aligned">
									<span><h3><?php echo "$ ".number_format($orderTot, 2); ?></h3></span>
								</div>
							</div>

							<!-- BUTTON -->
							<div class="row">
								<div class="sixteen wide column">
									<a href="payment.php">
										<button class="ui fluid green button">Proceed to payment</button>
									</a>
								</div>
							</div>
            </div>
          </div>
        </div>
        
      </div>

    </section>

  </div>

  <script>
  $(document)
    .ready(function() {
      $('.ui.dropdown')
        .dropdown({
          on: 'click'
        })
      ;
    })
  ;
  </script>

</body>

</html>