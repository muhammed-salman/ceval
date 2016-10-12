<?php

/*
* ConceptEval by Muhammed Salman Shamsi is licensed under a Creative Commons Attribution-NonCommercial 4.0 International License.
* To view legal code visit: https://creativecommons.org/licenses/by-nc/4.0/legalcode
* Author: Muhammed Salman Shamsi
* Created On: 28 Sep, 2016 4:19:28 PM
*/
function connect_mysql($db=null){
    global $db_host,$db_name,$db_password,$db_user;
    if($db!=null){
        $link=mysqli_connect($db_host,$db_user,$db_password,$db);
    }
    else{
        $link=mysqli_connect($db_host,$db_user,$db_password,$db_name);
    }
    if(!$link){
        echo '<div class="alert alert-danger">'
        . 'Cannot Connect to Database. Error No:'.mysqli_connect_errno().'</div>';
    }   
    return $link;
}

function sanitizeString($var,$link)
{
    $var =  strip_tags($var);
    $var=  htmlentities($var);
    $var= stripcslashes($var);
    $var=  mysqli_real_escape_string($link,$var);
    return $var;
}
function queryMysql($query,$link)
{
    $result=  mysqli_query($link,$query);
    if(!$result)
    {
        echo'<div class="row alert alert-danger text-center">Oops! We encountered a problem while processing '
        . 'your request. Please contact webmaster. <br> Technical Details: Error No: '.mysqli_error($link).'</div>';
        die();
    }
    
    return $result;
}

function insert_user(){
   $userid=  filter_var($_POST[user], FILTER_SANITIZE_STRING | FILTER_SANITIZE_MAGIC_QUOTES); 
   $pass=  filter_var($_POST[pass], FILTER_SANITIZE_STRIN | FILTER_SANITIZE_MAGIC_QUOTES); 
   $cpass=  filter_var($_POST[cpass], FILTER_SANITIZE_STRIN | FILTER_SANITIZE_MAGIC_QUOTES); 
   $email=  filter_var($_POST[email], FILTER_SANITIZE_EMAIL | FILTER_SANITIZE_MAGIC_QUOTES); 
   $mobile=  filter_var($_POST[mobile], FILTER_SANITIZE_NUMBER_INT | FILTER_SANITIZE_MAGIC_QUOTES); 
   $question=  filter_var($_POST[question], FILTER_SANITIZE_STRING | FILTER_SANITIZE_MAGIC_QUOTES); 
   $answer=  filter_var($_POST[answer], FILTER_SANITIZE_STRING | FILTER_SANITIZE_MAGIC_QUOTES);
   $create_date=date('Y-m-d');
   $link=  connect_mysql();
   $query="Insert into Access values(NULL,'$userid','$pass','$email',"
           . "'$mobile','0',NULL,NULL,'$question','$answer',"
           . "'$create_date')";
   queryMysql($query,$link);   
}