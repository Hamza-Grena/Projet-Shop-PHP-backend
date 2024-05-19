<?php
$userPrivilege = $_COOKIE['user_privilege'];

/*if ($userPrivilege == 0) {
    //echo "<script>alert('Access Denied! Only Admin can perform this operation.');</script>";
    // Delay  2 seconde
    //usleep(2000000);    
    header('Location: index.php');
    exit;
}*/

?>

<?php
ob_start();

// include header.php file
include('func/header.php');
?>

<?php

/*  include register form  */
include('libs/_register-form.php')
/*  include register form  */

?>

<?php
// include footer.php file
include('func/footer.php');
?>

<!-- validate script -->
<script src="scriptValidator.js"></script>
<script>
    var signUpForm = new Validator('#sign-up');
    signUpForm.onSubmit = function (data) {
        alert(JSON.stringify(data));
    }
</script>
