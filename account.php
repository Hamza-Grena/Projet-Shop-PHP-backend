<?php
ob_start();
// include header.php file
include('func/header.php');
?>

<?php

/*  include account form  */
include('libs/_account-form.php')
/*  include account form  */

?>

<?php
// include footer.php file
include('func/footer.php');
?>

<!-- validate script -->
<script src="scriptValidator.js"></script>
<script>
    var addMemForm = new Validator('#add-member');
    addMemForm.onSubmit = function (data) {
        console.log(JSON.stringify(data));
    }
</script>