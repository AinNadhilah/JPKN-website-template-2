<?php 
  require("db.php");
  $statement = "SELECT * FROM agensi WHERE  url_agensi = '$url_agensi'";
  $query = mysqli_query($conn_cpanel,$statement);
  
  $result = mysqli_fetch_array($query, MYSQLI_ASSOC);
?>