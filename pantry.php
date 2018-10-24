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

    #toggle .text {
      display: none;
    }

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
    /* .image {
      width: 217.5px;
      height: 217.5px;
    } */
  </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.js"></script>

</head>
<body>

  <!-- SIDEBAR SHOPPING CART -->
  <div class="ui vertical inverted sidebar menu">
    <div class="item">
      <h1>Shopping Cart</h1>
      <div class="ui grid">

        <!-- WEIGHT  -->
        <div class="row">
          <div class="eight wide column">
            <span>Weight:</span>
          </div>
          <div class="four wide column right floated">
            <span>14.3 lbs</span>
          </div>
        </div>

        <!-- TOTAL BEFORE TAX -->
        <div class="row">
          <div class="eight wide column">
            <span>Total before tax:</span>
          </div>
          <div class="four wide column right floated">
            <span>$53.8</span>
          </div>
        </div>

        <!-- ESTIMATED TAX -->
        <div class="row">
          <div class="eight wide column">
            <span>Estimated tax:</span>
          </div>
          <div class="four wide column right floated">
            <span>$4.84</span>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <!-- ORDER TOTAL -->
      <div class="row">
        <div class="eight wide column">
          <span><h3>Order Total:</h3></span>
        </div>
        <div class="four wide column right floated">
          <span><h3>$58.64</h3></span>
        </div>
      </div>
    </div>
    <div class="item">
      <a href="payment.php">
        <button class="ui green button">Checkout</button>
      </a>
    </div>
  </div>
  
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

      <!-- STICKY BUTTON -->
      <div id="toggle" class="ui sticky green massive launch right attached fixed button">
        <i class="cart plus icon"></i>
        <span class="text">Cart</span>
      </div>

      <div class="ui grid container">
        <div class="bottom aligned row">
          <div class="ui left aligned left floated six wide column">
            <h1>Pantry</h1>
          </div>
          <form action="Pantry.php" method="GET">
            <div class="ui right aligned right floated six wide column">
              <div class="ui right aligned category search">
                <!-- <div class="ui icon input">
                  <input class="prompt" type="text" name="query" placeholder="Search items..."/>
                  <input type="submit" value="Search"/>
                  <i class="search icon"></i>
                </div> -->
                <div class="ui action input">
                  <input type="text" name="query" placeholder="Search Items...">
                  <button class="ui button">Search</button>
                </div>
              </div>
            </div>
          </form>
          </div>
      </div>   

      <div class="ui grid container">
        <div class="ui four doubling cards">

          <?php
            $connect = mysqli_connect('localhost','OFS','sesame','OFS');
            $itemTbl = "SELECT * FROM item";

            if (isset($_GET['query'])) {
              $query = $_GET['query'];
              $query = htmlspecialchars($query);
              $query = mysqli_real_escape_string($connect, $query);
              $records = mysqli_query($connect, "SELECT * FROM item WHERE (`item_name` LIKE '%".$query."%') OR (`item_desc` LIKE '%".$query."%') OR (`item_category` LIKE '%".$query."%')");
            }
            else
            {
              $records = mysqli_Query($connect, $itemTbl);
            }
            
            while($item = mysqli_fetch_assoc($records))
            {
              $item_name = $item['item_name'];
              $item_price = $item['item_price'];
              $item_weight = $item['item_weight'];
              $weight_unit = $item['item_weight_unit'];
              $item_description = $item['item_desc'];
              $image = $item['image'];
              // <img src='https://picsum.photos/200/?random'>

              echo "<div class='card'>
                <div class='image'>
                  <img src='$image'>
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

  <script type="text/javascript">
  $('#toggle').click(function(){
    $('.ui.sidebar').sidebar('toggle');
  });
  $(".launch.button").mouseenter(function(){
        $(this).stop().animate({width: '150px'}, 200, 
             function(){$(this).find('.text').show();});
    }).mouseleave(function (event){
        $(this).find('.text').hide();
        $(this).stop().animate({width: '70px'}, 200);
    });
  </script>


</body>

</html>