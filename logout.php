<?php //Rachel Rockenfeller ?>
<?php //reference: https://www.tutorialspoint.com/php/php_mysql_login.htm ?>
<?php //https://coolestguidesontheplanet.com/how-to-connect-to-a-mysql-database-with-php/ ?>
<?php //https://www.tutorialspoint.com/php/php_mysql_login.htm?>
<?php
   if( !headers_sent() && '' == session_id() ) {
           session_start();
   }
   
   if(session_destroy()) {
      header("Location: login.php");
   }
?>