<?php 
require('views/partials/footer.php');
require('views/partials/nav.php');
require('views/partials/header.php');


?>

<main>
   <div>
        <div class="container bg-grey mt-5">
           <p> <?= $post['body'] ?>  </p>
          
        </div>
   </div>
   <div class="container">
      <form action="delete" method="post">   
         <input type="hidden" name="id" value="<?= $id ?>">
         <input type="hidden" name="_method" value="DELETE">
         <input type="submit" value="Delete" class="btn btn-danger">
      </form>
     <!-- <a href="/delete?id=<?= $id ?>"> <button class="btn btn-danger"> Delete</button></a> -->
   </div>
   <div>
    <a href="/blogs">Go Back...</a>
   </div>
</main>