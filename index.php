<?php
  include("./include/header.php");
  include("./include/slider.php");

  if (isset($_GET['category'])) {

  } else {
    $query_posts = "SELECT * FROM posts";
    $posts = $db->query($query_posts);
  }
?>

  <!-- Blogs -->
  <section class="py-3">
    <div class="container-fluid">
      <div class="row">

        <!-- blog -->
        <div class="col-md-8 mb-4">
          <div class="row">
            <?php 
            if ($posts->rowCount() > 0) {
              foreach ($posts as $post) {
                $category_id = $post['category_id'];
                $query_post_category = "SELECT * FROM categories WHERE id=$category_id";
                $post_category = $db->query($query_post_category)->fetch(); 

            ?>

            <div class="col-sm-6 mt-2">
              <div class="card">
                <img src="./upload/posts/<?php echo $post['image'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <h5 class="card-title"><?php echo $post['title']; ?></h5>
                    <div><span class="badge badge-secondary"> <?php echo $post_category['title']; ?> </span></div>
                  </div>
                  <p class="card-text text-justify">
                    <?php echo substr($post['body'] , 0 , 500) . "..."; ?>
                  </p>
                  <div class="d-flex justify-content-between">
                    <a href="single.php?post=<?php echo $post['id']; ?>" class="btn btn-outline-primary stretched-link">مشاهده</a>
                    <p>نویسنده : <?php echo $post['author']; ?> </p>
                  </div>
                </div>
              </div>
            </div>

            <?php 
              
              }
            }

            else {
              ?>

              <div class="col">
                <div class="alert alert-danger">
                  مقاله مورد نظر یافت نشد!
                </div>
              </div>
            
            <?php
            }
            ?>

          </div>
        </div>

        <!-- Sidebar -->
        <?php

          include("./include/sidebar.php");
        ?>


      </div>

    </div>

  </section>

  <!-- Footer -->
  <?php

    include("./include/footer.php");
  ?>

