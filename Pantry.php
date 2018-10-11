<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  $connect = mysqli_connect('localhost','root','password','grocery_delivery');
  $itemTbl = "SELECT * FROM item";
  $records = $records = mysqli_Query($connect, $itemTbl);
?>

<!DOCTYPE html>
<html>
<head>

  <!-- Site Properties -->
  <title>Something Simple</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.css">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

  <style type="text/css">
    #pantry {
      min-height: 700px;
      padding: 0.5em 0em;
      background: #F5EAD1 url('images/web-graphics/leaf-watermark.png');
      background-size: 600px;
      background-repeat: no-repeat;
      background-position: left bottom;
      left: -2em;
      bottom: -2em;
    }
    #pantry .container {
      margin-bottom: 2em;
    }
    #pantry .container .header span {
      font-family: 'Pacifico', cursive;
    }
    #pantry .container .header i {
      padding: 0 0.5em;
    }
    #pantry .container .right .button {
      margin: 0 1em !important;
    }
    #pantry .container .right h3 {
      margin: 0 1em !important;
    }
    #pantry .container .row .left h1 {
      font-size: 5em;
      margin-bottom: 0em;
      font-family: 'Pacifico', cursive;
    }
    #pantry .container .eight .button {
      margin-top: 1.5em;
      margin-right: 1.5em;
    }
    #pantry .container .header > div {
      display: inline-block;
      vertical-align: bottom;
    }
  </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.js"></script>

</head>
<body>

  
  <div class="pusher">

    <!-- MASTER HEAD -->
    <section id="pantry">
      
      <!-- NAV BAR -->
      <div class="ui container">
        <div class="ui large secondary menu">
          <div class="header item">
            <span>something simple.</span>
            <i class="leaf icon"></i>
          </div>
          <a class="item">Home</a>
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

      <div class="ui grid container">
        <div class="bottom aligned row">
          <div class="ui left aligned left floated six wide column">
            <h1>Pantry</h1>
          </div>
          <div class="ui right aligned right floated six wide column">
            <div class="ui right aligned category search">
              <div class="ui icon input">
                <input class="prompt" type="text" placeholder="Search items...">
                <i class="search icon"></i>
              </div>
            </div>
          </div>
        </div>
      </div>   

      <div class="ui grid container">
        <div class="ui four doubling cards">

          <?php
            while($item = mysqli_fetch_assoc($records))
            {
              $item_name = $item['item_name'];
              $item_price = $item['item_price'];
              $item_weight = $item['item_weight'];
              $weight_unit = $item['item_weight_unit'];
              $item_description = $item['item_desc'];

              echo "<div class='card'>
                <div class='image'>
                  <img src='https://picsum.photos/200/?random'>
                </div>
                <div class='content'>
                  <a class='header'>".$item_name."</a>
                  <div class='meta'>
                    <span class='date'>$".$item_price."</span> <br>
                    <span class='date'>".$item_weight. $weight_unit."</span>
                  </div>
                  <div class='description'>".
                    $item_description.
                  "</div>
                </div>
                  <div class='extra content'>
                    <span>Quantity:</span>
                    <span class='ui input'>
                      <input type='number' placeholder='0'>
                    </span>
                  </div>
                <button class='ui bottom attached olive button'>
                  <i class='shop icon'></i>
                  Add to cart
                </button>
              </div>";
            } 
          ?>
          
        </div>
      </div>


    </section>

  </div>


</body>

</html>