<?php 
$config = require('config.php');
$db = new Database($config);
require('Class/Validator.php');

// dd('HEllo');
$heading = "Added a new Post";

$errors = [];

if(! Validator::string($_POST['title'], 1, 50)) // string validator fn accept parameter $string, min lenght reqired and max length reqired
{
    $errors['title'] = 'Title should not be empty or more than 50 char required.';
}

if(! Validator::string($_POST['body'], 1, 150)) // params ($string, min_length, max_lenght)
{
    $errors['body'] = 'Excerpt should not be empty or more than 150 char required';
}

$author_email = 'dhavalrathod360@gmail.com';
if(! Validator::email($author_email))
{
    $errors['email'] = "Invalid Email";
}

if(empty($errors))
{
   $entry = $db->query("INSERT into posts(title,body,author) values(:title,:body,:author_email)",[
            'title' => $_POST['title'],
            'body' => $_POST['body'],
            'author_email' => $author_email,
        ] );

    if($entry)
    {
        // return require('views/posts/post-create.view.php');
        $success = true;
        header('location: /blogs');
    }
    else {
        $failed = true;
    }
    
}
else{
    $failed = false;
    return require('views/posts/post-create.view.php');

}

// header('/blogs/create');
?>