<?php
include 'tbl.php';
$tbl = new Users();
$tbl->createTbl();
$tbl->register($_POST);

?>