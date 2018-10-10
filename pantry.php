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

    #pantry .container h1 {
      font-size: 5em;
      margin-bottom: 0em;
      font-family: 'Pacifico', cursive;
    }

    #pantry .container .eight .button {
      margin-top: 1.5em;
      margin-right: 1.5em;
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
          <a class="active item">Home</a>
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
        <div class="ui left aligned grid container">
          <div class="row">
            <h1>Pantry</h1>
          </div>
        </div>
      </div>      

    </section>

  </div>


</body>

</html>


