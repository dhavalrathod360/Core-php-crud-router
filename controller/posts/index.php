<?php 
$heading = 'Blogs Posts';

$config = require('config.php');
$db = new Database($config);

// $query = 'SELECT * from posts';
$query = "SELECT posts.*, users.name as author_name FROM posts LEFT JOIN users ON posts.author = users.email ";

$posts = $db->query($query)->fetchAll();

$sr = 1;
// dd($posts);
require('views/posts/blog.view.php');

?>