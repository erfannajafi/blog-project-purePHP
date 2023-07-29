<?php 

include("./include/header.php");

$posts = $db->query("SELECT * FROM posts ORDER BY id DESC");

if(isset($_GET['action']) &&  isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = $db->prepare("DELETE FROM posts WHERE id = :id");
    $query->execute(['id' => $id]);

    header("Location:post.php");  //refresh
    exit();
}


?>

    <div class="container-fluid">
        <div class="row">

        <?php
        include("./include/sidebar.php");

        ?>


            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

                <div class="d-flex justify-content-between mt-5">
                    <h3>مقالات</h3>
                    <a href="new_post.php" class="btn btn-outline-primary">ایجاد مقاله</a>
                </div>

                <div class="table-responsive">
                    <form action="post">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>عنوان</th>
                                    <th>نویسنده</th>
                                    <th>دسته بندی</th>
                                    <th>تنظیمات</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                if($posts->rowCount() > 0) {
                                    foreach($posts as $post) {
                                        $category_id = $post['category_id'];

                                        $query_post_category = $db->prepare("SELECT * from categories WHERE id=:id");
                                        $query_post_category->execute(['id' => $category_id]);
                                        $post_category = $query_post_category->fetch();
                                        ?>                              
                                        <tr>
                                            <td> <?php echo $post['id']; ?> </td>
                                            <td> <?php echo $post['title']; ?> </td>
                                            <td> <?php echo $post['author']; ?> </td>
                                            <td> <?php echo $post_category['title']; ?> </td>
                                            <td>
                                                <a href="edit_post.php?id=<?php echo $post['id']; ?>" class="btn btn-outline-info">ویرایش</a>
                                                <a href="post.php?action=delete&id=<?php echo $post['id']; ?>" class="btn btn-outline-danger">حذف</a>
                                            </td>
                                        </tr>

                                <?php
                                    }
                                }  else {
                                    ?>
                                    <div class="alert alert-danger" role="alert">
                                        پستی برای نمایش وجود ندارد.
                                    </div>

                                    <?php
                                }
                                ?>


                            </tbody>
                        </table>

                    </form>
                </div>

            </main>

        </div>

    </div>

</body>

</html>