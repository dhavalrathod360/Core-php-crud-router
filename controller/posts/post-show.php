<?php 

$config = require('config.php');
$db = new Database($config);

$id = isset($_GET['id']) ? intval($_GET['id']) : '' ;

$query = 'SELECT * from posts where id = ?';
$post = $db->query($query, [$id])->fetch();

$heading = $post['title'];
// dd($post);

 require('views/posts/post.view.php');
?>