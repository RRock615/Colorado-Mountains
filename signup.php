<?php //Rachel Rockenfeller ?>
<?php //reference: https://www.tutorialspoint.com/php/php_mysql_login.htm ?>
<?php //https://coolestguidesontheplanet.com/how-to-connect-to-a-mysql-database-with-php/ ?>
<?php //https://www.tutorialspoint.com/php/php_mysql_login.htm ?>
<?php
   include("connect.php");
   if( !headers_sent() && '' == session_id() ) {
           session_start();
   }
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email = $_POST['email']; 
      $pwd = $_POST['pwd'];
      
      $sql = "INSERT INTO Users(email,password) VALUES ('$email','$pwd')";
      $conn->query($sql);
      $_SESSION['email']= $email;         
      header("location: home.html");
  }
  $conn->close();
?>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="Assignment2EC.css">
  <script src="Assignment3EC.js"></script>
  <title>Colorado Mountains</title>
  <!-- References:https://www.w3schools.com/  -->
</head>

<body>
   <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blog.php">Signup</a>
      </li>
    </ul>
  </nav>
  <div id="Intro">
    <h1>Welcome to Colorado Mountains</h1>
  </div>

  <div>
    <form action="signup.php" method = "post" id="login">
      <h4>
        Signup
      </h4>
      <div>
        <label for="email">Email address:</label>
        <input type="email" name="email" required>
      </div>
      <div>
        <label for="pwd">Password:</label>
        <input type="pwd", id = "pwd" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{3,}" title="Must contain one number and one uppercase and one lowercase letter." required> 
      </div>
      <input type="submit" value="Submit">
    </form>
    <br>
  </div>

<br>
</body>
</html>
  