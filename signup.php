<?php
/*
* ConceptEval by Muhammed Salman Shamsi is licensed under a Creative Commons Attribution-NonCommercial 4.0 International License.
* To view legal code visit: https://creativecommons.org/licenses/by-nc/4.0/legalcode
* Author: Muhammed Salman Shamsi
* Created On: 30 Sep, 2016 8:54:08 PM
*/
require_once 'php/header.php';
?>
<div class="container-fluid">
    <div class="row">
<?php
if($_POST){
    insert_user();
    echo 'sjkjjks';
}
?>
        <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
        <div class="sign-up-form marg-t-2 marg-bt-2">
            <form role="form" method="post" action="signup.php">
                <div class="ceval"></div>
                <h2 class="text-center marg-bt-2"> Create Account</h2>
                <fieldset class="form-group">
                    <label for="user">Username</label>
                    <input class="form-control" type="text" placeholder="Min 5 characters" maxlength="45" id="user" name="user" required>
                    <div id="usererr"></div>
                </fieldset>
                      <fieldset class="form-group">
                    <label for="pass">Enter Password</label>
                    <input class="form-control" type="password" placeholder="Min 8 char, 1 Lowercase,1 Uppercase, 1 Special Charcter" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" id="pass" name="pass" required>
                </fieldset>
                <fieldset class="form-group">
                    <label for="cpass">Confirm Password</label>
                    <input class="form-control" type="password" id="cpass" placeholder="Repeat Password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" name="cpass" required/>
                    <div id="cpasserr"></div>
                </fieldset>
                <fieldset class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" id="email" name="email" maxlenght="50" required/>
                </fieldset>
                <fieldset class="form-group">
                    <label for="mobile">Mobile Number</label>
                    <input class="form-control" type="number" maxlenght="10" id="mobile" name="mobile" required/>
                </fieldset>
                <fieldset class="form-group">
                    <label for="security_ques">Define a Security Question</label>
                    <input class="form-control" type="text" id="security_question" name="question" maxlenght="200"/>
                </fieldset>
                <fieldset class="form-group">
                    <label for="security_ans">Answer</label>
                    <input class="form-control" type="text" id="security_answer" name="answer" maxlenght="200"/>
                </fieldset>
          
                <input type="submit" class="btn btn-primary" value="Create Account">
            </form>
        </div>
        </div>
    </div>
</div>
<?php
require_once 'php/footer.php';
?>