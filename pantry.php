<!DOCTYPE html>
<html>
<head>

  <!-- Site Properties -->
  <title>Something Simple</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.css">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

  <style type="text/css">

    .masthead {
      min-height: 700px;
      padding: 0.5em 0em;
      background: #F5EAD1 url('images/web-graphics/leaf-watermark.png');
      background-size: 600px;
      background-repeat: no-repeat;
      background-position: left bottom;
      left: -2em;
      bottom: -2em;
    }

    .masthead .container .header span {
      font-family: 'Pacifico', cursive;
    }

    .masthead .container .header i {
      padding: 0 0.5em;
    }

    .masthead .container .right .button {
      margin: 0 1em !important;
    }

    .masthead .container h1 {
      font-size: 5em;
      margin-top: 2em;
      margin-bottom: 0em;
      font-family: 'Pacifico', cursive;
    }

    .masthead .container .eight .button {
      margin-top: 1.5em;
      margin-right: 1.5em;
    }


  </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.js"></script>

</head>
<body>

  
  <div class="pusher">

    <!-- MASTER HEAD -->
    <section class="masthead">
      
      <!-- NAV BAR -->
      <div class="ui container">
        <div class="ui large secondary menu">
          <div class="header item">
            <span>something simple.</span>
            <i class="leaf icon"></i>
          </div>
          <a href="index.php" class="item">Home</a>
          <a class="item">About</a>
          <a class="item">Team</a>
          <a class="item">Contact</a>
          <div class="right item">
            <a class="ui green button" href="signin.php">Log in</a>
            <a class="ui green button" href="signup.php">Sign Up</a>
          </div>
        </div>
      </div>
    </section>

  </div>


</body>

</html>


