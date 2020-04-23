<?php //Rachel Rockenfeller ?>
<?php //reference: https://www.tutorialspoint.com/php/php_mysql_login.htm ?>
<?php //https://coolestguidesontheplanet.com/how-to-connect-to-a-mysql-database-with-php/ ?>
<?php //https://www.tutorialspoint.com/php/php_mysql_login.htm?>
<?php
   include('connect.php');
   if( !headers_sent() && '' == session_id() ) {
           session_start();
   }
   
   $user_check = $_SESSION['login_user'];
   
   $sql = "SELECT email FROM Users WHERE email = '$user_check'";
   $result = $conn->query($sql);
   
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>