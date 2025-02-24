<?php 
$config = require('config.php');
$db = new Database($config);
require('Class/Validator.php');

// $success = false;

$heading = "Create a new Post";


   
    // dd('form submitted');




require('views/posts/post-create.view.php');
?>