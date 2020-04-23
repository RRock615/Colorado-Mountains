<?php //Rachel Rockenfeller ?>
<?php //reference: https://www.tutorialspoint.com/php/php_mysql_login.htm ?>
<?php //https://coolestguidesontheplanet.com/how-to-connect-to-a-mysql-database-with-php/ ?>
<?php //https://www.tutorialspoint.com/php/php_mysql_login.htm?>
<?php //https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_popup_form ?>
<?php //Used the given template as a guide ?>
<?php
   include("connect.php");
   if( !headers_sent() && '' == session_id() ) {
           session_start();
   }
   
   if($_SERVER["REQUEST_METHOD"] == "POST") { 
      
      $exp = $_POST['hiker']; 
      $user = $_SESSION['email'];
      $quest = addslashes($_POST['quest']);
      
      $sql = "INSERT INTO Blog(Expertise,Question,User) VALUES ('$exp','$quest','$user')";
      $conn->query($sql);
      header("location: blog.php");
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
      <li class="nav-item">
        <a class="nav-link" href="packing.php">Packing List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mountains.php">The Mountains</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="home.html">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </nav>
       
        
        <form id="packing" action="blog.php" method="POST" enctype="multipart/form-data">
                <h4>Have questions or comments? Post them here!</h4>
                <br/>What is your hiking ability?<br/>
                <input type="radio" name="hiker" value="Beginner">Beginner<br>
                <input type="radio" name="hiker" value="Intermediate">Intermediate<br>
                <input type="radio" name="hiker" value="Hard">Hard<br>
                <input type="radio" name="hiker" value="Advanced">Advanced<br>
                <br/>Ask your question below:<br/>
                <textarea placeholder="Hi! Please keep it polite and under 700 charachters. Thank you! :)" 
                rows="6" cols="100" name="quest" ><?php echo ($textBox); ?></textarea>
                <br/>
                <input type="submit" value="Send" id="sendButton"/>
                
        </form>
        
        <article id="packing">
        <h1>Take a look at some questions already asked!</h1>
        
        <?php
              include("connect.php");
              if( !headers_sent() && '' == session_id() ) {
                   session_start();
              }
              
              $result = mysqli_query($conn,"SELECT * FROM Blog");
              echo "<table border='1'>
                  <tr>
                  <th>Expertise</th>
                  <th>User</th>
                  <th>Question</th>
                  </tr>";
                  
                  while($row = mysqli_fetch_array($result))
                        {
                        echo "<tr>";
                        echo "<td>" . $row['Expertise'] . "</td>";
                        echo "<td>" . $row['User'] . "</td>";
                        echo "<td>" . stripslashes($row['Question']) . " </td>";
                        echo "</tr>";
                        }
                   echo "</table>";
        
                   $conn->close();
                ?>
        </article>
                                        

</body>
</html>

