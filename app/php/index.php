<?php 
  if(!$_SESSION['loggedin']){
      header("Location: HTTP/1.1 404 File Not Found", 404);
      exit;
  }
?>