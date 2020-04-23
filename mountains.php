<?php //Rachel Rockenfeller ?>
<?php //reference: https://www.tutorialspoint.com/php/php_mysql_login.htm ?>
<?php //https://coolestguidesontheplanet.com/how-to-connect-to-a-mysql-database-with-php/ ?>
<?php //https://www.tutorialspoint.com/php/php_mysql_login.htm?>
<?php //https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_popup_form ?>
<?php
   include("connect.php");
   if( !headers_sent() && '' == session_id() ) {
           session_start();
   }
   
   if($_SERVER["REQUEST_METHOD"] == "POST") { 
      
      $name = $_POST['name']; 
      $el = $_POST['el'];
      $dist = $_POST['dist']; 
      $diff = $_POST['diff'];
      $loc = $_POST['loc'];
      $ti = $_POST['ti'];
      
      $sql = "INSERT INTO Mountains(Name,Elevation,Distance,Difficulty,Location,Info) VALUES ('$name','$el','$dist','$diff','$loc','$ti')";
      $conn->query($sql);
      header("location: mountains.php");
  }
  $conn->close();
?>

<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="Assignment2EC.css">
  <title>Colorado Mountains</title>
  <!-- References:https://www.w3schools.com/  -->
</head>

<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="blog.php">The Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="packing.php">Packing List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="home.html">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </nav>
<div>
     <div id="packing">
     <div id="Intro"><h4>The Mountains</h4></div>
      <?php
      include("connect.php");
      if( !headers_sent() && '' == session_id() ) {
           session_start();
      }
      
      $result = mysqli_query($conn,"SELECT * FROM Mountains");
      echo "<table border='1'>
          <tr>
          <th>Name</th>
          <th>Elevation</th>
          <th>Distance(Miles)</th>
          <th>Difficulty</th>
          <th>Location</th>
          <th>Trail Information</th>
          </tr>";
          
          while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Elevation'] . "' </td>";
                echo "<td>" . $row['Distance'] . "</td>";
                echo "<td>" . $row['Difficulty'] . "</td>";
                echo "<td>" . $row['Location'] . "</td>";
                echo "<td><a href='" . $row['Info'] .  "'>" . $row['Name'] ."</a></td>";
                echo "</tr>";
                }
           echo "</table>";

           $conn->close();
        ?>
<button class="open-button" onclick="openForm()">Add Mountain</button>
<div class="form-popup" id="myForm">
            
		<form action="mountains.php" method="post" class="form-container">
		  <h4>
			Add Mountain
		  </h4>
		  <div>
			<label for="Name">Name:</label>
			<input type="Name", name = "name" required>
		  </div>
		  <div>
			<label for="Elevation">Elevaton:</label>
			<input type="Elevation", name = "el" required> 
		  </div>
		  <div>
			<label for="Distance">Distance:</label>
			<input type="Distance", name = "dist" required> 
		  </div>
		  <div>
			<label for="Difficulty">Difficulty:</label>
			<input type="Difficulty" name = "diff" required> 
		  </div>
		  <div>
			<label for="Location">Location:</label>
			<input type="Location", name = "loc" required> 
		  </div>
		  <div>
			<label for="Trail Info">Trail Info:</label>
			<input type="Trail Info", name = "ti" required> 
		  </div>
                  <span style="display: inline;">
                  <button type="submit" class="btn">Submit</button>
                  <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
                  </span>
		</form>
        </div>
        <script>
        function openForm() {
          document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
          document.getElementById("myForm").style.display = "none";
        }
        </script>
		<br>

    </div>
</body>
</html>