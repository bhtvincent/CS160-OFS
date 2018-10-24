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
    #payment .container .right h3 {
      margin: 0 1em !important;
    }
    #payment .container .row h1 {
      font-size: 5em;
      margin-bottom: 0.5em;
      font-family: 'Pacifico', cursive;
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
            <h3>Welcome, <?php echo $_SESSION['username']; ?>!</h3>
            <a class="ui primary button" href="profile.php">Profile</a>
            <a class="ui negative button" href="index.php">Log Out</a>
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
            <div class="active section">Payment</div>
          </div>
        </div>
      </div>
      
      <div class="ui raised segments container">
        <div class="ui top attached info message">
          Please enter your payment information.
        </div>
        <div class="ui container">


          <!-- CARDHOLDER'S NAME -->
          <div class="ui fluid input">
            <input placeholder="Cardholder's Name" type="text">
          </div>

          <!-- CARDHOLDER'S ADDRESS -->
          <div class="ui fluid input">
            <input placeholder="Address" type="text">
          </div>
          <div class="ui grid">
            <div class="row">
              <div class="ui six wide column input">
                <input placeholder="City" type="text">
              </div>
              <div class="ui two wide column input">
                <input placeholder="State" type="text">
              </div>
              <div class="ui four wide column input">
                <input placeholder="Zip Code" type="text">
              </div>
            </div>
          </div>

          <!-- CARD INFORMATION -->
          <div class="ui right labeled input">
            <input placeholder="Card Number" type="text">
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
          <div class="ui grid">
            <div class="row">
              <div class="ui eight wide column input">
                <input placeholder="Expiration Date" type="date">
              </div>
              <div class="ui four wide column input">
                <input placeholder="Security Code" type="text">
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