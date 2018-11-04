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

    #payment .container {
      margin-bottom: 2em;
    }
    #payment .container .header span {
      font-family: 'Pacifico', cursive;
    }
    #payment .container .header i {
      padding: 0 0.5em;
    }
    #payment .container .right .button {
      margin: 0 1em !important;
    }
    #payment .navbar .container .right h3 {
      margin: 0 1em !important;
    }
    #payment .container .row h1 {
      font-size: 5em;
      margin-bottom: 0.5em;
      font-family: 'Pacifico', cursive;
    }
    #payment .container .message {
      margin-bottom: 2em;
    }
    #payment .container .field {
      margin-bottom: 1em;
    }
    #payment .container .checkbox {
      margin: 2em 0;
    }
    #payment .container .column {
      margin-bottom: 0;
    }
    /* .image {
      width: 217.5px;
      height: 217.5px;
    } */
  </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.js"></script>

</head>
<body>
  
  <div class="pusher">

    <!-- MASTER HEAD -->
    <section id="payment">
      
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
          <h1>Payment</h1>
        </div>
        <div class="row">
          <div class="ui large breadcrumb">
            <a href="pantry.php" class="section">Pantry</a>
            <i class="right chevron icon divider"></i>
            <a href="shipping.php" class="section">Shipping</a>
            <i class="right chevron icon divider"></i>
            <div class="active section">Payment</div>
          </div>
        </div>
      </div>
      
      <div class="ui raised segment container">
        <div class="ui grid">
          <div class="ui ten wide column">
            <div class="ui info message">
              Please enter your payment information.
            </div>
            <div class="ui container">

              <form class="ui form">
              
                <!-- CARDHOLDER'S NAME -->
                <div class="field">
                  <label>Cardholder's Name</label>
                  <input type="text">
                </div>

                <!-- CARD INFORMATION -->
                <div class="ui grid">
                  <div class="ui thirteen wide column field">
                    <label>Card Number</label>
                    <div class="ui right labeled input">
                      <input type="text">
                      <div class="ui dropdown label">
                        <div class="text">Card Type</div>
                          <i class="dropdown icon"></i>
                          <div class="menu">
                            <div class="item">VISA</div>
                            <div class="item">Mastercard</div>
                            <div class="item">Discover</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="ui three wide column field">
                    <label>CVC</label>
                    <input type="password">
                  </div>
                </div>

                <div class="ui grid">
                  <div class="ui eight wide column field">
                    <label>Expiration Date</label>
                    <input type="date">
                  </div>
                  <div class="ui eight wide column field">
                    <label>Email Address</label>
                    <input type="text">
                  </div>
                </div>

                <div class="ui checkbox">
                  <input id="billingAdd" type="checkbox" name="example">
                  <label>Billing  address is the same as shipping address</label>
                </div>

                <!-- CARDHOLDER'S ADDRESS -->
                <div id="address">
                  <div class="field">
                    <label>Cardholder's Address</label>
                    <input type="text">
                  </div>
                  <div class="ui grid">
                    <div class="ui nine wide column field">
                      <label>City</label>
                      <input type="text">
                    </div>
                    <div class="ui three wide column field">
                      <label>State</label>
                      <input type="text">
                    </div>
                    <div class="ui four wide column field">
                      <label>Zip Code</label>
                      <input type="text">
                    </div>
                  </div>
                </div>

              </form>
              
            </div>
          </div>
          <div class="ui six wide column">
            <h1>Shipping to:</h1>
            <div class="ui grid">

              <!-- SHIPPING NAME AND ADDRESS -->
              <div class="row">
                <div class="ten wide column">
                  <p>
                  Name <br>
                  Address <br>
                  City, State Zip Code
                  </p>
                </div>
              </div>

              <!-- BUTTON -->
              <div class="row">
                <div class="sixteen wide column">
                  <a href="confirmation.php">
                    <button class="ui fluid green button">Confirm</button>
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
  $(document).ready(function() {
    $('#billingAdd').change(function() {
        $('#address').toggle();
    });
  });
  </script>

</body>

</html>