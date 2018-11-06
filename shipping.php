<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
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

    #payment {
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
          <h1>Shipping</h1>
        </div>
        <div class="row">
          <div class="ui large breadcrumb">
            <a href="pantry.php" class="section">Pantry</a>
            <i class="right chevron icon divider"></i>
            <a href="payment.php" class="section">Payment</a>
            <i class="right chevron icon divider"></i>
            <div class="active section">Shipping</div>
          </div>
        </div>
      </div>
      
      <div class="ui raised segment container">
        <div class="ui grid">
          <div class="ui ten wide column">
            <div class="ui info message">
              Please enter your shipping information.
            </div>
            <div class="ui container">

              <form class="ui form">
              
                <!-- CARDHOLDER'S NAME -->
                <div class="field">
                  <label>Cardholder's Name</label>
                  <input type="text">
                </div>

                <!-- CARDHOLDER'S ADDRESS -->
                <div class="field">
                  <label>Cardholder's Address</label>
                  <input type="text" id = "autocomplete" onFocus = "geolocate()">
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

              </form>
              
            </div>
          </div>
          <div class="ui six wide column">
            <h1>Order Summary</h1>
            <div class="ui grid">

              <!-- WEIGHT  -->
              <div class="row">
                <div class="ten wide column">
                  <span>Weight:</span>
                </div>
                <div class="six wide column right floated right aligned">
                  <span>14.3 lbs</span>
                </div>
              </div>

              <!-- TOTAL BEFORE TAX -->
              <div class="row">
                <div class="ten wide column">
                  <span>Total before tax:</span>
                </div>
                <div class="six wide column right floated right aligned">
                  <span>$53.8</span>
                </div>
              </div>

              <!-- ESTIMATED TAX -->
              <div class="row">
                <div class="ten wide column">
                  <span>Estimated tax:</span>
                </div>
                <div class="six wide column right floated right aligned">
                  <span>$4.84</span>
                </div>
              </div>

              <!-- ORDER TOTAL -->
              <div class="row">
                <div class="ten wide column">
                  <span><h3>Order Total:</h3></span>
                </div>
                <div class="six wide column right floated right aligned">
                  <span><h3>$58.64</h3></span>
                </div>
              </div>

              <!-- BUTTON -->
              <div class="row">
                <div class="sixteen wide column">
                  <a href="payment.php">
                    <button class="ui fluid green button">Proceed to shipping</button>
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
  <script>
    function initAutoComplete(){
    autocomplete = new google.maps.places.Autocomplete(
         /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
        {types: ['geocode']});
    }
    function geolocate() {
        if (navigator.geolocation) {
           navigator.geolocation.getCurrentPosition(function(position) {
        var geolocation = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };
        var circle = new google.maps.Circle({
          center: geolocation,
          radius: position.coords.accuracy
        });
        autocomplete.setBounds(circle.getBounds());
      });
      }
    }
  </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZU_P11ldjxwdBWYQSX6Gzj-5aeoEUAUo&libraries=places&callback=initAutoComplete"

 async defer></script>

</body>

</html>