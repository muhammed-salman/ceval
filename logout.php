<?php

/*
* ConceptEval by Muhammed Salman Shamsi is licensed under a Creative Commons Attribution-NonCommercial 4.0 International License.
* To view legal code visit: https://creativecommons.org/licenses/by-nc/4.0/legalcode
* Author: Muhammed Salman Shamsi
* Created On: 3 Oct, 2016 12:39:13 PM
*/
  require_once 'functions/header.php';

  if (isset($_SESSION['user']))
  {
      
      session_destroy();
    echo "<div class='alert alert-info'>You have been logged out.".
            "You are now being redirected to login page" .
         " Please<a href='login.php'>click here</a> to redirect manually.</div>";
    header("Refresh: 1; url=login.php");
    exit();
  }
  else
  {   
            header('Refresh:0 ,url=login.php');
  }
  require_once 'functions/footer.php';
?>
