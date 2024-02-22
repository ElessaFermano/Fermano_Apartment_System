<?php
include 'users.php';

$new = new Users();
$new->TableCreate();
echo $new->logIn($_POST);

?>