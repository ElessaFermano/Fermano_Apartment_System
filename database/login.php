<?php
include 'tbl.php';

$tbl = new Users();
$tbl->createTbl();
echo $tbl->login($_POST);

?>
