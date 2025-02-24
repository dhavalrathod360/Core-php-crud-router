<?php 
require('views/partials/footer.php');
require('views/partials/nav.php');
require('views/partials/header.php');


?>

<main>
   <div>
        <div class="container bg-grey mt-5">
           <?php if($deleted === true) : ?>         
                <p class="text-center alert alert-success">Deleted Successfully</p>
            <?php else : ?>
                <p class="text-center alert alert-danger">Deleted failed!</p>

            <?php endif; ?>
            <p class="text-center" style='color:blue'>Please wait while redirecting...</p>
        </div>
   </div>
   
   <div>
    <a href="/blogs">Go Back...</a>
   </div>
</main>

<script>
    // $(document).ready(function () {
        // console.log(window.location.href='/blogs');
    // });

    setTimeout(() => {
        // console.log(window.location.href='/blogs');
        window.location.href='/blogs';
    }, 3000);
</script>