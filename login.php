<?php

/*
* ConceptEval by Muhammed Salman Shamsi is licensed under a Creative Commons Attribution-NonCommercial 4.0 International License.
* To view legal code visit: https://creativecommons.org/licenses/by-nc/4.0/legalcode
* Author: Muhammed Salman Shamsi
* Created On: 28 Sep, 2016 2:09:05 PM
*/
require_once 'php/header.php';
?>
<div class="container-fluid">
<?php
if($_POST){
 if(!$loggedin){
    $error=$user=$pass="";    
    $link=  connect_mysql();
    if (!empty($_POST['username'])&&!empty($_POST['pass'])){
        $user = sanitizeString($_POST['username'],$link);
        $pass = sanitizeString($_POST['pass'],$link);
        $s1="jas#$1Hj*";
        $s2="hks&js#@";
        $token= hash('ripemd128', "$s1$pass$s2");  
        $result = queryMySQL("SELECT * FROM Access WHERE userid='$user' AND pass='$token'");
        $row = mysqli_fetch_array($result);
        if (!$row){
            $error = "<div class='text-center error'>Username or Password invalid</div>";
        }
        else{
            $_SESSION['user'] = $row['userid'];
            $loggedin=TRUE;
            echo "<div class='alert alert-info'>You are now logged in.<br>"
            . "You are now being redirected to home page."
            . "<a href='index.php'>Click here</a> to redirect manually</div>";
            
            header("Refresh: 0; url=index.php");
        }
    }
    else {
        $error = "<div class='text-center error'>All the fields are compulsory.</div>";
    }
  }
 }
if(!$loggedin){
    ?>
    <div class="row">
        <div id="login-box" class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
          <div class="ceval"></div> 
          <form method="post" action="login.php" >
            <h2 class="text-center">Sign in to ConceptEval</h2>
             <div class="auth-form marg-t-2">
                <!--div class="form-group"-->
                    <img src='img/college-logo.png' class="center-block login-img"/>
                <!--/div-->
                    <?php echo '<div class="form-group">'.$error.'</div>';?>
                <div class="form-group">
                    <label for="username" class="marg-bt-1">Username or Email address</label>
                    <input type="text" name="username" id="username" value="<?php echo $user;?>"
                    placeholder="Username" class="form-control <?php if($user!="") echo 'alert-danger';?>"
                     required>
                </div>
                <div class="form-group">
                    <label for="pass" class="marg-bt-1 center-block"><span>Password</span> <a class="link-label">Forgot Password</a></label>
                    <input type="password" name="pass" id="pass" placeholder="Password" class="form-control <?php if($user!="") echo 'alert-danger';?>"
                     required>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-lg btn-primary btn-block center-block" value="Sign In">
                </div>
             </div>
        </form>
          <div class="auth-form marg-t-2">
              New to ConceptEval? <a href="#">Register Now</a>.
          </div>
    

<?php
}
else {
?>      
        <div class='alert alert-info'>
            <h3>
            You are already logged In as <?php $user ?>.
            Please <a href='logout.php'>Log Out</a> to Sign In as different User 
            </h3>
        </div>
      
<?php     header("Refresh: 1; url=index.php");
}
?>
      </div>    
    </div>
</div>
<?php
require_once 'php/footer.php'; 
?>