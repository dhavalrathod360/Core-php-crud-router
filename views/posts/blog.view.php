<?php 
require('views/partials/footer.php');
require('views/partials/nav.php');
require('views/partials/header.php');


?>

<main>
   <div>
        <div class="container bg-grey mt-5">
            <p>
                <a href="/blogs/create">
                    <button class="btn btn-primary">Add a new post</button>
                </a>
            </p>
            <?php if(isset($success)) : ?> 
                <p class="text-center alert alert-success">Post added successfully! </p>
            <?php endif ; ?>
            <table class="table table-striped">
                <thead class="thead-light">
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                </thead>
                <tbody>
                    
                    <?php foreach ($posts as $post): ?>   
                        <tr>
                            <td><?= $sr++ ?></td>
                            <td>
                                <a href="/blogs/post?id=<?=$post['id'] ?>">
                                    <?= $post['title'] ?>
                                </a>
                            </td>
                            <td><?= $post['author_name']  ?> </td>
                        </tr>
                       
                        <?php endforeach; ?>
                        
                </tbody>
            </table>
          
        </div>
   </div>
</main>