<?php
require_once('functions.php');
// var_dump($_POST); 
// exit;
savePostedData($_POST);
header('Location: ./index.php');
