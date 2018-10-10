<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>

  <!-- Site Properties -->
  <title>Your Profile</title>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.css">

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
    body > .grid {
      height: 100%;
    }
    .column {
      max-width: 450px;
    }
    .input {
      width: 100%;
    }
  </style>
</head>
<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui header">
      <div class="content">
        Profile
      </div>
    </h2>
    
    <form method="post" actions="createProfile.php">

      <?php include('errors.php'); ?>

      <form class="ui large form">

        <div class="ui stacked segment">

          <div class="field">
            <div class="ui left icon input">
              <i class="user icon"></i>
              <input type="text" name="first" placeholder="First Name">
            </div>
          </div>

          <div class="field">
            <div class="ui left icon input">
              <i class="user icon"></i>
              <input type="text" name="last" placeholder="Last Name">
            </div>
          </div>

          <div class="field">
            <div class="ui left icon input">
              <i class="user icon"></i>
              <input type="text" name="username" placeholder="Username">
            </div>
          </div>

          <div class="field">
            <div class="ui left icon input">
              <i class="user icon"></i>
              <input type="text" name="phone" placeholder="Phone Number" >
            </div>
          </div>
          
          <div class="field">
            <div class="ui left icon input">
              <i class="envelope icon"></i>
              <input type="text" name="city" placeholder="City">
            </div>
          </div>
          
          <div class="field">
            <div class="ui left icon input">
              <i class="lock icon"></i>
              <input type="text" name="address" placeholder="Street Address">
            </div>
          </div>
          
          <div class="field">
            <button type="submit" class="ui large fluid green submit button" name="create_profile">Create</button>
          </div>
          <!-- <div class="ui fluid large green submit button" name="reg_user">Sign up</div> -->

        </div>

      </form>

      <!-- <div class="ui message">
        Have an account already? <a href="signin.php">Log in here.</a>
      </div> -->
      
      <a href="home.php">    
        <button class="ui fluid large primary button">
          <i class="left arrow icon "></i>
          Home
        </button>
      </a>

    </form>

  </div>

</div>

</body>

</html>

