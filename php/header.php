<?php
/*
* ConceptEval by Muhammed Salman Shamsi is licensed under a Creative Commons Attribution-NonCommercial 4.0 International License.
* To view legal code visit: https://creativecommons.org/licenses/by-nc/4.0/legalcode
* Author: Muhammed Salman Shamsi
* Created On: 28 Sep, 2016
*/

session_start();
/*if(!$loggedin){
    header("Refresh:0, url=login.php");
}
else{*/
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="description" content="Evaluate Skills of your Students">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Muhammed Salman Shamsi">
        <meta name="keywords" content="viva, concept, evaluation, mcq, exam, students, skills">

        <link rel="shortcut icon" href="">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/style.css">
        <noscript>
            <meta http-equiv='refresh' content='0;url=nojs.php'>
        </noscript>
     </head>
     <body>
         <noscript>
            <span>Your browser doesn't support or has disabled JavaScript</span>
         </noscript>
            
<?php  
require_once 'php/connection.php';
require_once 'php/functions.php';
$userstr='(Guest)';

if(isset($_SESSION['user']))
{
    $user=$_SESSION['user'];
    $loggedin=TRUE;
    $userstr="($user)";
}
 else{ 
     $loggedin=FALSE;
 }
//}
 ?>
