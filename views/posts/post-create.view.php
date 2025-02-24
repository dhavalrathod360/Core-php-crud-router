<?php 
require('views/partials/footer.php');
require('views/partials/nav.php');
require('views/partials/header.php');


?>
<style>
    input,textarea{
        margin-bottom: 8px;
    }
    form{
        margin: 0 auto;
    }
    .error{
        font-size: 14px;
        color: red;
    }
</style>
<main>
   <div>
        <div class="container bg-grey mt-5">
        <form class="col-md-6" method="post" action="/blogs/store" >
            <?php if(isset($success)) : ?>
                <p class="alert alert-danger">Error! Something went wrong!</p>
            <?php else: ?>
                <!-- <p class="alert alert-danger">Error! Something went wrong!</p> -->
                 <p></p>
            <?php endif;?>
            <div class="form-row">
                <div class="form-group ">
                    <label for="title">Post Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Post title" >
                    <?php if(isset($errors['title'])) : ?>
                        <p class="error">  <?= $errors['title'] ?>  </p>
                    <?php endif; ?>
                </div>

                <div class="form-group ">
                    <label for="description">Post Excerpt <small>(max character 150)</small></label>
                    <textarea name="body" id="body" class="form-control" placeholder="Add Post Excerpt"></textarea>
                    <?php if(isset($errors['body'])): ?>
                        <p class="error"> <?= $errors['body'] ?>  </p>
                    <?php endif; ?>
                </div>

                
            </div>
            <div class="form-row ">
                <div class="form-group ">
                    <label for="author_name">Author Name: </label>
                    <input type="text" class="form-control" id="author_name" name="author_name" placeholder="Name">
                </div>

                <div class="form-group ">
                    <label for="email"> Author Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    <?php if(isset($errors['email'])) : ?>
                        <p class="error"> <?= $errors['email']?>  </p>
                    <?php endif;?>
                </div>
                
            </div>
           
            
           
            <div class="form-group">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                   Agree to add Post
                </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit post</button>
            </form>
          
        </div>
   </div>
   <div>
    <a href="/blogs">Go Back...</a>
   </div>
</main>