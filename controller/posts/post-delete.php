<?php 

$heading = 'Delete this Post!';
$config = require('config.php');
$db = new Database($config);
$deleted = false;

$id = isset($_POST['id']) ? intval($_POST['id']) : '' ;

$blog = $db->query('SELECT * from posts where id= ? ', [$id])->fetch();
// dd($blog);
if(!empty($blog))
{
    $delete_query = $db->query("DELETE from posts where id= ? ", [$id]);
    $delete_query ? $deleted=true : $deleted = false;
    // $deleted = true;
}
else {
    $deleted = false;
}

require('views/posts/post-delete.view.php')

?>