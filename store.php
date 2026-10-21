<?php
require_once('functions.php');
// var_dump($_POST); 
// exit;
// createData($_POST);

savePostedData($_POST); 
header('Location: ./index.php');
