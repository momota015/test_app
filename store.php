<?php
require_once('functions.php');
// var_dump($_POST); 
// exit;
createData($_POST);
header('Location: ./index.php');
